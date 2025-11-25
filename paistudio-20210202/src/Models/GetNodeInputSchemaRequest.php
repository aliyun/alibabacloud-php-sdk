<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Dara\Model;

class GetNodeInputSchemaRequest extends Model
{
    /**
     * @var string
     */
    public $inputId;

    /**
     * @var int
     */
    public $inputIndex;
    protected $_name = [
        'inputId' => 'InputId',
        'inputIndex' => 'InputIndex',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
