<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class CreateJobMonitorRuleRequest extends Model
{
    /**
     * @description The threshold for triggering an alert.
     *
     *   If **Type** is set to **delay**, the threshold must be an integer in units of seconds. You can specify the threshold based on your business requirements. To prevent jitters caused by network and database overloads, we recommend that you set the threshold to more than 10 seconds.
     *   If **Type** is set to **full_timeout**, the threshold must be an integer in units of hours.
     *
     * > This parameter is required if **Type** is set to **delay** or **full_timeout** and **State** is set to **Y**.
     *
     * @example 11
     *
     * @var int
     */
    public $delayRuleTime;

    /**
     * @description The ID of the data migration, data synchronization, or change tracking task. You can call the [DescribeDtsJobs](https://help.aliyun.com/document_detail/209702.html) operation to query the task ID.
     *
     * This parameter is required.
     *
     * @example i03e3zty16i****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The alert threshold.
     *
     * @example 2
     *
     * @var int
     */
    public $noticeValue;

    /**
     * @description The statistical period of the incremental data verification task. Unit: minutes.
     *
     * > Valid values: 1, 3, 5, and 30.
     *
     * @example 5
     *
     * @var int
     */
    public $period;

    /**
     * @description The mobile numbers that receive alert notifications. Separate multiple mobile numbers with commas (,).
     *
     * >
     *
     *   This parameter is available only for users of the China site (aliyun.com). Only mobile numbers in the Chinese mainland are supported. You can specify up to 10 mobile numbers.
     *
     *   Users of the international site (alibabacloud.com) cannot receive notifications on alerts by using mobile numbers, but can configure alert rules for DTS tasks in the CloudMonitor console. For more information, see [Configure alert rules for DTS tasks in the CloudMonitor console](https://help.aliyun.com/document_detail/175876.html).
     *
     * @example 1361234****,1371234****
     *
     * @var string
     */
    public $phone;

    /**
     * @description The region ID of the DTS instance. For more information, see [Supported regions](https://help.aliyun.com/document_detail/141033.html).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Resource group ID.
     *
     * @example rg-acfmzawhxxc****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Specifies whether to enable the alert rule. Valid values:
     *
     *   **Y**: enables the alert rule.
     *   **N**: disables the alert rule.
     *
     * Default value: **Y**.
     *
     * @example Y
     *
     * @var string
     */
    public $state;

    /**
     * @description The number of statistical periods of the incremental data verification task.
     *
     * @example 2
     *
     * @var int
     */
    public $times;

    /**
     * @description The metric that is used to monitor the task. Valid values:
     *
     *   **delay**: the **Latency** metric.
     *   **error**: the **Status** metric.
     *   **full_timeout**: the **Full Timeout** metric.
     *
     * Default value: **error**. You must manually set this value.
     *
     * @example delay
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'delayRuleTime' => 'DelayRuleTime',
        'dtsJobId' => 'DtsJobId',
        'noticeValue' => 'NoticeValue',
        'period' => 'Period',
        'phone' => 'Phone',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'state' => 'State',
        'times' => 'Times',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->delayRuleTime) {
            $res['DelayRuleTime'] = $this->delayRuleTime;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->noticeValue) {
            $res['NoticeValue'] = $this->noticeValue;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateJobMonitorRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DelayRuleTime'])) {
            $model->delayRuleTime = $map['DelayRuleTime'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['NoticeValue'])) {
            $model->noticeValue = $map['NoticeValue'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
