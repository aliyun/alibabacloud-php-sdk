<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAJobResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAJobResponseBody\data\srcVersions;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAJobResponseBody\data\tags;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $destVersion;

    /**
     * @var int
     */
    public $dynamicMode;

    /**
     * @var string
     */
    public $firmwareId;

    /**
     * @var string
     */
    public $grayPercent;

    /**
     * @var string
     */
    public $jobDesc;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobStatus;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var int
     */
    public $maximumPerMinute;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $needConfirm;

    /**
     * @var bool
     */
    public $needPush;

    /**
     * @var int
     */
    public $overwriteMode;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var int
     */
    public $retryCount;

    /**
     * @var int
     */
    public $retryInterval;

    /**
     * @var string
     */
    public $selectionType;

    /**
     * @var srcVersions
     */
    public $srcVersions;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $targetSelection;

    /**
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @var string
     */
    public $utcCreate;

    /**
     * @var string
     */
    public $utcEndTime;

    /**
     * @var string
     */
    public $utcModified;

    /**
     * @var string
     */
    public $utcScheduleFinishTime;

    /**
     * @var string
     */
    public $utcScheduleTime;

    /**
     * @var string
     */
    public $utcStartTime;
    protected $_name = [
        'destVersion'           => 'DestVersion',
        'dynamicMode'           => 'DynamicMode',
        'firmwareId'            => 'FirmwareId',
        'grayPercent'           => 'GrayPercent',
        'jobDesc'               => 'JobDesc',
        'jobId'                 => 'JobId',
        'jobStatus'             => 'JobStatus',
        'jobType'               => 'JobType',
        'maximumPerMinute'      => 'MaximumPerMinute',
        'name'                  => 'Name',
        'needConfirm'           => 'NeedConfirm',
        'needPush'              => 'NeedPush',
        'overwriteMode'         => 'OverwriteMode',
        'productKey'            => 'ProductKey',
        'retryCount'            => 'RetryCount',
        'retryInterval'         => 'RetryInterval',
        'selectionType'         => 'SelectionType',
        'srcVersions'           => 'SrcVersions',
        'tags'                  => 'Tags',
        'targetSelection'       => 'TargetSelection',
        'timeoutInMinutes'      => 'TimeoutInMinutes',
        'utcCreate'             => 'UtcCreate',
        'utcEndTime'            => 'UtcEndTime',
        'utcModified'           => 'UtcModified',
        'utcScheduleFinishTime' => 'UtcScheduleFinishTime',
        'utcScheduleTime'       => 'UtcScheduleTime',
        'utcStartTime'          => 'UtcStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destVersion) {
            $res['DestVersion'] = $this->destVersion;
        }
        if (null !== $this->dynamicMode) {
            $res['DynamicMode'] = $this->dynamicMode;
        }
        if (null !== $this->firmwareId) {
            $res['FirmwareId'] = $this->firmwareId;
        }
        if (null !== $this->grayPercent) {
            $res['GrayPercent'] = $this->grayPercent;
        }
        if (null !== $this->jobDesc) {
            $res['JobDesc'] = $this->jobDesc;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->maximumPerMinute) {
            $res['MaximumPerMinute'] = $this->maximumPerMinute;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->needConfirm) {
            $res['NeedConfirm'] = $this->needConfirm;
        }
        if (null !== $this->needPush) {
            $res['NeedPush'] = $this->needPush;
        }
        if (null !== $this->overwriteMode) {
            $res['OverwriteMode'] = $this->overwriteMode;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->retryCount) {
            $res['RetryCount'] = $this->retryCount;
        }
        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
        }
        if (null !== $this->selectionType) {
            $res['SelectionType'] = $this->selectionType;
        }
        if (null !== $this->srcVersions) {
            $res['SrcVersions'] = null !== $this->srcVersions ? $this->srcVersions->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->targetSelection) {
            $res['TargetSelection'] = $this->targetSelection;
        }
        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
        }
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
        }
        if (null !== $this->utcEndTime) {
            $res['UtcEndTime'] = $this->utcEndTime;
        }
        if (null !== $this->utcModified) {
            $res['UtcModified'] = $this->utcModified;
        }
        if (null !== $this->utcScheduleFinishTime) {
            $res['UtcScheduleFinishTime'] = $this->utcScheduleFinishTime;
        }
        if (null !== $this->utcScheduleTime) {
            $res['UtcScheduleTime'] = $this->utcScheduleTime;
        }
        if (null !== $this->utcStartTime) {
            $res['UtcStartTime'] = $this->utcStartTime;
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
        if (isset($map['DestVersion'])) {
            $model->destVersion = $map['DestVersion'];
        }
        if (isset($map['DynamicMode'])) {
            $model->dynamicMode = $map['DynamicMode'];
        }
        if (isset($map['FirmwareId'])) {
            $model->firmwareId = $map['FirmwareId'];
        }
        if (isset($map['GrayPercent'])) {
            $model->grayPercent = $map['GrayPercent'];
        }
        if (isset($map['JobDesc'])) {
            $model->jobDesc = $map['JobDesc'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['MaximumPerMinute'])) {
            $model->maximumPerMinute = $map['MaximumPerMinute'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NeedConfirm'])) {
            $model->needConfirm = $map['NeedConfirm'];
        }
        if (isset($map['NeedPush'])) {
            $model->needPush = $map['NeedPush'];
        }
        if (isset($map['OverwriteMode'])) {
            $model->overwriteMode = $map['OverwriteMode'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['RetryCount'])) {
            $model->retryCount = $map['RetryCount'];
        }
        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
        }
        if (isset($map['SelectionType'])) {
            $model->selectionType = $map['SelectionType'];
        }
        if (isset($map['SrcVersions'])) {
            $model->srcVersions = srcVersions::fromMap($map['SrcVersions']);
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['TargetSelection'])) {
            $model->targetSelection = $map['TargetSelection'];
        }
        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }
        if (isset($map['UtcEndTime'])) {
            $model->utcEndTime = $map['UtcEndTime'];
        }
        if (isset($map['UtcModified'])) {
            $model->utcModified = $map['UtcModified'];
        }
        if (isset($map['UtcScheduleFinishTime'])) {
            $model->utcScheduleFinishTime = $map['UtcScheduleFinishTime'];
        }
        if (isset($map['UtcScheduleTime'])) {
            $model->utcScheduleTime = $map['UtcScheduleTime'];
        }
        if (isset($map['UtcStartTime'])) {
            $model->utcStartTime = $map['UtcStartTime'];
        }

        return $model;
    }
}
