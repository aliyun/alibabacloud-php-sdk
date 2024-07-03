<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class PutConcurrencyInput extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $reservedConcurrency;
    protected $_name = [
        'reservedConcurrency' => 'reservedConcurrency',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reservedConcurrency) {
            $res['reservedConcurrency'] = $this->reservedConcurrency;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutConcurrencyInput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['reservedConcurrency'])) {
            $model->reservedConcurrency = $map['reservedConcurrency'];
        }

        return $model;
    }
}
