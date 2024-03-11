<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BizWorks\V20210408\Models\QueryUsageResponseBody\data\subProductInfos\subProductCommoditySpecsForGuideToBuy;

use AlibabaCloud\Tea\Model;

class commoditySpec extends Model
{
    /**
     * @var int
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
     * @var string
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
    public $specCode;

    /**
     * @var string
     */
    public $specName;
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
        'specCode'               => 'specCode',
        'specName'               => 'specName',
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
        if (null !== $this->specCode) {
            $res['specCode'] = $this->specCode;
        }
        if (null !== $this->specName) {
            $res['specName'] = $this->specName;
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
            $model->nextBuyActions = $map['nextBuyActions'];
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
        if (isset($map['specCode'])) {
            $model->specCode = $map['specCode'];
        }
        if (isset($map['specName'])) {
            $model->specName = $map['specName'];
        }

        return $model;
    }
}
