<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class CreateWmInfoMappingRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example aGVsbG8gc2F*****
     *
     * @var string
     */
    public $wmInfoBytesB64;

    /**
     * @example 32
     *
     * @var int
     */
    public $wmInfoSize;

    /**
     * @description This parameter is required.
     *
     * @example PureDocument
     *
     * @var string
     */
    public $wmType;
    protected $_name = [
        'wmInfoBytesB64' => 'WmInfoBytesB64',
        'wmInfoSize'     => 'WmInfoSize',
        'wmType'         => 'WmType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->wmInfoBytesB64) {
            $res['WmInfoBytesB64'] = $this->wmInfoBytesB64;
        }
        if (null !== $this->wmInfoSize) {
            $res['WmInfoSize'] = $this->wmInfoSize;
        }
        if (null !== $this->wmType) {
            $res['WmType'] = $this->wmType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWmInfoMappingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WmInfoBytesB64'])) {
            $model->wmInfoBytesB64 = $map['WmInfoBytesB64'];
        }
        if (isset($map['WmInfoSize'])) {
            $model->wmInfoSize = $map['WmInfoSize'];
        }
        if (isset($map['WmType'])) {
            $model->wmType = $map['WmType'];
        }

        return $model;
    }
}
