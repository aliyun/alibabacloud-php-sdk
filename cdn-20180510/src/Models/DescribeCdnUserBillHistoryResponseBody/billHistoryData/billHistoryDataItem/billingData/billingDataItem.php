<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserBillHistoryResponseBody\billHistoryData\billHistoryDataItem\billingData;

use AlibabaCloud\Tea\Model;

class billingDataItem extends Model
{
    /**
     * @var float
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $cdnRegion;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var float
     */
    public $count;

    /**
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
