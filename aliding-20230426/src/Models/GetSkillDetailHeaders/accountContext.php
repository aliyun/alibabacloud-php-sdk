<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetSkillDetailHeaders;

use AlibabaCloud\Dara\Model;

class accountContext extends Model
{
    /**
     * @var string
     */
    public $ssoTicket;

    /**
     * @var string
     */
    public $accountId;
    protected $_name = [
        'ssoTicket' => 'SsoTicket',
        'accountId' => 'accountId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ssoTicket) {
            $res['SsoTicket'] = $this->ssoTicket;
        }

        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
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
        if (isset($map['SsoTicket'])) {
            $model->ssoTicket = $map['SsoTicket'];
        }

        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        return $model;
    }
}
