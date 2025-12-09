<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class ListUserRatePlanInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $checkRemainingSiteQuota;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $planNameEn;

    /**
     * @var string
     */
    public $planType;

    /**
     * @var int
     */
    public $remainingExpireDays;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $sortOrder;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subscribeType;
    protected $_name = [
        'checkRemainingSiteQuota' => 'CheckRemainingSiteQuota',
        'instanceId' => 'InstanceId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'planNameEn' => 'PlanNameEn',
        'planType' => 'PlanType',
        'remainingExpireDays' => 'RemainingExpireDays',
        'sortBy' => 'SortBy',
        'sortOrder' => 'SortOrder',
        'status' => 'Status',
        'subscribeType' => 'SubscribeType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkRemainingSiteQuota) {
            $res['CheckRemainingSiteQuota'] = $this->checkRemainingSiteQuota;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->planNameEn) {
            $res['PlanNameEn'] = $this->planNameEn;
        }

        if (null !== $this->planType) {
            $res['PlanType'] = $this->planType;
        }

        if (null !== $this->remainingExpireDays) {
            $res['RemainingExpireDays'] = $this->remainingExpireDays;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subscribeType) {
            $res['SubscribeType'] = $this->subscribeType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckRemainingSiteQuota'])) {
            $model->checkRemainingSiteQuota = $map['CheckRemainingSiteQuota'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PlanNameEn'])) {
            $model->planNameEn = $map['PlanNameEn'];
        }

        if (isset($map['PlanType'])) {
            $model->planType = $map['PlanType'];
        }

        if (isset($map['RemainingExpireDays'])) {
            $model->remainingExpireDays = $map['RemainingExpireDays'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubscribeType'])) {
            $model->subscribeType = $map['SubscribeType'];
        }

        return $model;
    }
}
