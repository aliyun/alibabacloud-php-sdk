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
     * @var codeSource
     */
    public $codeSource;

    /**
     * @var dataSources[]
     */
    public $dataSources;

    /**
     * @var string
     */
    public $debuggerConfigContent;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var JobElasticSpec
     */
    public $elasticSpec;

    /**
     * @var string[]
     */
    public $envs;

    /**
     * @var int
     */
    public $jobMaxRunningTimeMinutes;

    /**
     * @var JobSpec[]
     */
    public $jobSpecs;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $options;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var JobSettings
     */
    public $settings;

    /**
     * @var string
     */
    public $thirdpartyLibDir;

    /**
     * @var string[]
     */
    public $thirdpartyLibs;

    /**
     * @var string
     */
    public $userCommand;

    /**
     * @var userVpc
     */
    public $userVpc;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'codeSource'               => 'CodeSource',
        'dataSources'              => 'DataSources',
        'debuggerConfigContent'    => 'DebuggerConfigContent',
        'displayName'              => 'DisplayName',
        'elasticSpec'              => 'ElasticSpec',
        'envs'                     => 'Envs',
        'jobMaxRunningTimeMinutes' => 'JobMaxRunningTimeMinutes',
        'jobSpecs'                 => 'JobSpecs',
        'jobType'                  => 'JobType',
        'options'                  => 'Options',
        'priority'                 => 'Priority',
        'resourceId'               => 'ResourceId',
        'settings'                 => 'Settings',
        'thirdpartyLibDir'         => 'ThirdpartyLibDir',
        'thirdpartyLibs'           => 'ThirdpartyLibs',
        'userCommand'              => 'UserCommand',
        'userVpc'                  => 'UserVpc',
        'workspaceId'              => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeSource) {
            $res['CodeSource'] = null !== $this->codeSource ? $this->codeSource->toMap() : null;
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
        if (isset($map['CodeSource'])) {
            $model->codeSource = codeSource::fromMap($map['CodeSource']);
        }
        if (isset($map['DataSources'])) {
            if (!empty($map['DataSources'])) {
                $model->dataSources = [];
                $n                  = 0;
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
                $n               = 0;
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
