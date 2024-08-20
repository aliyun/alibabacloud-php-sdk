<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillHistoryResponseBody\billHistoryData\billHistoryDataItem\billingData;

use AlibabaCloud\Tea\Model;

class billingDataItem extends Model
{
    /**
     * @description The bandwidth. Unit: bit/s.
     *
     * @example 4839
     *
     * @var float
     */
    public $bandwidth;

    /**
     * @description The region for which the billing records are generated. Valid values: **CN**, **OverSeas**, **AP1**, **AP2**, **AP3**, **NA**, **SA**, **EU**, and **MEAA**.
     *
     * @example AP1
     *
     * @var string
     */
    public $cdnRegion;

    /**
     * @description The billing method of the disk. Valid values: **StaticHttp**, **DynamicHttp**, and **DynamicHttps**.
     *
     * @example DynamicHttp
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The number of billing entries.
     *
     * @example 205624
     *
     * @var float
     */
    public $count;

    /**
     * @description The amount of network traffic. Unit: bytes.
     *
     * @example 2456
     *
     * @var float
     */
    public $flow;
    protected $_name = [
        'bandwidth'  => 'Bandwidth',
        'cdnRegion'  => 'CdnRegion',
        'chargeType' => 'ChargeType',
        'count'      => 'Count',
        'flow'       => 'Flow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->cdnRegion) {
            $res['CdnRegion'] = $this->cdnRegion;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->flow) {
            $res['Flow'] = $this->flow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return billingDataItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['CdnRegion'])) {
            $model->cdnRegion = $map['CdnRegion'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Flow'])) {
            $model->flow = $map['Flow'];
        }

        return $model;
    }
}
