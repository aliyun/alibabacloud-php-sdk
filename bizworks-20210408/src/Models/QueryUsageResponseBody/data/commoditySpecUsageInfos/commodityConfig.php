<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BizWorks\V20210408\Models\QueryUsageResponseBody\data\commoditySpecUsageInfos;

use AlibabaCloud\Tea\Model;

class commodityConfig extends Model
{
    /**
     * @var int
     */
    public $betaDeadlineMs;

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
    public $expiredToReleasedHour;

    /**
     * @var bool
     */
    public $inBeta;

    /**
     * @var bool
     */
    public $independent;

    /**
     * @var string
     */
    public $paidType;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string[]
     */
    public $quotaItems;

    /**
     * @var string[]
     */
    public $specCodes;
    protected $_name = [
        'betaDeadlineMs'        => 'betaDeadlineMs',
        'commodityCode'         => 'commodityCode',
        'commodityName'         => 'commodityName',
        'expiredToReleasedHour' => 'expiredToReleasedHour',
        'inBeta'                => 'inBeta',
        'independent'           => 'independent',
        'paidType'              => 'paidType',
        'productCode'           => 'productCode',
        'quotaItems'            => 'quotaItems',
        'specCodes'             => 'specCodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->betaDeadlineMs) {
            $res['betaDeadlineMs'] = $this->betaDeadlineMs;
        }
        if (null !== $this->commodityCode) {
            $res['commodityCode'] = $this->commodityCode;
        }
        if (null !== $this->commodityName) {
            $res['commodityName'] = $this->commodityName;
        }
        if (null !== $this->expiredToReleasedHour) {
            $res['expiredToReleasedHour'] = $this->expiredToReleasedHour;
        }
        if (null !== $this->inBeta) {
            $res['inBeta'] = $this->inBeta;
        }
        if (null !== $this->independent) {
            $res['independent'] = $this->independent;
        }
        if (null !== $this->paidType) {
            $res['paidType'] = $this->paidType;
        }
        if (null !== $this->productCode) {
            $res['productCode'] = $this->productCode;
        }
        if (null !== $this->quotaItems) {
            $res['quotaItems'] = $this->quotaItems;
        }
        if (null !== $this->specCodes) {
            $res['specCodes'] = $this->specCodes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commodityConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['betaDeadlineMs'])) {
            $model->betaDeadlineMs = $map['betaDeadlineMs'];
        }
        if (isset($map['commodityCode'])) {
            $model->commodityCode = $map['commodityCode'];
        }
        if (isset($map['commodityName'])) {
            $model->commodityName = $map['commodityName'];
        }
        if (isset($map['expiredToReleasedHour'])) {
            $model->expiredToReleasedHour = $map['expiredToReleasedHour'];
        }
        if (isset($map['inBeta'])) {
            $model->inBeta = $map['inBeta'];
        }
        if (isset($map['independent'])) {
            $model->independent = $map['independent'];
        }
        if (isset($map['paidType'])) {
            $model->paidType = $map['paidType'];
        }
        if (isset($map['productCode'])) {
            $model->productCode = $map['productCode'];
        }
        if (isset($map['quotaItems'])) {
            if (!empty($map['quotaItems'])) {
                $model->quotaItems = $map['quotaItems'];
            }
        }
        if (isset($map['specCodes'])) {
            if (!empty($map['specCodes'])) {
                $model->specCodes = $map['specCodes'];
            }
        }

        return $model;
    }
}
