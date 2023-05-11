<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAJobResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAJobResponseBody\data\srcVersions;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAJobResponseBody\data\tags;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The destination firmware version of the update.
     *
     * @example 1.0.1
     *
     * @var string
     */
    public $destVersion;

    /**
     * @description The download protocol of the update package.
     *
     * @example HTTPS
     *
     * @var string
     */
    public $downloadProtocol;

    /**
     * @description The mode of dynamic update. Valid values:
     *
     *   **1**: constantly updates the devices that meet the conditions.
     *   **2**: updates only the devices that subsequently submit the latest firmware versions.
     *
     * This parameter is returned only if you perform a dynamic update.
     * @example 1
     *
     * @var int
     */
    public $dynamicMode;

    /**
     * @description The ID of the update package.
     *
     * @example UfuxnwygsuSkVE0VCN****0100
     *
     * @var string
     */
    public $firmwareId;

    /**
     * @description The phase ratio of the phased update.
     *
     * This parameter is returned only if you perform a phased update.
     * @example 50.00
     *
     * @var string
     */
    public $grayPercent;

    /**
     * @description The ID of the device group to be updated.
     *
     * @example CtjzCkNuOxUR***
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the device group to be updated.
     *
     * @example test
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The description of the update batch.
     *
     * @example batch upgrade
     *
     * @var string
     */
    public $jobDesc;

    /**
     * @description The ID of the update batch.
     *
     * @example HvKuBpuk3rdk6E92CP****0200
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The status of the update batch.
     *
     *   **PLANNED**: The update batch is being planned. The batch is created, but the scheduled time has not arrived. This parameter is returned only if you perform a static update.
     *   **IN_PROGRESS**: The update batch is running.
     *   **COMPLETED**: The update batch is completed.
     *   **CANCELED**: The update batch is canceled.
     *
     * @example IN_PROGRESS
     *
     * @var string
     */
    public $jobStatus;

    /**
     * @description The type of the batch. Valid values:
     *
     *   **VERFIY_FIRMWARE**: update package verification.
     *   **UPGRADE_FIRMWARE**: batch update.
     *
     * @example UPGRADE_FIRMWARE
     *
     * @var string
     */
    public $jobType;

    /**
     * @description The maximum number of devices to which the download URL of the update package is pushed per minute.
     *
     * @example 1000
     *
     * @var int
     */
    public $maximumPerMinute;

    /**
     * @description Specifies whether the device supports simultaneous updates of multiple modules.
     *
     *   **false** (default): no.
     *   **true**: yes.
     *
     * For more information, see [Overview](~~58328~~).
     * @example false
     *
     * @var bool
     */
    public $multiModuleMode;

    /**
     * @description The name of the update package.
     *
     * @example Firmware2
     *
     * @var string
     */
    public $name;

    /**
     * @description Specifies whether to confirm the update by using your mobile app.
     *
     * @example false
     *
     * @var bool
     */
    public $needConfirm;

    /**
     * @description Specifies whether to automatically push update tasks from IoT Platform to devices.
     *
     * @example true
     *
     * @var bool
     */
    public $needPush;

    /**
     * @description Specifies whether to overwrite the previous update task. Valid values:
     *
     *   **1**: The previous update task is not overwritten. If a device already has an update task, the previous update task is implemented.
     *   **2**: The previous update task is overwritten. Only the current update task is implemented.
     *
     * The update task that is in progress is not overwritten.
     * @example 1
     *
     * @var int
     */
    public $overwriteMode;

    /**
     * @description The ProductKey of the product to which the update package belongs.
     *
     * @example a19mzPZ****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The number of automatic retries after a device fails to be updated.
     *
     * This parameter is returned if a retry policy is set when you create the update batch.
     * @example 1
     *
     * @var int
     */
    public $retryCount;

    /**
     * @description The automatic retry interval after a device fails to be updated. Unit: minutes.
     *
     * This parameter is returned if a retry policy is set when you create the update batch.
     * @example 60
     *
     * @var int
     */
    public $retryInterval;

    /**
     * @description The update policy of the update batch. Valid values:
     *
     *   **DYNAMIC**: dynamic update. This value is returned if you call the [CreateOTADynamicUpgradeJob](~~147887~~) API operation to create an update batch.
     *   **STATIC**: static update. This value is returned if you call the [CreateOTAStaticUpgradeJob](~~147496~~) API operation to create an update batch.
     *
     * @example STATIC
     *
     * @var string
     */
    public $selectionType;

    /**
     * @description The list of firmware versions to be updated.
     *
     * @var srcVersions
     */
    public $srcVersions;

    /**
     * @description The tags of the update batch.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The scope of the update batch. Valid values:
     *
     * - **ALL**: updates all devices.
     * - **SPECIFIC**: updates specified devices.
     * - **GRAY**: performs a phased update.
     *
     * >  The value ALL is returned if you call the [CreateOTADynamicUpgradeJob](/help/en/iot-platform/latest/av6dui) API operation to create an update batch.
     * @example SPECIFIC
     *
     * @var string
     */
    public $targetSelection;

    /**
     * @description The timeout period of the device update. Unit: minutes.
     *
     * This parameter is returned if the timeout period is set when you create the update batch.
     * @example 5
     *
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @description The time when the update batch was created. The time is displayed in UTC.
     *
     * @example 2019-12-28T02:43:10.000Z
     *
     * @var string
     */
    public $utcCreate;

    /**
     * @description The end time of the update batch. The time is displayed in UTC.
     *
     * This parameter is returned only after the update batch is completed.
     * @example 2019-12-29T02:43:10.000Z
     *
     * @var string
     */
    public $utcEndTime;

    /**
     * @description The time when the update batch was last modified. The time is displayed in UTC.
     *
     * @example 2019-12-28T02:43:10.000Z
     *
     * @var string
     */
    public $utcModified;

    /**
     * @description The end time of the scheduled update batch. This parameter is returned only if the update batch is scheduled and the end time of the scheduled update batch is specified.
     *
     * @example 2019-12-30T02:43:10.000Z
     *
     * @var string
     */
    public $utcScheduleFinishTime;

    /**
     * @description The start time of the scheduled update batch. This parameter is returned only for scheduled update batches.
     *
     * @example 2019-12-29T02:43:10.000Z
     *
     * @var string
     */
    public $utcScheduleTime;

    /**
     * @description The start time of the update batch. The time is displayed in UTC.
     *
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
