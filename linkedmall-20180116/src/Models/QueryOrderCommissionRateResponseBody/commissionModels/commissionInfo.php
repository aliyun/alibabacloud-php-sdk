<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderCommissionRateResponseBody\commissionModels;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderCommissionRateResponseBody\commissionModels\commissionInfo\rateConfig;
use AlibabaCloud\Tea\Model;

class commissionInfo extends Model
{
    /**
     * @var rateConfig
     */
    public $rateConfig;

    /**
     * @var string
     */
    public $rateType;
    protected $_name = [
        'rateConfig' => 'RateConfig',
        'rateType'   => 'RateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rateConfig) {
            $res['RateConfig'] = null !== $this->rateConfig ? $this->rateConfig->toMap() : null;
        }
        if (null !== $this->rateType) {
            $res['RateType'] = $this->rateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commissionInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RateConfig'])) {
            $model->rateConfig = rateConfig::fromMap($map['RateConfig']);
        }
        if (isset($map['RateType'])) {
            $model->rateType = $map['RateType'];
        }

        return $model;
    }
}
