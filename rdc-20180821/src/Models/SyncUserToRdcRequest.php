<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821\Models;

use AlibabaCloud\Tea\Model;

class SyncUserToRdcRequest extends Model
{
    /**
     * @var string
     */
    public $loginTicket;
    protected $_name = [
        'loginTicket' => 'LoginTicket',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loginTicket) {
            $res['LoginTicket'] = $this->loginTicket;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SyncUserToRdcRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoginTicket'])) {
            $model->loginTicket = $map['LoginTicket'];
        }

        return $model;
    }
}
