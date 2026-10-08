<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListUserAuthorizedResourcesHeaders;

use AlibabaCloud\Dara\Model;

class accountContext extends Model
{
    /**
     * @var string
     */
    public $alidingSsoTicket;

    /**
     * @var string
     */
    public $ssoTicket;

    /**
     * @var string
     */
    public $accountId;
    protected $_name = [
        'alidingSsoTicket' => 'AlidingSsoTicket',
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
        if (null !== $this->alidingSsoTicket) {
            $res['AlidingSsoTicket'] = $this->alidingSsoTicket;
        }

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
        if (isset($map['AlidingSsoTicket'])) {
            $model->alidingSsoTicket = $map['AlidingSsoTicket'];
        }

        if (isset($map['SsoTicket'])) {
            $model->ssoTicket = $map['SsoTicket'];
        }

        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        return $model;
    }
}
