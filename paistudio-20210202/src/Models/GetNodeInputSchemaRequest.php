<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Tea\Model;

class GetNodeInputSchemaRequest extends Model
{
    /**
     * @example inputTable
     *
     * @var string
     */
    public $inputId;

    /**
     * @example 0
     *
     * @var int
     */
    public $inputIndex;
    protected $_name = [
        'inputId'    => 'InputId',
        'inputIndex' => 'InputIndex',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputId) {
            $res['InputId'] = $this->inputId;
        }
        if (null !== $this->inputIndex) {
            $res['InputIndex'] = $this->inputIndex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNodeInputSchemaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputId'])) {
            $model->inputId = $map['InputId'];
        }
        if (isset($map['InputIndex'])) {
            $model->inputIndex = $map['InputIndex'];
        }

        return $model;
    }
}
