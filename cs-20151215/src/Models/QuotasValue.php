<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class QuotasValue extends Model
{
    /**
     * @var string
     */
    public $quota;
    /**
     * @var string
     */
    public $operationCode;
    /**
     * @var bool
     */
    public $adjustable;
    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'quota'         => 'quota',
        'operationCode' => 'operation_code',
        'adjustable'    => 'adjustable',
        'unit'          => 'unit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->quota) {
            $res['quota'] = $this->quota;
        }

        if (null !== $this->operationCode) {
            $res['operation_code'] = $this->operationCode;
        }

        if (null !== $this->adjustable) {
            $res['adjustable'] = $this->adjustable;
        }

        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
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
        if (isset($map['quota'])) {
            $model->quota = $map['quota'];
        }

        if (isset($map['operation_code'])) {
            $model->operationCode = $map['operation_code'];
        }

        if (isset($map['adjustable'])) {
            $model->adjustable = $map['adjustable'];
        }

        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        return $model;
    }
}
