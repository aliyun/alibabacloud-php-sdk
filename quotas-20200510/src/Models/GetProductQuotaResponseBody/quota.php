<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaResponseBody;

use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaResponseBody\quota\period;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaResponseBody\quota\quotaItems;
use AlibabaCloud\Tea\Model;

class quota extends Model
{
    /**
     * @var bool
     */
    public $adjustable;

    /**
     * @var float[]
     */
    public $applicableRange;

    /**
     * @var string
     */
    public $applicableType;

    /**
     * @var bool
     */
    public $consumable;

    /**
     * @var mixed[]
     */
    public $dimensions;

    /**
     * @var period
     */
    public $period;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $quotaActionCode;

    /**
     * @var string
     */
    public $quotaArn;

    /**
     * @var string
     */
    public $quotaDescription;

    /**
     * @var quotaItems[]
     */
    public $quotaItems;

    /**
     * @var string
     */
    public $quotaName;

    /**
     * @var string
     */
    public $quotaType;

    /**
     * @var string
     */
    public $quotaUnit;

    /**
     * @var float
     */
    public $totalQuota;

    /**
     * @var float
     */
    public $totalUsage;

    /**
     * @var string
     */
    public $unadjustableDetail;
    protected $_name = [
        'adjustable'         => 'Adjustable',
        'applicableRange'    => 'ApplicableRange',
        'applicableType'     => 'ApplicableType',
        'consumable'         => 'Consumable',
        'dimensions'         => 'Dimensions',
        'period'             => 'Period',
        'productCode'        => 'ProductCode',
        'quotaActionCode'    => 'QuotaActionCode',
        'quotaArn'           => 'QuotaArn',
        'quotaDescription'   => 'QuotaDescription',
        'quotaItems'         => 'QuotaItems',
        'quotaName'          => 'QuotaName',
        'quotaType'          => 'QuotaType',
        'quotaUnit'          => 'QuotaUnit',
        'totalQuota'         => 'TotalQuota',
        'totalUsage'         => 'TotalUsage',
        'unadjustableDetail' => 'UnadjustableDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adjustable) {
            $res['Adjustable'] = $this->adjustable;
        }
        if (null !== $this->applicableRange) {
            $res['ApplicableRange'] = $this->applicableRange;
        }
        if (null !== $this->applicableType) {
            $res['ApplicableType'] = $this->applicableType;
        }
        if (null !== $this->consumable) {
            $res['Consumable'] = $this->consumable;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->period) {
            $res['Period'] = null !== $this->period ? $this->period->toMap() : null;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->quotaActionCode) {
            $res['QuotaActionCode'] = $this->quotaActionCode;
        }
        if (null !== $this->quotaArn) {
            $res['QuotaArn'] = $this->quotaArn;
        }
        if (null !== $this->quotaDescription) {
            $res['QuotaDescription'] = $this->quotaDescription;
        }
        if (null !== $this->quotaItems) {
            $res['QuotaItems'] = [];
            if (null !== $this->quotaItems && \is_array($this->quotaItems)) {
                $n = 0;
                foreach ($this->quotaItems as $item) {
                    $res['QuotaItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->quotaName) {
            $res['QuotaName'] = $this->quotaName;
        }
        if (null !== $this->quotaType) {
            $res['QuotaType'] = $this->quotaType;
        }
        if (null !== $this->quotaUnit) {
            $res['QuotaUnit'] = $this->quotaUnit;
        }
        if (null !== $this->totalQuota) {
            $res['TotalQuota'] = $this->totalQuota;
        }
        if (null !== $this->totalUsage) {
            $res['TotalUsage'] = $this->totalUsage;
        }
        if (null !== $this->unadjustableDetail) {
            $res['UnadjustableDetail'] = $this->unadjustableDetail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quota
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Adjustable'])) {
            $model->adjustable = $map['Adjustable'];
        }
        if (isset($map['ApplicableRange'])) {
            if (!empty($map['ApplicableRange'])) {
                $model->applicableRange = $map['ApplicableRange'];
            }
        }
        if (isset($map['ApplicableType'])) {
            $model->applicableType = $map['ApplicableType'];
        }
        if (isset($map['Consumable'])) {
            $model->consumable = $map['Consumable'];
        }
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['Period'])) {
            $model->period = period::fromMap($map['Period']);
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['QuotaActionCode'])) {
            $model->quotaActionCode = $map['QuotaActionCode'];
        }
        if (isset($map['QuotaArn'])) {
            $model->quotaArn = $map['QuotaArn'];
        }
        if (isset($map['QuotaDescription'])) {
            $model->quotaDescription = $map['QuotaDescription'];
        }
        if (isset($map['QuotaItems'])) {
            if (!empty($map['QuotaItems'])) {
                $model->quotaItems = [];
                $n                 = 0;
                foreach ($map['QuotaItems'] as $item) {
                    $model->quotaItems[$n++] = null !== $item ? quotaItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['QuotaName'])) {
            $model->quotaName = $map['QuotaName'];
        }
        if (isset($map['QuotaType'])) {
            $model->quotaType = $map['QuotaType'];
        }
        if (isset($map['QuotaUnit'])) {
            $model->quotaUnit = $map['QuotaUnit'];
        }
        if (isset($map['TotalQuota'])) {
            $model->totalQuota = $map['TotalQuota'];
        }
        if (isset($map['TotalUsage'])) {
            $model->totalUsage = $map['TotalUsage'];
        }
        if (isset($map['UnadjustableDetail'])) {
            $model->unadjustableDetail = $map['UnadjustableDetail'];
        }

        return $model;
    }
}
