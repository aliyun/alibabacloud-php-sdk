<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeSkillHeaders;

use AlibabaCloud\Dara\Model;

class accountContext extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $ssoTicket;
    protected $_name = [
        'accountId' => 'accountId',
        'ssoTicket' => 'ssoTicket',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->ssoTicket) {
            $res['ssoTicket'] = $this->ssoTicket;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['ssoTicket'])) {
            $model->ssoTicket = $map['ssoTicket'];
        }

        return $model;
    }
}
