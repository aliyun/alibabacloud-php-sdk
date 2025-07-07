<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models;

use AlibabaCloud\Dara\Model;

class EnterpriseUninvitedAdminInviteJoinEnterpriseRequest extends Model
{
    /**
     * @var string
     */
    public $ecId;

    /**
     * @var string
     */
    public $encryptTicket;

    /**
     * @var string
     */
    public $inviteePk;

    /**
     * @var string
     */
    public $leId;

    /**
     * @var string
     */
    public $nbId;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'ecId' => 'EcId',
        'encryptTicket' => 'EncryptTicket',
        'inviteePk' => 'InviteePk',
        'leId' => 'LeId',
        'nbId' => 'NbId',
        'remark' => 'Remark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ecId) {
            $res['EcId'] = $this->ecId;
        }

        if (null !== $this->encryptTicket) {
            $res['EncryptTicket'] = $this->encryptTicket;
        }

        if (null !== $this->inviteePk) {
            $res['InviteePk'] = $this->inviteePk;
        }

        if (null !== $this->leId) {
            $res['LeId'] = $this->leId;
        }

        if (null !== $this->nbId) {
            $res['NbId'] = $this->nbId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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
        if (isset($map['EcId'])) {
            $model->ecId = $map['EcId'];
        }

        if (isset($map['EncryptTicket'])) {
            $model->encryptTicket = $map['EncryptTicket'];
        }

        if (isset($map['InviteePk'])) {
            $model->inviteePk = $map['InviteePk'];
        }

        if (isset($map['LeId'])) {
            $model->leId = $map['LeId'];
        }

        if (isset($map['NbId'])) {
            $model->nbId = $map['NbId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
