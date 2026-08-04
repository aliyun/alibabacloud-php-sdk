<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\AuthAndRefreshLoginTicketResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $newLoginTicket;
    protected $_name = [
        'newLoginTicket' => 'NewLoginTicket',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newLoginTicket) {
            $res['NewLoginTicket'] = $this->newLoginTicket;
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
        if (isset($map['NewLoginTicket'])) {
            $model->newLoginTicket = $map['NewLoginTicket'];
        }

        return $model;
    }
}
