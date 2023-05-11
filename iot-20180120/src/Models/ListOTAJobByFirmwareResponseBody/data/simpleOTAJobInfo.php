<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAJobByFirmwareResponseBody\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAJobByFirmwareResponseBody\data\simpleOTAJobInfo\tags;
use AlibabaCloud\Tea\Model;

class simpleOTAJobInfo extends Model
{
    /**
     * @description The ID of the update package.
     *
     * @example UfuxnwygsuSkVE0VCN****0100
     *
     * @var string
     */
    public $firmwareId;

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
     *   **COMPLETE**: The update batch is completed.
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
     * @description The ProductKey of the product to which the update package belongs.
     *
     * @example a19mzPZ****
     *
     * @var string
     */
    public $productKey;

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
     * @description The start time of the update batch. The time is displayed in UTC.
     *
     * @example 2019-12-28T02:43:10.000Z
     *
     * @var string
     */
    public $utcStartTime;
    protected $_name = [
        'firmwareId'      => 'FirmwareId',
        'jobId'           => 'JobId',
        'jobStatus'       => 'JobStatus',
        'jobType'         => 'JobType',
        'productKey'      => 'ProductKey',
        'selectionType'   => 'SelectionType',
        'tags'            => 'Tags',
        'targetSelection' => 'TargetSelection',
        'utcCreate'       => 'UtcCreate',
        'utcEndTime'      => 'UtcEndTime',
        'utcModified'     => 'UtcModified',
        'utcStartTime'    => 'UtcStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->firmwareId) {
            $res['FirmwareId'] = $this->firmwareId;
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
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->selectionType) {
            $res['SelectionType'] = $this->selectionType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->targetSelection) {
            $res['TargetSelection'] = $this->targetSelection;
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
        if (null !== $this->utcStartTime) {
            $res['UtcStartTime'] = $this->utcStartTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return simpleOTAJobInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirmwareId'])) {
            $model->firmwareId = $map['FirmwareId'];
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
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['SelectionType'])) {
            $model->selectionType = $map['SelectionType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['TargetSelection'])) {
            $model->targetSelection = $map['TargetSelection'];
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
        if (isset($map['UtcStartTime'])) {
            $model->utcStartTime = $map['UtcStartTime'];
        }

        return $model;
    }
}
