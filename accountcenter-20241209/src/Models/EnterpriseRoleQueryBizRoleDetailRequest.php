<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models;

use AlibabaCloud\Dara\Model;

class EnterpriseRoleQueryBizRoleDetailRequest extends Model
{
    /**
     * @var string
     */
    public $bizRoleCode;

    /**
     * @var string
     */
    public $encryptTicket;

    /**
     * @var string
     */
    public $orientedEcId;

    /**
     * @var string
     */
    public $orientedLeId;

    /**
     * @var string
     */
    public $orientedNbId;
    protected $_name = [
        'bizRoleCode' => 'BizRoleCode',
        'encryptTicket' => 'EncryptTicket',
        'orientedEcId' => 'OrientedEcId',
        'orientedLeId' => 'OrientedLeId',
        'orientedNbId' => 'OrientedNbId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizRoleCode) {
            $res['BizRoleCode'] = $this->bizRoleCode;
        }

        if (null !== $this->encryptTicket) {
            $res['EncryptTicket'] = $this->encryptTicket;
        }

        if (null !== $this->orientedEcId) {
            $res['OrientedEcId'] = $this->orientedEcId;
        }

        if (null !== $this->orientedLeId) {
            $res['OrientedLeId'] = $this->orientedLeId;
        }

        if (null !== $this->orientedNbId) {
            $res['OrientedNbId'] = $this->orientedNbId;
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
        if (isset($map['BizRoleCode'])) {
            $model->bizRoleCode = $map['BizRoleCode'];
        }

        if (isset($map['EncryptTicket'])) {
            $model->encryptTicket = $map['EncryptTicket'];
        }

        if (isset($map['OrientedEcId'])) {
            $model->orientedEcId = $map['OrientedEcId'];
        }

        if (isset($map['OrientedLeId'])) {
            $model->orientedLeId = $map['OrientedLeId'];
        }

        if (isset($map['OrientedNbId'])) {
            $model->orientedNbId = $map['OrientedNbId'];
        }

        return $model;
    }
}
