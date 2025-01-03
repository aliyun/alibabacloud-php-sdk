<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models;

use AlibabaCloud\Tea\Model;

class ListExperimentPlansRequest extends Model
{
    /**
     * @description Creation Time Sorting Rule
     *
     * @example desc
     *
     * @var string
     */
    public $creatTimeOrder;

    /**
     * @description End Time Sorting Rule
     *
     * @example desc
     *
     * @var string
     */
    public $endTimeOrder;

    /**
     * @description Page Number
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description Execution Status
     *
     * @var string[]
     */
    public $planTaskStatus;

    /**
     * @description Resource Group ID
     *
     * @example rg-aekzij65sf2rr5i
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Resource
     *
     * @var string[]
     */
    public $resourceName;

    /**
     * @description Number of Items
     *
     * @example 100
     *
     * @var int
     */
    public $size;

    /**
     * @description Start Time Sorting Rule
     *
     * @example desc
     *
     * @var string
     */
    public $startTimeOrder;
    protected $_name = [
        'creatTimeOrder'  => 'CreatTimeOrder',
        'endTimeOrder'    => 'EndTimeOrder',
        'page'            => 'Page',
        'planTaskStatus'  => 'PlanTaskStatus',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceName'    => 'ResourceName',
        'size'            => 'Size',
        'startTimeOrder'  => 'StartTimeOrder',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatTimeOrder) {
            $res['CreatTimeOrder'] = $this->creatTimeOrder;
        }
        if (null !== $this->endTimeOrder) {
            $res['EndTimeOrder'] = $this->endTimeOrder;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->planTaskStatus) {
            $res['PlanTaskStatus'] = $this->planTaskStatus;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->startTimeOrder) {
            $res['StartTimeOrder'] = $this->startTimeOrder;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListExperimentPlansRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatTimeOrder'])) {
            $model->creatTimeOrder = $map['CreatTimeOrder'];
        }
        if (isset($map['EndTimeOrder'])) {
            $model->endTimeOrder = $map['EndTimeOrder'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PlanTaskStatus'])) {
            if (!empty($map['PlanTaskStatus'])) {
                $model->planTaskStatus = $map['PlanTaskStatus'];
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceName'])) {
            if (!empty($map['ResourceName'])) {
                $model->resourceName = $map['ResourceName'];
            }
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['StartTimeOrder'])) {
            $model->startTimeOrder = $map['StartTimeOrder'];
        }

        return $model;
    }
}
