<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserBillHistoryResponseBody\billHistoryData\billHistoryDataItem\billingData;

use AlibabaCloud\Tea\Model;

class billingDataItem extends Model
{
    /**
     * @description The bandwidth. Unit: bit/s.
     *
     * @example 4041
     *
     * @var float
     */
    public $bandwidth;

    /**
     * @description The billable region. Valid values:
     *
     *   **CN**: Chinese mainland
     *   **OverSeas**: outside the Chinese mainland
     *   **AP1**: Asia Pacific 1
     *   **AP2**: Asia Pacific 2
     *   **AP3**: Asia Pacific 3
     *   **NA**: North America
     *   **SA**: South America
     *   **EU**: Europe
     *   **MEAA**: Middle East and Africa
     *
     * @example AP1
     *
     * @var string
     */
    public $cdnRegion;

    /**
     * @description The billing method. Valid values:
     *
     *   **StaticHttp**: static HTTP requests
     *   **DynamicHttp**: dynamic HTTP requests
     *   **DynamicHttps**: dynamic HTTPS requests
     *
     * @example DynamicHttp
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The number of requests.
     *
     * @example 203601
     *
     * @var float
     */
    public $count;

    /**
     * @description The amount of network traffic. Unit: bytes.
     *
     * @example 24567
     *
     * @var float
     */
    public $flow;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'cdnRegion' => 'CdnRegion',
        'chargeType' => 'ChargeType',
        'count' => 'Count',
        'flow' => 'Flow',
    ];

    public function validate() {}

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
