<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class ListResourceInstancesShrinkRequest extends Model
{
    /**
     * @description The billing method of the instance. Valid values:
     *
     *   PrePaid: subscription.
     *   PostPaid: pay-as-you-go.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The keyword used to query instances. Instances can be queried by instance ID or instance IP address.
     *
     * @example 10.224.xx.xx
     *
     * @var string
     */
    public $filter;

    /**
     * @description The IP address of the instance.
     *
     * @example 10.224.xx.xx
     *
     * @var string
     */
    public $instanceIP;

    /**
     * @description The instance ID. For more information about how to query the instance ID, see [ListResourceInstances](https://help.aliyun.com/document_detail/412129.html).
     *
     * @example i-bp1jd6x3uotsv****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance name.
     *
     * @example e-xxxx***
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The instance state.
     *
     * Valid values:
     *
     *   Ready-SchedulingDisabled
     *
     * <!-- -->
     *
     * :
     *
     * <!-- -->
     *
     * The instance is available but unschedulable
     *
     * <!-- -->
     *
     * .
     *
     *   Ready
     *
     * <!-- -->
     *
     * : The instance
     *
     * <!-- -->
     *
     * is running
     *
     * <!-- -->
     *
     * .
     *
     *   NotReady
     *
     * <!-- -->
     *
     * : The instance is unready.
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   Stopped
     *
     * <!-- -->
     *
     * : The instance has stopped.
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   NotReady-SchedulingDisabled
     *
     * <!-- -->
     *
     * :
     *
     * <!-- -->
     *
     * The instance is unavailable and unschedulable
     *
     * <!-- -->
     *
     * .
     *
     *   Attaching
     *
     * <!-- -->
     *
     * : The instance
     *
     * <!-- -->
     *
     * is starting
     *
     * <!-- -->
     *
     * .
     *
     *   Deleting
     *
     * <!-- -->
     *
     * : The instance is being deleted.
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   CreateFailed: The instance failed to be created.
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * @example Ready
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description The tag.
     *
     * @var string
     */
    public $labelShrink;

    /**
     * @description The sorting order.
     *
     * Valid values:
     *
     *   asc: The instances are sorted in ascending order.
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   desc
     *
     * <!-- -->
     *
     * : The instances are sorted in descending order.
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * @example desc
     *
     * @var string
     */
    public $order;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 100.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The field that you use to sort the query results.
     *
     * Valid values:
     *
     *   CreateTime
     *
     * <!-- -->
     *
     * : The instances are sorted based on the time when the instances were created.
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   MemoryUsed
     *
     * <!-- -->
     *
     * :
     *
     * <!-- -->
     *
     * The instances are sorted based on the memory usage of the instances
     *
     * <!-- -->
     *
     * .
     *
     *   GpuUsed
     *
     * <!-- -->
     *
     * : The instances are sorted based on the
     *
     * <!-- -->
     *
     * GPU usage of the instances.
     *
     * <!-- -->
     *
     *   ExpireTime: The instances are sorted based on the time when the instances expired.
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   CpuUsed
     *
     * <!-- -->
     *
     * :
     *
     * <!-- -->
     *
     * The instances are sorted based on the CPU utilization of the instances.
     *
     * <!-- -->
     *
     * @example CreateTime
     *
     * @var string
     */
    public $sort;
    protected $_name = [
        'chargeType' => 'ChargeType',
        'filter' => 'Filter',
        'instanceIP' => 'InstanceIP',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceStatus' => 'InstanceStatus',
        'labelShrink' => 'Label',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'sort' => 'Sort',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->instanceIP) {
            $res['InstanceIP'] = $this->instanceIP;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->labelShrink) {
            $res['Label'] = $this->labelShrink;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceInstancesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['InstanceIP'])) {
            $model->instanceIP = $map['InstanceIP'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['Label'])) {
            $model->labelShrink = $map['Label'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        return $model;
    }
}
