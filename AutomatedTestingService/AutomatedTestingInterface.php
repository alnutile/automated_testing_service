<?php namespace AutomatedTestingService;

use Symfony\Component\EventDispatcher\EventDispatcher;
use AutomatedTestingService\RequestObjectInterface;
use AutomatedTestingService\ReturnObjectInterface;


/**
 * Interface AutomatedTestingInterface will setup some common methods to talk
 * to a provider.
 * The RequestObjectInterface will define a common format to send requests in
 * and the ReturnObjectInterface will define a custom return object to expect
 * @package AutomatedTestingService
 *
 * @author Alfred Nutile <me@alfrednutile.info>
 *
 * @api
 */
interface AutomatedTestingInterface {

    /**
     * Send Request object for run and return
     * a ReturnObjectInterface from the run command.
     *
     * @param \AutomatedTestingService\RequestObjectInterfaceInterface $run
     * @return ReturnObjectInterface $results
     */
    public function run(RequestObjectInterfaceInterface $run);

    /**
     * Get the up or down status history of the provider
     * this can help to verify a fail is not theirs
     *
     * @param RequestObjectInterface $providerStatus
     * @return ReturnObjectInterface $results
     */
    public function getStatusOfProvider(RequestObjectInterface $providerStatus);

    /**
     * Send job stop request to the service
     *
     * @param RequestObjectInterface $stopJob
     * @return ReturnObjectInterface return true on stop Exception on error
     */
    public function stopJob(RequestObjectInterface $stopJob);

    /**
     * @param RequestObjectInterface $getJobId
     * @return ReturnObjectInterface string $jobId
     */
    public function getJobId(RequestObjectInterface $getJobId);

    public function setJobId($jobId);

    public function checkJobStatus(RequestObjectInterface $checkJobStatus);

    public function getJobResults(RequestObjectInterface $getJobResults);

    public function getJobsAssets(RequestObjectInterface $getJobAssets);

    public function downloadJobAssets(RequestObjectInterface $downloadJobAssets);

    public function cancelJob(RequestObjectInterface $cancelJob);

    public function setJobsData(RequestObjectInterface $setJobsData);

    public function getJobs(RequestObjectInterface $jobIds);


}
