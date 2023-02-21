<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcDoubleCheckupResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2021-05-27
     *
     * @var string
     */
    public $inspectDate;

    /**
     * @var string
     */
    public $inspectDepartment;

    /**
     * @var string
     */
    public $inspectItem;

    /**
     * @example 32081320211032
     *
     * @var string
     */
    public $inspectPlanId;

    /**
     * @var string
     */
    public $inspectPlanName;

    /**
     * @var string
     */
    public $inspectResult;

    /**
     * @example 320813202104271001
     *
     * @var string
     */
    public $inspectTaskId;

    /**
     * @var string
     */
    public $inspectTaskName;

    /**
     * @var string
     */
    public $inspectTypeName;
    protected $_name = [
        'inspectDate'       => 'InspectDate',
        'inspectDepartment' => 'InspectDepartment',
        'inspectItem'       => 'InspectItem',
        'inspectPlanId'     => 'InspectPlanId',
        'inspectPlanName'   => 'InspectPlanName',
        'inspectResult'     => 'InspectResult',
        'inspectTaskId'     => 'InspectTaskId',
        'inspectTaskName'   => 'InspectTaskName',
        'inspectTypeName'   => 'InspectTypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inspectDate) {
            $res['InspectDate'] = $this->inspectDate;
        }
        if (null !== $this->inspectDepartment) {
            $res['InspectDepartment'] = $this->inspectDepartment;
        }
        if (null !== $this->inspectItem) {
            $res['InspectItem'] = $this->inspectItem;
        }
        if (null !== $this->inspectPlanId) {
            $res['InspectPlanId'] = $this->inspectPlanId;
        }
        if (null !== $this->inspectPlanName) {
            $res['InspectPlanName'] = $this->inspectPlanName;
        }
        if (null !== $this->inspectResult) {
            $res['InspectResult'] = $this->inspectResult;
        }
        if (null !== $this->inspectTaskId) {
            $res['InspectTaskId'] = $this->inspectTaskId;
        }
        if (null !== $this->inspectTaskName) {
            $res['InspectTaskName'] = $this->inspectTaskName;
        }
        if (null !== $this->inspectTypeName) {
            $res['InspectTypeName'] = $this->inspectTypeName;
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
        if (isset($map['InspectDate'])) {
            $model->inspectDate = $map['InspectDate'];
        }
        if (isset($map['InspectDepartment'])) {
            $model->inspectDepartment = $map['InspectDepartment'];
        }
        if (isset($map['InspectItem'])) {
            $model->inspectItem = $map['InspectItem'];
        }
        if (isset($map['InspectPlanId'])) {
            $model->inspectPlanId = $map['InspectPlanId'];
        }
        if (isset($map['InspectPlanName'])) {
            $model->inspectPlanName = $map['InspectPlanName'];
        }
        if (isset($map['InspectResult'])) {
            $model->inspectResult = $map['InspectResult'];
        }
        if (isset($map['InspectTaskId'])) {
            $model->inspectTaskId = $map['InspectTaskId'];
        }
        if (isset($map['InspectTaskName'])) {
            $model->inspectTaskName = $map['InspectTaskName'];
        }
        if (isset($map['InspectTypeName'])) {
            $model->inspectTypeName = $map['InspectTypeName'];
        }

        return $model;
    }
}
