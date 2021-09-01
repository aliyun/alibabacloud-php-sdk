<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderCommissionRateResponseBody\commissionModels\commissionInfo\rateConfig;

use AlibabaCloud\Tea\Model;

class configs extends Model
{
    /**
     * @var string
     */
    public $valueUnit;

    /**
     * @var int
     */
    public $value;
    protected $_name = [
        'valueUnit' => 'ValueUnit',
        'value'     => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->valueUnit) {
            $res['ValueUnit'] = $this->valueUnit;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ValueUnit'])) {
            $model->valueUnit = $map['ValueUnit'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
