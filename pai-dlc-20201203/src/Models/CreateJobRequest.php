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
     * @description 代码源配置
     *
     * @var codeSource
     */
    public $codeSource;

    /**
     * @description 数据源配置列表
     *
     * @var dataSources[]
     */
    public $dataSources;

    /**
     * @description 作业显示名称
     *
     * @var string
     */
    public $displayName;

    /**
     * @var JobElasticSpec
     */
    public $elasticSpec;

    /**
     * @description 环境变量配置
     *
     * @var string[]
     */
    public $envs;

    /**
     * @description 作业最大运行时间
     *
     * @var int
     */
    public $jobMaxRunningTimeMinutes;

    /**
     * @description 作业规格配置
     *
     * @var JobSpec[]
     */
    public $jobSpecs;

    /**
     * @description 作业类型
     *
     * @var string
     */
    public $jobType;

    /**
     * @description 作业优先级
     *
     * @var int
     */
    public $priority;

    /**
     * @description 资源组编号
     *
     * @var string
     */
    public $resourceId;

    /**
     * @var JobSettings
     */
    public $settings;

    /**
     * @description 三方库(requirements.txt)文件路径
     *
     * @var string
     */
    public $thirdpartyLibDir;

    /**
     * @description 三方库配置列表
     *
     * @var string[]
     */
    public $thirdpartyLibs;

    /**
     * @description 作业命令
     *
     * @var string
     */
    public $userCommand;

    /**
     * @description 用户VPC
     *
     * @var userVpc
     */
    public $userVpc;

    /**
     * @description 工作空间编号
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'codeSource'               => 'CodeSource',
        'dataSources'              => 'DataSources',
        'displayName'              => 'DisplayName',
        'elasticSpec'              => 'ElasticSpec',
        'envs'                     => 'Envs',
        'jobMaxRunningTimeMinutes' => 'JobMaxRunningTimeMinutes',
        'jobSpecs'                 => 'JobSpecs',
        'jobType'                  => 'JobType',
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
