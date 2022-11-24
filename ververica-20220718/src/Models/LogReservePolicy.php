<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return LogReservePolicy
     */
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
