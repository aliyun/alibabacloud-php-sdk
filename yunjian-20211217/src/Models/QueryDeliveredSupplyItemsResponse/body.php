<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models\QueryDeliveredSupplyItemsResponse;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $commodityTypeCode;

    /**
     * @var int
     */
    public $demandPlanId;

    /**
     * @var string
     */
    public $planTitle;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $zone;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var int
     */
    public $demandCount;

    /**
     * @var int
     */
    public $deliveredAmount;

    /**
     * @var int
     */
    public $openCount;
    protected $_name = [
        'accountId' => 'accountId',
        'commodityTypeCode' => 'commodityTypeCode',
        'demandPlanId' => 'demandPlanId',
        'planTitle' => 'planTitle',
        'region' => 'region',
        'zone' => 'zone',
        'commodityCode' => 'commodityCode',
        'demandCount' => 'demandCount',
        'deliveredAmount' => 'deliveredAmount',
        'openCount' => 'openCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->commodityTypeCode) {
            $res['commodityTypeCode'] = $this->commodityTypeCode;
        }

        if (null !== $this->demandPlanId) {
            $res['demandPlanId'] = $this->demandPlanId;
        }

        if (null !== $this->planTitle) {
            $res['planTitle'] = $this->planTitle;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->zone) {
            $res['zone'] = $this->zone;
        }

        if (null !== $this->commodityCode) {
            $res['commodityCode'] = $this->commodityCode;
        }

        if (null !== $this->demandCount) {
            $res['demandCount'] = $this->demandCount;
        }

        if (null !== $this->deliveredAmount) {
            $res['deliveredAmount'] = $this->deliveredAmount;
        }

        if (null !== $this->openCount) {
            $res['openCount'] = $this->openCount;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['commodityTypeCode'])) {
            $model->commodityTypeCode = $map['commodityTypeCode'];
        }

        if (isset($map['demandPlanId'])) {
            $model->demandPlanId = $map['demandPlanId'];
        }

        if (isset($map['planTitle'])) {
            $model->planTitle = $map['planTitle'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['zone'])) {
            $model->zone = $map['zone'];
        }

        if (isset($map['commodityCode'])) {
            $model->commodityCode = $map['commodityCode'];
        }

        if (isset($map['demandCount'])) {
            $model->demandCount = $map['demandCount'];
        }

        if (isset($map['deliveredAmount'])) {
            $model->deliveredAmount = $map['deliveredAmount'];
        }

        if (isset($map['openCount'])) {
            $model->openCount = $map['openCount'];
        }

        return $model;
    }
}
