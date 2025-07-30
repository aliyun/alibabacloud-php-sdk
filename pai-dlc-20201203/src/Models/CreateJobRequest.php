<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateJobRequest\codeSource;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateJobRequest\dataSources;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateJobRequest\userVpc;
use AlibabaCloud\Tea\Model;

class CreateJobRequest extends Model
{
    /**
     * @description The job visibility. Valid values:
     *
     *   PUBLIC: The job is visible to all members in the workspace.
     *   PRIVATE: The job is visible only to you and the administrator of the workspace.
     *
     * @example PRIVATE
     *
     * @var string
     */
    public $accessibility;

    /**
     * @description The code source of the job. Before the node of the job runs, DLC automatically downloads the configured code from the code source and mounts the code to the local path of the container.
     *
     * @var codeSource
     */
    public $codeSource;

    /**
     * @description The access credential configuration.
     *
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @description The data sources for job running.
     *
     * @var dataSources[]
     */
    public $dataSources;

    /**
     * @description This parameter is not supported.
     *
     * @example “”
     *
     * @var string
     */
    public $debuggerConfigContent;

    /**
     * @description The job name. The name must be in the following format:
     *
     *   The name must be 1 to 256 characters in length.
     *   The name can contain digits, letters, underscores (_), periods (.), and hyphens (-).
     *
     * This parameter is required.
     *
     * @example tf-mnist-test
     *
     * @var string
     */
    public $displayName;

    /**
     * @description This parameter is not supported.
     *
     * @var JobElasticSpec
     */
    public $elasticSpec;

    /**
     * @description The environment variables.
     *
     * @var string[]
     */
    public $envs;

    /**
     * @description The maximum running duration of the job. Unit: minutes.
     *
     * @example 1024
     *
     * @var int
     */
    public $jobMaxRunningTimeMinutes;

    /**
     * @description **JobSpecs** describes the configurations for job running, such as the image address, startup command, node resource declaration, and number of replicas.
     *
     * A DLC job consists of different types of nodes. If nodes of the same type have exactly the same configuration, the configuration is called JobSpec. **JobSpecs** specifies the configurations of all types of nodes. The value is of the array type.
     *
     * This parameter is required.
     *
     * @var JobSpec[]
     */
    public $jobSpecs;

    /**
     * @description The job type. The value is case-sensitive. The following job types are supported:
     *
     *   TFJob
     *   PyTorchJob
     *   MPIJob
     *   XGBoostJob
     *   OneFlowJob
     *   ElasticBatchJob
     *   SlurmJob
     *   RayJob
     *
     * Valid values and corresponding frameworks:
     *
     *   OneFlowJob: OneFlow.
     *   PyTorchJob: PyTorch.
     *   SlurmJob: Slurm.
     *   XGBoostJob: XGBoost.
     *   ElasticBatchJob: ElasticBatch.
     *   MPIJob: MPIJob.
     *   TFJob: Tensorflow.
     *   RayJob: Ray.
     *
     * This parameter is required.
     *
     * @example TFJob
     *
     * @var string
     */
    public $jobType;

    /**
     * @description The additional configuration of the job. You can use this parameter to adjust the behavior of the attached data source. For example, if the attached data source of the job is of the OSS type, you can use this parameter to add the following configurations to override the default parameters of JindoFS: `fs.oss.download.thread.concurrency=4,fs.oss.download.queue.size=16`.
     *
     * @example key1=value1,key2=value2
     *
     * @var string
     */
    public $options;

    /**
     * @description The priority of the job. Default value: 1. Valid values: 1 to 9.
     *
     *   1 is the lowest priority.
     *   9: the highest priority.
     *
     * @example 8
     *
     * @var int
     */
    public $priority;

    /**
     * @description The ID of the resource group. This parameter is optional.
     *
     *   If you leave this parameter empty, the job is submitted to a public resource group.
     *   If a resource quota is bound to the current workspace, you can specify the resource quota ID. For more information about how to query the resource quota ID, see [Manage resource quotas](https://help.aliyun.com/document_detail/2651299.html).
     *
     * @example rs-xxx
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The additional parameter configurations of the job.
     *
     * @var JobSettings
     */
    public $settings;

    /**
     * @description The policy that is used to check whether a distributed multi-node job is successful. Only TensorFlow distributed multi-node jobs are supported.
     *
     *   ChiefWorker: If you use this policy, the job is considered successful when the pod on the chief node completes operations.
     *   AllWorkers (default): If you use this policy, the job is considered successful when all worker nodes complete operations.
     *
     * @example AllWorkers
     *
     * @var string
     */
    public $successPolicy;

    /**
     * @description The folder in which the third-party Python library file requirements.txt is stored. Before the startup command specified by the UserCommand parameter is run on each node, DLC fetches the requirements.txt file from the folder and runs `pip install -r` to install the required package and library.
     *
     * @example /root/code/
     *
     * @var string
     */
    public $thirdpartyLibDir;

    /**
     * @description The third-party Python libraries to be installed.
     *
     * @var string[]
     */
    public $thirdpartyLibs;

    /**
     * @description The startup command for all nodes of the job.
     *
     * This parameter is required.
     *
     * @example python /root/code/mnist.py
     *
     * @var string
     */
    public $userCommand;

    /**
     * @description The VPC settings.
     *
     * @var userVpc
     */
    public $userVpc;

    /**
     * @description The workspace ID.
     *
     * @example ws-20210126170216-xxxxxxx
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'codeSource' => 'CodeSource',
        'credentialConfig' => 'CredentialConfig',
        'dataSources' => 'DataSources',
        'debuggerConfigContent' => 'DebuggerConfigContent',
        'displayName' => 'DisplayName',
        'elasticSpec' => 'ElasticSpec',
        'envs' => 'Envs',
        'jobMaxRunningTimeMinutes' => 'JobMaxRunningTimeMinutes',
        'jobSpecs' => 'JobSpecs',
        'jobType' => 'JobType',
        'options' => 'Options',
        'priority' => 'Priority',
        'resourceId' => 'ResourceId',
        'settings' => 'Settings',
        'successPolicy' => 'SuccessPolicy',
        'thirdpartyLibDir' => 'ThirdpartyLibDir',
        'thirdpartyLibs' => 'ThirdpartyLibs',
        'userCommand' => 'UserCommand',
        'userVpc' => 'UserVpc',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }
        if (null !== $this->codeSource) {
            $res['CodeSource'] = null !== $this->codeSource ? $this->codeSource->toMap() : null;
        }
        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toMap() : null;
        }
        if (null !== $this->dataSources) {
            $res['DataSources'] = [];
            if (null !== $this->dataSources && \is_array($this->dataSources)) {
                $n = 0;
                foreach ($this->dataSources as $item) {
                    $res['DataSources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->debuggerConfigContent) {
            $res['DebuggerConfigContent'] = $this->debuggerConfigContent;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->elasticSpec) {
            $res['ElasticSpec'] = null !== $this->elasticSpec ? $this->elasticSpec->toMap() : null;
        }
        if (null !== $this->envs) {
            $res['Envs'] = $this->envs;
        }
        if (null !== $this->jobMaxRunningTimeMinutes) {
            $res['JobMaxRunningTimeMinutes'] = $this->jobMaxRunningTimeMinutes;
        }
        if (null !== $this->jobSpecs) {
            $res['JobSpecs'] = [];
            if (null !== $this->jobSpecs && \is_array($this->jobSpecs)) {
                $n = 0;
                foreach ($this->jobSpecs as $item) {
                    $res['JobSpecs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->settings) {
            $res['Settings'] = null !== $this->settings ? $this->settings->toMap() : null;
        }
        if (null !== $this->successPolicy) {
            $res['SuccessPolicy'] = $this->successPolicy;
        }
        if (null !== $this->thirdpartyLibDir) {
            $res['ThirdpartyLibDir'] = $this->thirdpartyLibDir;
        }
        if (null !== $this->thirdpartyLibs) {
            $res['ThirdpartyLibs'] = $this->thirdpartyLibs;
        }
        if (null !== $this->userCommand) {
            $res['UserCommand'] = $this->userCommand;
        }
        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toMap() : null;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }
        if (isset($map['CodeSource'])) {
            $model->codeSource = codeSource::fromMap($map['CodeSource']);
        }
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = CredentialConfig::fromMap($map['CredentialConfig']);
        }
        if (isset($map['DataSources'])) {
            if (!empty($map['DataSources'])) {
                $model->dataSources = [];
                $n = 0;
                foreach ($map['DataSources'] as $item) {
                    $model->dataSources[$n++] = null !== $item ? dataSources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DebuggerConfigContent'])) {
            $model->debuggerConfigContent = $map['DebuggerConfigContent'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['ElasticSpec'])) {
            $model->elasticSpec = JobElasticSpec::fromMap($map['ElasticSpec']);
        }
        if (isset($map['Envs'])) {
            $model->envs = $map['Envs'];
        }
        if (isset($map['JobMaxRunningTimeMinutes'])) {
            $model->jobMaxRunningTimeMinutes = $map['JobMaxRunningTimeMinutes'];
        }
        if (isset($map['JobSpecs'])) {
            if (!empty($map['JobSpecs'])) {
                $model->jobSpecs = [];
                $n = 0;
                foreach ($map['JobSpecs'] as $item) {
                    $model->jobSpecs[$n++] = null !== $item ? JobSpec::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Settings'])) {
            $model->settings = JobSettings::fromMap($map['Settings']);
        }
        if (isset($map['SuccessPolicy'])) {
            $model->successPolicy = $map['SuccessPolicy'];
        }
        if (isset($map['ThirdpartyLibDir'])) {
            $model->thirdpartyLibDir = $map['ThirdpartyLibDir'];
        }
        if (isset($map['ThirdpartyLibs'])) {
            if (!empty($map['ThirdpartyLibs'])) {
                $model->thirdpartyLibs = $map['ThirdpartyLibs'];
            }
        }
        if (isset($map['UserCommand'])) {
            $model->userCommand = $map['UserCommand'];
        }
        if (isset($map['UserVpc'])) {
            $model->userVpc = userVpc::fromMap($map['UserVpc']);
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
