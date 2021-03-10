<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAJobResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAJobResponse\data\srcVersions;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAJobResponse\data\tags;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $utcCreate;

    /**
     * @var string
     */
    public $utcModified;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $firmwareId;

    /**
     * @var string
     */
    public $utcStartTime;

    /**
     * @var string
     */
    public $utcEndTime;

    /**
     * @var string
     */
    public $jobStatus;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $jobDesc;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $utcScheduleTime;

    /**
     * @var int
     */
    public $retryInterval;

    /**
     * @var int
     */
    public $retryCount;

    /**
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @var string
     */
    public $targetSelection;

    /**
     * @var string
     */
    public $selectionType;

    /**
     * @var string
     */
    public $grayPercent;

    /**
     * @var int
     */
    public $maximumPerMinute;

    /**
     * @var string
     */
    public $destVersion;

    /**
     * @var string
     */
    public $utcScheduleFinishTime;

    /**
     * @var int
     */
    public $overwriteMode;

    /**
     * @var int
     */
    public $dynamicMode;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var srcVersions
     */
    public $srcVersions;
    protected $_name = [
        'jobId'                 => 'JobId',
        'utcCreate'             => 'UtcCreate',
        'utcModified'           => 'UtcModified',
        'productKey'            => 'ProductKey',
        'firmwareId'            => 'FirmwareId',
        'utcStartTime'          => 'UtcStartTime',
        'utcEndTime'            => 'UtcEndTime',
        'jobStatus'             => 'JobStatus',
        'jobType'               => 'JobType',
        'jobDesc'               => 'JobDesc',
        'name'                  => 'Name',
        'utcScheduleTime'       => 'UtcScheduleTime',
        'retryInterval'         => 'RetryInterval',
        'retryCount'            => 'RetryCount',
        'timeoutInMinutes'      => 'TimeoutInMinutes',
        'targetSelection'       => 'TargetSelection',
        'selectionType'         => 'SelectionType',
        'grayPercent'           => 'GrayPercent',
        'maximumPerMinute'      => 'MaximumPerMinute',
        'destVersion'           => 'DestVersion',
        'utcScheduleFinishTime' => 'UtcScheduleFinishTime',
        'overwriteMode'         => 'OverwriteMode',
        'dynamicMode'           => 'DynamicMode',
        'tags'                  => 'Tags',
        'srcVersions'           => 'SrcVersions',
    ];

    public function validate()
    {
        Model::validateRequired('jobId', $this->jobId, true);
        Model::validateRequired('utcCreate', $this->utcCreate, true);
        Model::validateRequired('utcModified', $this->utcModified, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('firmwareId', $this->firmwareId, true);
        Model::validateRequired('utcStartTime', $this->utcStartTime, true);
        Model::validateRequired('utcEndTime', $this->utcEndTime, true);
        Model::validateRequired('jobStatus', $this->jobStatus, true);
        Model::validateRequired('jobType', $this->jobType, true);
        Model::validateRequired('jobDesc', $this->jobDesc, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('utcScheduleTime', $this->utcScheduleTime, true);
        Model::validateRequired('retryInterval', $this->retryInterval, true);
        Model::validateRequired('retryCount', $this->retryCount, true);
        Model::validateRequired('timeoutInMinutes', $this->timeoutInMinutes, true);
        Model::validateRequired('targetSelection', $this->targetSelection, true);
        Model::validateRequired('selectionType', $this->selectionType, true);
        Model::validateRequired('grayPercent', $this->grayPercent, true);
        Model::validateRequired('maximumPerMinute', $this->maximumPerMinute, true);
        Model::validateRequired('destVersion', $this->destVersion, true);
        Model::validateRequired('utcScheduleFinishTime', $this->utcScheduleFinishTime, true);
        Model::validateRequired('overwriteMode', $this->overwriteMode, true);
        Model::validateRequired('dynamicMode', $this->dynamicMode, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('srcVersions', $this->srcVersions, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
        }
        if (null !== $this->utcModified) {
            $res['UtcModified'] = $this->utcModified;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->firmwareId) {
            $res['FirmwareId'] = $this->firmwareId;
        }
        if (null !== $this->utcStartTime) {
            $res['UtcStartTime'] = $this->utcStartTime;
        }
        if (null !== $this->utcEndTime) {
            $res['UtcEndTime'] = $this->utcEndTime;
        }
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->jobDesc) {
            $res['JobDesc'] = $this->jobDesc;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->utcScheduleTime) {
            $res['UtcScheduleTime'] = $this->utcScheduleTime;
        }
        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
        }
        if (null !== $this->retryCount) {
            $res['RetryCount'] = $this->retryCount;
        }
        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
        }
        if (null !== $this->targetSelection) {
            $res['TargetSelection'] = $this->targetSelection;
        }
        if (null !== $this->selectionType) {
            $res['SelectionType'] = $this->selectionType;
        }
        if (null !== $this->grayPercent) {
            $res['GrayPercent'] = $this->grayPercent;
        }
        if (null !== $this->maximumPerMinute) {
            $res['MaximumPerMinute'] = $this->maximumPerMinute;
        }
        if (null !== $this->destVersion) {
            $res['DestVersion'] = $this->destVersion;
        }
        if (null !== $this->utcScheduleFinishTime) {
            $res['UtcScheduleFinishTime'] = $this->utcScheduleFinishTime;
        }
        if (null !== $this->overwriteMode) {
            $res['OverwriteMode'] = $this->overwriteMode;
        }
        if (null !== $this->dynamicMode) {
            $res['DynamicMode'] = $this->dynamicMode;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->srcVersions) {
            $res['SrcVersions'] = null !== $this->srcVersions ? $this->srcVersions->toMap() : null;
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }
        if (isset($map['UtcModified'])) {
            $model->utcModified = $map['UtcModified'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['FirmwareId'])) {
            $model->firmwareId = $map['FirmwareId'];
        }
        if (isset($map['UtcStartTime'])) {
            $model->utcStartTime = $map['UtcStartTime'];
        }
        if (isset($map['UtcEndTime'])) {
            $model->utcEndTime = $map['UtcEndTime'];
        }
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['JobDesc'])) {
            $model->jobDesc = $map['JobDesc'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['UtcScheduleTime'])) {
            $model->utcScheduleTime = $map['UtcScheduleTime'];
        }
        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
        }
        if (isset($map['RetryCount'])) {
            $model->retryCount = $map['RetryCount'];
        }
        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }
        if (isset($map['TargetSelection'])) {
            $model->targetSelection = $map['TargetSelection'];
        }
        if (isset($map['SelectionType'])) {
            $model->selectionType = $map['SelectionType'];
        }
        if (isset($map['GrayPercent'])) {
            $model->grayPercent = $map['GrayPercent'];
        }
        if (isset($map['MaximumPerMinute'])) {
            $model->maximumPerMinute = $map['MaximumPerMinute'];
        }
        if (isset($map['DestVersion'])) {
            $model->destVersion = $map['DestVersion'];
        }
        if (isset($map['UtcScheduleFinishTime'])) {
            $model->utcScheduleFinishTime = $map['UtcScheduleFinishTime'];
        }
        if (isset($map['OverwriteMode'])) {
            $model->overwriteMode = $map['OverwriteMode'];
        }
        if (isset($map['DynamicMode'])) {
            $model->dynamicMode = $map['DynamicMode'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['SrcVersions'])) {
            $model->srcVersions = srcVersions::fromMap($map['SrcVersions']);
        }

        return $model;
    }
}
