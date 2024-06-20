<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class LookupWmInfoMappingRequest extends Model
{
    /**
     * @example 32
     *
     * @var int
     */
    public $wmInfoSize;

    /**
     * @description This parameter is required.
     *
     * @example 123***
     *
     * @var string
     */
    public $wmInfoUint;

    /**
     * @description This parameter is required.
     *
     * @example PureDocument
     *
     * @var string
     */
    public $wmType;
    protected $_name = [
        'wmInfoSize' => 'WmInfoSize',
        'wmInfoUint' => 'WmInfoUint',
        'wmType'     => 'WmType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->wmInfoSize) {
            $res['WmInfoSize'] = $this->wmInfoSize;
        }
        if (null !== $this->wmInfoUint) {
            $res['WmInfoUint'] = $this->wmInfoUint;
        }
        if (null !== $this->wmType) {
            $res['WmType'] = $this->wmType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LookupWmInfoMappingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WmInfoSize'])) {
            $model->wmInfoSize = $map['WmInfoSize'];
        }
        if (isset($map['WmInfoUint'])) {
            $model->wmInfoUint = $map['WmInfoUint'];
        }
        if (isset($map['WmType'])) {
            $model->wmType = $map['WmType'];
        }

        return $model;
    }
}
