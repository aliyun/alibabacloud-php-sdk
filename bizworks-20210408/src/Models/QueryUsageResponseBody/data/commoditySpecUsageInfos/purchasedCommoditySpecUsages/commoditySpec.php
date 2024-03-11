<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BizWorks\V20210408\Models\QueryUsageResponseBody\data\commoditySpecUsageInfos\purchasedCommoditySpecUsages;

use AlibabaCloud\Tea\Model;

class commoditySpec extends Model
{
    /**
     * @var string
     */
    public $applicationNum;

    /**
     * @var string
     */
    public $commercializeStatus;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $commodityName;

    /**
     * @var int
     */
    public $cpuNum;

    /**
     * @var int
     */
    public $expireDate;

    /**
     * @var int
     */
    public $memNum;

    /**
     * @var string[]
     */
    public $nextBuyActions;

    /**
     * @var string
     */
    public $ntmCommodityInstanceId;

    /**
     * @var int
     */
    public $openDate;

    /**
     * @var string[]
     */
    public $relatedSubProducts;

    /**
     * @var string
     */
    public $remainingTime;

    /**
     * @var string
     */
    public $specCode;
    protected $_name = [
        'applicationNum'         => 'applicationNum',
        'commercializeStatus'    => 'commercializeStatus',
        'commodityCode'          => 'commodityCode',
        'commodityName'          => 'commodityName',
        'cpuNum'                 => 'cpuNum',
        'expireDate'             => 'expireDate',
        'memNum'                 => 'memNum',
        'nextBuyActions'         => 'nextBuyActions',
        'ntmCommodityInstanceId' => 'ntmCommodityInstanceId',
        'openDate'               => 'openDate',
        'relatedSubProducts'     => 'relatedSubProducts',
        'remainingTime'          => 'remainingTime',
        'specCode'               => 'specCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationNum) {
            $res['applicationNum'] = $this->applicationNum;
        }
        if (null !== $this->commercializeStatus) {
            $res['commercializeStatus'] = $this->commercializeStatus;
        }
        if (null !== $this->commodityCode) {
            $res['commodityCode'] = $this->commodityCode;
        }
        if (null !== $this->commodityName) {
            $res['commodityName'] = $this->commodityName;
        }
        if (null !== $this->cpuNum) {
            $res['cpuNum'] = $this->cpuNum;
        }
        if (null !== $this->expireDate) {
            $res['expireDate'] = $this->expireDate;
        }
        if (null !== $this->memNum) {
            $res['memNum'] = $this->memNum;
        }
        if (null !== $this->nextBuyActions) {
            $res['nextBuyActions'] = $this->nextBuyActions;
        }
        if (null !== $this->ntmCommodityInstanceId) {
            $res['ntmCommodityInstanceId'] = $this->ntmCommodityInstanceId;
        }
        if (null !== $this->openDate) {
            $res['openDate'] = $this->openDate;
        }
        if (null !== $this->relatedSubProducts) {
            $res['relatedSubProducts'] = $this->relatedSubProducts;
        }
        if (null !== $this->remainingTime) {
            $res['remainingTime'] = $this->remainingTime;
        }
        if (null !== $this->specCode) {
            $res['specCode'] = $this->specCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commoditySpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['applicationNum'])) {
            $model->applicationNum = $map['applicationNum'];
        }
        if (isset($map['commercializeStatus'])) {
            $model->commercializeStatus = $map['commercializeStatus'];
        }
        if (isset($map['commodityCode'])) {
            $model->commodityCode = $map['commodityCode'];
        }
        if (isset($map['commodityName'])) {
            $model->commodityName = $map['commodityName'];
        }
        if (isset($map['cpuNum'])) {
            $model->cpuNum = $map['cpuNum'];
        }
        if (isset($map['expireDate'])) {
            $model->expireDate = $map['expireDate'];
        }
        if (isset($map['memNum'])) {
            $model->memNum = $map['memNum'];
        }
        if (isset($map['nextBuyActions'])) {
            if (!empty($map['nextBuyActions'])) {
                $model->nextBuyActions = $map['nextBuyActions'];
            }
        }
        if (isset($map['ntmCommodityInstanceId'])) {
            $model->ntmCommodityInstanceId = $map['ntmCommodityInstanceId'];
        }
        if (isset($map['openDate'])) {
            $model->openDate = $map['openDate'];
        }
        if (isset($map['relatedSubProducts'])) {
            if (!empty($map['relatedSubProducts'])) {
                $model->relatedSubProducts = $map['relatedSubProducts'];
            }
        }
        if (isset($map['remainingTime'])) {
            $model->remainingTime = $map['remainingTime'];
        }
        if (isset($map['specCode'])) {
            $model->specCode = $map['specCode'];
        }

        return $model;
    }
}
