<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models;

use AlibabaCloud\Tea\Model;

class PageDemandPlanWithDemandInfoRequest extends Model
{
    /**
     * @var string
     */
    public $approvalStatus;

    /**
     * @var string
     */
    public $createTimeEnd;

    /**
     * @var string
     */
    public $createTimeStart;

    /**
     * @var string
     */
    public $creatorStaffId;

    /**
     * @var string
     */
    public $demandDeliveryStatus;

    /**
     * @var int[]
     */
    public $demandId;

    /**
     * @var int[]
     */
    public $demandPlanId;

    /**
     * @var string
     */
    public $demandPlanStatus;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $operator;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $roCode;
    protected $_name = [
        'approvalStatus' => 'approvalStatus',
        'createTimeEnd' => 'createTimeEnd',
        'createTimeStart' => 'createTimeStart',
        'creatorStaffId' => 'creatorStaffId',
        'demandDeliveryStatus' => 'demandDeliveryStatus',
        'demandId' => 'demandId',
        'demandPlanId' => 'demandPlanId',
        'demandPlanStatus' => 'demandPlanStatus',
        'operator' => 'operator',
        'pageNum' => 'pageNum',
        'pageSize' => 'pageSize',
        'roCode' => 'roCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->approvalStatus) {
            $res['approvalStatus'] = $this->approvalStatus;
        }
        if (null !== $this->createTimeEnd) {
            $res['createTimeEnd'] = $this->createTimeEnd;
        }
        if (null !== $this->createTimeStart) {
            $res['createTimeStart'] = $this->createTimeStart;
        }
        if (null !== $this->creatorStaffId) {
            $res['creatorStaffId'] = $this->creatorStaffId;
        }
        if (null !== $this->demandDeliveryStatus) {
            $res['demandDeliveryStatus'] = $this->demandDeliveryStatus;
        }
        if (null !== $this->demandId) {
            $res['demandId'] = $this->demandId;
        }
        if (null !== $this->demandPlanId) {
            $res['demandPlanId'] = $this->demandPlanId;
        }
        if (null !== $this->demandPlanStatus) {
            $res['demandPlanStatus'] = $this->demandPlanStatus;
        }
        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }
        if (null !== $this->pageNum) {
            $res['pageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->roCode) {
            $res['roCode'] = $this->roCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PageDemandPlanWithDemandInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['approvalStatus'])) {
            $model->approvalStatus = $map['approvalStatus'];
        }
        if (isset($map['createTimeEnd'])) {
            $model->createTimeEnd = $map['createTimeEnd'];
        }
        if (isset($map['createTimeStart'])) {
            $model->createTimeStart = $map['createTimeStart'];
        }
        if (isset($map['creatorStaffId'])) {
            $model->creatorStaffId = $map['creatorStaffId'];
        }
        if (isset($map['demandDeliveryStatus'])) {
            $model->demandDeliveryStatus = $map['demandDeliveryStatus'];
        }
        if (isset($map['demandId'])) {
            if (!empty($map['demandId'])) {
                $model->demandId = $map['demandId'];
            }
        }
        if (isset($map['demandPlanId'])) {
            if (!empty($map['demandPlanId'])) {
                $model->demandPlanId = $map['demandPlanId'];
            }
        }
        if (isset($map['demandPlanStatus'])) {
            $model->demandPlanStatus = $map['demandPlanStatus'];
        }
        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
        }
        if (isset($map['pageNum'])) {
            $model->pageNum = $map['pageNum'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['roCode'])) {
            $model->roCode = $map['roCode'];
        }

        return $model;
    }
}
