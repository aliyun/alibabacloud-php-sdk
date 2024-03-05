<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models\ListEnterpriseSupportPlanSimpleResponseBody;

use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListEnterpriseSupportPlanSimpleResponseBody\data\docs;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListEnterpriseSupportPlanSimpleResponseBody\data\nodes;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $canApplyFreeOrder;

    /**
     * @var int
     */
    public $customerId;

    /**
     * @var docs[]
     */
    public $docs;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $firstPayTime;

    /**
     * @var string
     */
    public $freeOrderApplyCode;

    /**
     * @var int
     */
    public $freeOrderApplyId;

    /**
     * @var string
     */
    public $freeOrderApplyTime;

    /**
     * @var string
     */
    public $freeOrderApprovedTime;

    /**
     * @var string
     */
    public $freeOrderExpectStartTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var nodes[]
     */
    public $nodes;

    /**
     * @var int[]
     */
    public $orderIds;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $serviceStatus;

    /**
     * @var string
     */
    public $serviceStatusName;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $sortTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $taskNum;
    protected $_name = [
        'canApplyFreeOrder'        => 'canApplyFreeOrder',
        'customerId'               => 'customerId',
        'docs'                     => 'docs',
        'endTime'                  => 'endTime',
        'firstPayTime'             => 'firstPayTime',
        'freeOrderApplyCode'       => 'freeOrderApplyCode',
        'freeOrderApplyId'         => 'freeOrderApplyId',
        'freeOrderApplyTime'       => 'freeOrderApplyTime',
        'freeOrderApprovedTime'    => 'freeOrderApprovedTime',
        'freeOrderExpectStartTime' => 'freeOrderExpectStartTime',
        'instanceId'               => 'instanceId',
        'nodes'                    => 'nodes',
        'orderIds'                 => 'orderIds',
        'serviceName'              => 'serviceName',
        'serviceStatus'            => 'serviceStatus',
        'serviceStatusName'        => 'serviceStatusName',
        'serviceType'              => 'serviceType',
        'sortTime'                 => 'sortTime',
        'startTime'                => 'startTime',
        'taskNum'                  => 'taskNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canApplyFreeOrder) {
            $res['canApplyFreeOrder'] = $this->canApplyFreeOrder;
        }
        if (null !== $this->customerId) {
            $res['customerId'] = $this->customerId;
        }
        if (null !== $this->docs) {
            $res['docs'] = [];
            if (null !== $this->docs && \is_array($this->docs)) {
                $n = 0;
                foreach ($this->docs as $item) {
                    $res['docs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->firstPayTime) {
            $res['firstPayTime'] = $this->firstPayTime;
        }
        if (null !== $this->freeOrderApplyCode) {
            $res['freeOrderApplyCode'] = $this->freeOrderApplyCode;
        }
        if (null !== $this->freeOrderApplyId) {
            $res['freeOrderApplyId'] = $this->freeOrderApplyId;
        }
        if (null !== $this->freeOrderApplyTime) {
            $res['freeOrderApplyTime'] = $this->freeOrderApplyTime;
        }
        if (null !== $this->freeOrderApprovedTime) {
            $res['freeOrderApprovedTime'] = $this->freeOrderApprovedTime;
        }
        if (null !== $this->freeOrderExpectStartTime) {
            $res['freeOrderExpectStartTime'] = $this->freeOrderExpectStartTime;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->nodes) {
            $res['nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->orderIds) {
            $res['orderIds'] = $this->orderIds;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }
        if (null !== $this->serviceStatus) {
            $res['serviceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->serviceStatusName) {
            $res['serviceStatusName'] = $this->serviceStatusName;
        }
        if (null !== $this->serviceType) {
            $res['serviceType'] = $this->serviceType;
        }
        if (null !== $this->sortTime) {
            $res['sortTime'] = $this->sortTime;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->taskNum) {
            $res['taskNum'] = $this->taskNum;
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
        if (isset($map['canApplyFreeOrder'])) {
            $model->canApplyFreeOrder = $map['canApplyFreeOrder'];
        }
        if (isset($map['customerId'])) {
            $model->customerId = $map['customerId'];
        }
        if (isset($map['docs'])) {
            if (!empty($map['docs'])) {
                $model->docs = [];
                $n           = 0;
                foreach ($map['docs'] as $item) {
                    $model->docs[$n++] = null !== $item ? docs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['firstPayTime'])) {
            $model->firstPayTime = $map['firstPayTime'];
        }
        if (isset($map['freeOrderApplyCode'])) {
            $model->freeOrderApplyCode = $map['freeOrderApplyCode'];
        }
        if (isset($map['freeOrderApplyId'])) {
            $model->freeOrderApplyId = $map['freeOrderApplyId'];
        }
        if (isset($map['freeOrderApplyTime'])) {
            $model->freeOrderApplyTime = $map['freeOrderApplyTime'];
        }
        if (isset($map['freeOrderApprovedTime'])) {
            $model->freeOrderApprovedTime = $map['freeOrderApprovedTime'];
        }
        if (isset($map['freeOrderExpectStartTime'])) {
            $model->freeOrderExpectStartTime = $map['freeOrderExpectStartTime'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['nodes'])) {
            if (!empty($map['nodes'])) {
                $model->nodes = [];
                $n            = 0;
                foreach ($map['nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['orderIds'])) {
            if (!empty($map['orderIds'])) {
                $model->orderIds = $map['orderIds'];
            }
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }
        if (isset($map['serviceStatus'])) {
            $model->serviceStatus = $map['serviceStatus'];
        }
        if (isset($map['serviceStatusName'])) {
            $model->serviceStatusName = $map['serviceStatusName'];
        }
        if (isset($map['serviceType'])) {
            $model->serviceType = $map['serviceType'];
        }
        if (isset($map['sortTime'])) {
            $model->sortTime = $map['sortTime'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['taskNum'])) {
            $model->taskNum = $map['taskNum'];
        }

        return $model;
    }
}
