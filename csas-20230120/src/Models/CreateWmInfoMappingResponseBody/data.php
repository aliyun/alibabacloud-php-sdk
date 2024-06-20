<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmInfoMappingResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 123***
     *
     * @var int
     */
    public $wmInfoUint;
    protected $_name = [
        'wmInfoUint' => 'WmInfoUint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->wmInfoUint) {
            $res['WmInfoUint'] = $this->wmInfoUint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WmInfoUint'])) {
            $model->wmInfoUint = $map['WmInfoUint'];
        }

        return $model;
    }
}
