<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListDeviceDistributeJobResponseBody\data\jobInfo;

use AlibabaCloud\SDK\Iot\V20180120\Models\ListDeviceDistributeJobResponseBody\data\jobInfo\items\targetInstanceConfigs;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The time when the task was created.
     *
     * @example 1581595942000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The ID of the task.
     *
     * @example UbmsMHmkqv0PiAG****010001
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The **ProductKey** of the product to which the device belongs.
     *
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The ID of the source instance.
     *
     * @example iot-cn-6ja***
     *
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @description The name of the source instance.
     *
     * @var string
     */
    public $sourceInstanceName;

    /**
     * @description The region where the source instance resides.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $sourceRegion;

    /**
     * @description The ID of the source Alibaba Cloud account.
     *
     * @example 198***
     *
     * @var string
     */
    public $sourceUid;

    /**
     * @description The status of the task.
     *
     *   **0**: The task is being initialized.
     *   **1**: The task is running.
     *   **2**: The task is completed. The status indicates that the distribution task is complete but does not indicate that all products and devices are distributed. To obtain distribution results, call the [QueryDeviceDistributeDetail](~~199533~~) operation.
     *   **3**: The task is unexpectedly interrupted.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The distribution policy.
     *
     *   **0**: distributes devices to specified instances in a specified region. This is the default value.
     *   **1**: configures instance IDs in multiple regions and distributes devices to the nearest regions based on the IP addresses of the devices.
     *
     * @example 0
     *
     * @var int
     */
    public $strategy;

    /**
     * @description The IDs of the destination instances.
     *
     *   If the value of the **Strategy** parameter is **1**, multiple instance IDs exist.
     *   If the value of the **Strategy** parameter is **0**, only one instance ID exists.
     *
     * @var targetInstanceConfigs
     */
    public $targetInstanceConfigs;

    /**
     * @description The ID of the destination Alibaba Cloud account.
     *
     * @example 198***
     *
     * @var string
     */
    public $targetUid;

    /**
     * @description The total number of devices in the distribution task.
     *
     * @example 5
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'gmtCreate'             => 'GmtCreate',
        'jobId'                 => 'JobId',
        'productKey'            => 'ProductKey',
        'sourceInstanceId'      => 'SourceInstanceId',
        'sourceInstanceName'    => 'SourceInstanceName',
        'sourceRegion'          => 'SourceRegion',
        'sourceUid'             => 'SourceUid',
        'status'                => 'Status',
        'strategy'              => 'Strategy',
        'targetInstanceConfigs' => 'TargetInstanceConfigs',
        'targetUid'             => 'TargetUid',
        'total'                 => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }
        if (null !== $this->sourceInstanceName) {
            $res['SourceInstanceName'] = $this->sourceInstanceName;
        }
        if (null !== $this->sourceRegion) {
            $res['SourceRegion'] = $this->sourceRegion;
        }
        if (null !== $this->sourceUid) {
            $res['SourceUid'] = $this->sourceUid;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }
        if (null !== $this->targetInstanceConfigs) {
            $res['TargetInstanceConfigs'] = null !== $this->targetInstanceConfigs ? $this->targetInstanceConfigs->toMap() : null;
        }
        if (null !== $this->targetUid) {
            $res['TargetUid'] = $this->targetUid;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }
        if (isset($map['SourceInstanceName'])) {
            $model->sourceInstanceName = $map['SourceInstanceName'];
        }
        if (isset($map['SourceRegion'])) {
            $model->sourceRegion = $map['SourceRegion'];
        }
        if (isset($map['SourceUid'])) {
            $model->sourceUid = $map['SourceUid'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }
        if (isset($map['TargetInstanceConfigs'])) {
            $model->targetInstanceConfigs = targetInstanceConfigs::fromMap($map['TargetInstanceConfigs']);
        }
        if (isset($map['TargetUid'])) {
            $model->targetUid = $map['TargetUid'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
