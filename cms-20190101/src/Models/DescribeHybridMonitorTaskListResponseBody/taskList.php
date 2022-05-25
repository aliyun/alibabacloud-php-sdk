<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorTaskListResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorTaskListResponseBody\taskList\attachLabels;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorTaskListResponseBody\taskList\matchExpress;
use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @var attachLabels[]
     */
    public $attachLabels;

    /**
     * @var int
     */
    public $collectInterval;

    /**
     * @var string
     */
    public $collectTargetEndpoint;

    /**
     * @var string
     */
    public $collectTargetPath;

    /**
     * @var string
     */
    public $collectTargetType;

    /**
     * @var int
     */
    public $collectTimout;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string[]
     */
    public $instances;

    /**
     * @var string
     */
    public $logFilePath;

    /**
     * @var string
     */
    public $logProcess;

    /**
     * @var string
     */
    public $logSample;

    /**
     * @var string
     */
    public $logSplit;

    /**
     * @var matchExpress[]
     */
    public $matchExpress;

    /**
     * @var string
     */
    public $matchExpressRelation;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $SLSProcess;

    /**
     * @var string
     */
    public $targetUserId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $uploadRegion;

    /**
     * @var string
     */
    public $YARMConfig;
    protected $_name = [
        'attachLabels'          => 'AttachLabels',
        'collectInterval'       => 'CollectInterval',
        'collectTargetEndpoint' => 'CollectTargetEndpoint',
        'collectTargetPath'     => 'CollectTargetPath',
        'collectTargetType'     => 'CollectTargetType',
        'collectTimout'         => 'CollectTimout',
        'createTime'            => 'CreateTime',
        'description'           => 'Description',
        'extraInfo'             => 'ExtraInfo',
        'groupId'               => 'GroupId',
        'instances'             => 'Instances',
        'logFilePath'           => 'LogFilePath',
        'logProcess'            => 'LogProcess',
        'logSample'             => 'LogSample',
        'logSplit'              => 'LogSplit',
        'matchExpress'          => 'MatchExpress',
        'matchExpressRelation'  => 'MatchExpressRelation',
        'namespace'             => 'Namespace',
        'networkType'           => 'NetworkType',
        'SLSProcess'            => 'SLSProcess',
        'targetUserId'          => 'TargetUserId',
        'taskId'                => 'TaskId',
        'taskName'              => 'TaskName',
        'taskType'              => 'TaskType',
        'uploadRegion'          => 'UploadRegion',
        'YARMConfig'            => 'YARMConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachLabels) {
            $res['AttachLabels'] = [];
            if (null !== $this->attachLabels && \is_array($this->attachLabels)) {
                $n = 0;
                foreach ($this->attachLabels as $item) {
                    $res['AttachLabels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->collectInterval) {
            $res['CollectInterval'] = $this->collectInterval;
        }
        if (null !== $this->collectTargetEndpoint) {
            $res['CollectTargetEndpoint'] = $this->collectTargetEndpoint;
        }
        if (null !== $this->collectTargetPath) {
            $res['CollectTargetPath'] = $this->collectTargetPath;
        }
        if (null !== $this->collectTargetType) {
            $res['CollectTargetType'] = $this->collectTargetType;
        }
        if (null !== $this->collectTimout) {
            $res['CollectTimout'] = $this->collectTimout;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instances) {
            $res['Instances'] = $this->instances;
        }
        if (null !== $this->logFilePath) {
            $res['LogFilePath'] = $this->logFilePath;
        }
        if (null !== $this->logProcess) {
            $res['LogProcess'] = $this->logProcess;
        }
        if (null !== $this->logSample) {
            $res['LogSample'] = $this->logSample;
        }
        if (null !== $this->logSplit) {
            $res['LogSplit'] = $this->logSplit;
        }
        if (null !== $this->matchExpress) {
            $res['MatchExpress'] = [];
            if (null !== $this->matchExpress && \is_array($this->matchExpress)) {
                $n = 0;
                foreach ($this->matchExpress as $item) {
                    $res['MatchExpress'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->matchExpressRelation) {
            $res['MatchExpressRelation'] = $this->matchExpressRelation;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->SLSProcess) {
            $res['SLSProcess'] = $this->SLSProcess;
        }
        if (null !== $this->targetUserId) {
            $res['TargetUserId'] = $this->targetUserId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->uploadRegion) {
            $res['UploadRegion'] = $this->uploadRegion;
        }
        if (null !== $this->YARMConfig) {
            $res['YARMConfig'] = $this->YARMConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachLabels'])) {
            if (!empty($map['AttachLabels'])) {
                $model->attachLabels = [];
                $n                   = 0;
                foreach ($map['AttachLabels'] as $item) {
                    $model->attachLabels[$n++] = null !== $item ? attachLabels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CollectInterval'])) {
            $model->collectInterval = $map['CollectInterval'];
        }
        if (isset($map['CollectTargetEndpoint'])) {
            $model->collectTargetEndpoint = $map['CollectTargetEndpoint'];
        }
        if (isset($map['CollectTargetPath'])) {
            $model->collectTargetPath = $map['CollectTargetPath'];
        }
        if (isset($map['CollectTargetType'])) {
            $model->collectTargetType = $map['CollectTargetType'];
        }
        if (isset($map['CollectTimout'])) {
            $model->collectTimout = $map['CollectTimout'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = $map['Instances'];
            }
        }
        if (isset($map['LogFilePath'])) {
            $model->logFilePath = $map['LogFilePath'];
        }
        if (isset($map['LogProcess'])) {
            $model->logProcess = $map['LogProcess'];
        }
        if (isset($map['LogSample'])) {
            $model->logSample = $map['LogSample'];
        }
        if (isset($map['LogSplit'])) {
            $model->logSplit = $map['LogSplit'];
        }
        if (isset($map['MatchExpress'])) {
            if (!empty($map['MatchExpress'])) {
                $model->matchExpress = [];
                $n                   = 0;
                foreach ($map['MatchExpress'] as $item) {
                    $model->matchExpress[$n++] = null !== $item ? matchExpress::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MatchExpressRelation'])) {
            $model->matchExpressRelation = $map['MatchExpressRelation'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['SLSProcess'])) {
            $model->SLSProcess = $map['SLSProcess'];
        }
        if (isset($map['TargetUserId'])) {
            $model->targetUserId = $map['TargetUserId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['UploadRegion'])) {
            $model->uploadRegion = $map['UploadRegion'];
        }
        if (isset($map['YARMConfig'])) {
            $model->YARMConfig = $map['YARMConfig'];
        }

        return $model;
    }
}
