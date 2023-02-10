<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAJobResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAJobResponseBody\data\srcVersions;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAJobResponseBody\data\tags;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1.0.1
     *
     * @var string
     */
    public $destVersion;

    /**
     * @example HTTPS
     *
     * @var string
     */
    public $downloadProtocol;

    /**
     * @example 1
     *
     * @var int
     */
    public $dynamicMode;

    /**
     * @example UfuxnwygsuSkVE0VCN****0100
     *
     * @var string
     */
    public $firmwareId;

    /**
     * @example 50.00
     *
     * @var string
     */
    public $grayPercent;

    /**
     * @example CtjzCkNuOxUR***
     *
     * @var string
     */
    public $groupId;

    /**
     * @example test
     *
     * @var string
     */
    public $groupName;

    /**
     * @example batch upgrade
     *
     * @var string
     */
    public $jobDesc;

    /**
     * @example HvKuBpuk3rdk6E92CP****0200
     *
     * @var string
     */
    public $jobId;

    /**
     * @example IN_PROGRESS
     *
     * @var string
     */
    public $jobStatus;

    /**
     * @example UPGRADE_FIRMWARE
     *
     * @var string
     */
    public $jobType;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maximumPerMinute;

    /**
     * @example false
     *
     * @var bool
     */
    public $multiModuleMode;

    /**
     * @example Firmware2
     *
     * @var string
     */
    public $name;

    /**
     * @example false
     *
     * @var bool
     */
    public $needConfirm;

    /**
     * @example true
     *
     * @var bool
     */
    public $needPush;

    /**
     * @example 1
     *
     * @var int
     */
    public $overwriteMode;

    /**
     * @example a19mzPZ****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example 1
     *
     * @var int
     */
    public $retryCount;

    /**
     * @example 60
     *
     * @var int
     */
    public $retryInterval;

    /**
     * @example STATIC
     *
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
     * @example SPECIFIC
     *
     * @var string
     */
    public $targetSelection;

    /**
     * @example 5
     *
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @example 2019-12-28T02:43:10.000Z
     *
     * @var string
     */
    public $utcCreate;

    /**
     * @example 2019-12-29T02:43:10.000Z
     *
     * @var string
     */
    public $utcEndTime;

    /**
     * @example 2019-12-28T02:43:10.000Z
     *
     * @var string
     */
    public $utcModified;

    /**
     * @example 2019-12-30T02:43:10.000Z
     *
     * @var string
     */
    public $utcScheduleFinishTime;

    /**
     * @example 2019-12-29T02:43:10.000Z
     *
     * @var string
     */
    public $utcScheduleTime;

    /**
     * @example 2019-12-28T02:43:10.000Z
     *
     * @var string
     */
    public $utcStartTime;
    protected $_name = [
        'destVersion'           => 'DestVersion',
        'downloadProtocol'      => 'DownloadProtocol',
        'dynamicMode'           => 'DynamicMode',
        'firmwareId'            => 'FirmwareId',
        'grayPercent'           => 'GrayPercent',
        'groupId'               => 'GroupId',
        'groupName'             => 'GroupName',
        'jobDesc'               => 'JobDesc',
        'jobId'                 => 'JobId',
        'jobStatus'             => 'JobStatus',
        'jobType'               => 'JobType',
        'maximumPerMinute'      => 'MaximumPerMinute',
        'multiModuleMode'       => 'MultiModuleMode',
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
        if (null !== $this->downloadProtocol) {
            $res['DownloadProtocol'] = $this->downloadProtocol;
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
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
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
        if (null !== $this->multiModuleMode) {
            $res['MultiModuleMode'] = $this->multiModuleMode;
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
        if (isset($map['DownloadProtocol'])) {
            $model->downloadProtocol = $map['DownloadProtocol'];
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
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
        if (isset($map['MultiModuleMode'])) {
            $model->multiModuleMode = $map['MultiModuleMode'];
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
