<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ConcurrencyConfig extends Model
{
    /**
     * @var string
     */
    public $functionArn;
    /**
     * @var int
     */
    public $reservedConcurrency;
    protected $_name = [
        'functionArn'         => 'functionArn',
        'reservedConcurrency' => 'reservedConcurrency',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->functionArn) {
            $res['functionArn'] = $this->functionArn;
        }

        if (null !== $this->reservedConcurrency) {
            $res['reservedConcurrency'] = $this->reservedConcurrency;
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
        if (isset($map['functionArn'])) {
            $model->functionArn = $map['functionArn'];
        }

        if (isset($map['reservedConcurrency'])) {
            $model->reservedConcurrency = $map['reservedConcurrency'];
        }

        return $model;
    }
}
