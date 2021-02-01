<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetTrainAlgorithmResponseBody;

use AlibabaCloud\SDK\Vcs\V20200515\Models\GetTrainAlgorithmResponseBody\data\instanceList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $algorithmName;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $algorithmType;

    /**
     * @var int
     */
    public $trainSampleCount;

    /**
     * @var int
     */
    public $testSampleCount;

    /**
     * @var string
     */
    public $deleted;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $trainStatus;

    /**
     * @var int
     */
    public $trainProgress;

    /**
     * @var int
     */
    public $trainQueueSize;

    /**
     * @var int
     */
    public $trainEstimateTime;

    /**
     * @var string
     */
    public $deployStatus;

    /**
     * @var string
     */
    public $readyTrain;

    /**
     * @var string
     */
    public $deployVersion;

    /**
     * @var float
     */
    public $precision;

    /**
     * @var float
     */
    public $recall;

    /**
     * @var string
     */
    public $trainTime;

    /**
     * @var string
     */
    public $deployTime;

    /**
     * @var string
     */
    public $currentVersion;

    /**
     * @var string
     */
    public $noReadyReason;

    /**
     * @var string
     */
    public $canUnpublish;

    /**
     * @var instanceList[]
     */
    public $instanceList;
    protected $_name = [
        'id'                => 'Id',
        'algorithmName'     => 'AlgorithmName',
        'userId'            => 'UserId',
        'algorithmType'     => 'AlgorithmType',
        'trainSampleCount'  => 'TrainSampleCount',
        'testSampleCount'   => 'TestSampleCount',
        'deleted'           => 'Deleted',
        'gmtCreate'         => 'GmtCreate',
        'gmtModified'       => 'GmtModified',
        'trainStatus'       => 'TrainStatus',
        'trainProgress'     => 'TrainProgress',
        'trainQueueSize'    => 'TrainQueueSize',
        'trainEstimateTime' => 'TrainEstimateTime',
        'deployStatus'      => 'DeployStatus',
        'readyTrain'        => 'ReadyTrain',
        'deployVersion'     => 'DeployVersion',
        'precision'         => 'Precision',
        'recall'            => 'Recall',
        'trainTime'         => 'TrainTime',
        'deployTime'        => 'DeployTime',
        'currentVersion'    => 'CurrentVersion',
        'noReadyReason'     => 'NoReadyReason',
        'canUnpublish'      => 'CanUnpublish',
        'instanceList'      => 'InstanceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->algorithmName) {
            $res['AlgorithmName'] = $this->algorithmName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->algorithmType) {
            $res['AlgorithmType'] = $this->algorithmType;
        }
        if (null !== $this->trainSampleCount) {
            $res['TrainSampleCount'] = $this->trainSampleCount;
        }
        if (null !== $this->testSampleCount) {
            $res['TestSampleCount'] = $this->testSampleCount;
        }
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->trainStatus) {
            $res['TrainStatus'] = $this->trainStatus;
        }
        if (null !== $this->trainProgress) {
            $res['TrainProgress'] = $this->trainProgress;
        }
        if (null !== $this->trainQueueSize) {
            $res['TrainQueueSize'] = $this->trainQueueSize;
        }
        if (null !== $this->trainEstimateTime) {
            $res['TrainEstimateTime'] = $this->trainEstimateTime;
        }
        if (null !== $this->deployStatus) {
            $res['DeployStatus'] = $this->deployStatus;
        }
        if (null !== $this->readyTrain) {
            $res['ReadyTrain'] = $this->readyTrain;
        }
        if (null !== $this->deployVersion) {
            $res['DeployVersion'] = $this->deployVersion;
        }
        if (null !== $this->precision) {
            $res['Precision'] = $this->precision;
        }
        if (null !== $this->recall) {
            $res['Recall'] = $this->recall;
        }
        if (null !== $this->trainTime) {
            $res['TrainTime'] = $this->trainTime;
        }
        if (null !== $this->deployTime) {
            $res['DeployTime'] = $this->deployTime;
        }
        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
        }
        if (null !== $this->noReadyReason) {
            $res['NoReadyReason'] = $this->noReadyReason;
        }
        if (null !== $this->canUnpublish) {
            $res['CanUnpublish'] = $this->canUnpublish;
        }
        if (null !== $this->instanceList) {
            $res['InstanceList'] = [];
            if (null !== $this->instanceList && \is_array($this->instanceList)) {
                $n = 0;
                foreach ($this->instanceList as $item) {
                    $res['InstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['AlgorithmName'])) {
            $model->algorithmName = $map['AlgorithmName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['AlgorithmType'])) {
            $model->algorithmType = $map['AlgorithmType'];
        }
        if (isset($map['TrainSampleCount'])) {
            $model->trainSampleCount = $map['TrainSampleCount'];
        }
        if (isset($map['TestSampleCount'])) {
            $model->testSampleCount = $map['TestSampleCount'];
        }
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['TrainStatus'])) {
            $model->trainStatus = $map['TrainStatus'];
        }
        if (isset($map['TrainProgress'])) {
            $model->trainProgress = $map['TrainProgress'];
        }
        if (isset($map['TrainQueueSize'])) {
            $model->trainQueueSize = $map['TrainQueueSize'];
        }
        if (isset($map['TrainEstimateTime'])) {
            $model->trainEstimateTime = $map['TrainEstimateTime'];
        }
        if (isset($map['DeployStatus'])) {
            $model->deployStatus = $map['DeployStatus'];
        }
        if (isset($map['ReadyTrain'])) {
            $model->readyTrain = $map['ReadyTrain'];
        }
        if (isset($map['DeployVersion'])) {
            $model->deployVersion = $map['DeployVersion'];
        }
        if (isset($map['Precision'])) {
            $model->precision = $map['Precision'];
        }
        if (isset($map['Recall'])) {
            $model->recall = $map['Recall'];
        }
        if (isset($map['TrainTime'])) {
            $model->trainTime = $map['TrainTime'];
        }
        if (isset($map['DeployTime'])) {
            $model->deployTime = $map['DeployTime'];
        }
        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
        }
        if (isset($map['NoReadyReason'])) {
            $model->noReadyReason = $map['NoReadyReason'];
        }
        if (isset($map['CanUnpublish'])) {
            $model->canUnpublish = $map['CanUnpublish'];
        }
        if (isset($map['InstanceList'])) {
            if (!empty($map['InstanceList'])) {
                $model->instanceList = [];
                $n                   = 0;
                foreach ($map['InstanceList'] as $item) {
                    $model->instanceList[$n++] = null !== $item ? instanceList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
