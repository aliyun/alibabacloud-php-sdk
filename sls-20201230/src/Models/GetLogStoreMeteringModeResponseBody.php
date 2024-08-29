<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetLogStoreMeteringModeResponseBody extends Model
{
    /**
     * @description The billing mode. Default value: ChargeByFunction. Valid values: ChargeByFunction and ChargeByDataIngest.
     *
     * @example ChargeByFunction
     *
     * @var string
     */
    public $meteringMode;
    protected $_name = [
        'meteringMode' => 'meteringMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->meteringMode) {
            $res['meteringMode'] = $this->meteringMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLogStoreMeteringModeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['meteringMode'])) {
            $model->meteringMode = $map['meteringMode'];
        }

        return $model;
    }
}
