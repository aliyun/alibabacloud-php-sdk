<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetDasUsageResponseBody;

use AlibabaCloud\Tea\Model;

class riskAsset extends Model
{
    /**
     * @var int
     */
    public $riskDBCount;

    /**
     * @var int
     */
    public $day30RiskDBCount;
    protected $_name = [
        'riskDBCount'      => 'RiskDBCount',
        'day30RiskDBCount' => 'Day30RiskDBCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->riskDBCount) {
            $res['RiskDBCount'] = $this->riskDBCount;
        }
        if (null !== $this->day30RiskDBCount) {
            $res['Day30RiskDBCount'] = $this->day30RiskDBCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return riskAsset
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RiskDBCount'])) {
            $model->riskDBCount = $map['RiskDBCount'];
        }
        if (isset($map['Day30RiskDBCount'])) {
            $model->day30RiskDBCount = $map['Day30RiskDBCount'];
        }

        return $model;
    }
}
