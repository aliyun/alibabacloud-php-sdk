<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\AuthLoginTicketResponseBody;

use AlibabaCloud\Dara\Model;

class loginTicketDto extends Model
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loginTicket) {
            $res['LoginTicket'] = $this->loginTicket;
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
        if (isset($map['LoginTicket'])) {
            $model->loginTicket = $map['LoginTicket'];
        }

        return $model;
    }
}
