<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardQueryResponseBody\module\reserveRule;

use AlibabaCloud\Tea\Model;

class moduleConfigList extends Model
{
    /**
     * @example FLIGHT_ADVANCE_BUY_DAY
     *
     * @var string
     */
    public $code;

    /**
     * @example 3
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'code'  => 'code',
        'value' => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moduleConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
