<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Tea\Model;

class GetDataItemListRequest extends Model
{
    /**
     * @description The enterprise code.
     *
     * This parameter is required.
     * @example C-202302-01
     *
     * @var string
     */
    public $code;
    protected $_name = [
        'code' => 'code',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataItemListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        return $model;
    }
}
