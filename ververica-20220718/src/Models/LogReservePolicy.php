<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class LogReservePolicy extends Model
{
    /**
     * @var int
     */
    public $expirationDays;
    /**
     * @var bool
     */
    public $openHistory;
    protected $_name = [
        'expirationDays' => 'expirationDays',
        'openHistory'    => 'openHistory',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expirationDays) {
            $res['expirationDays'] = $this->expirationDays;
        }

        if (null !== $this->openHistory) {
            $res['openHistory'] = $this->openHistory;
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
        if (isset($map['expirationDays'])) {
            $model->expirationDays = $map['expirationDays'];
        }

        if (isset($map['openHistory'])) {
            $model->openHistory = $map['openHistory'];
        }

        return $model;
    }
}
