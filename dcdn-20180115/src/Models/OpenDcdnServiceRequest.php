<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;

class OpenDcdnServiceRequest extends Model
{
    /**
     * @var string
     */
    public $billType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $websocketBillType;
    protected $_name = [
        'billType' => 'BillType',
        'ownerId' => 'OwnerId',
        'securityToken' => 'SecurityToken',
        'websocketBillType' => 'WebsocketBillType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billType) {
            $res['BillType'] = $this->billType;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->websocketBillType) {
            $res['WebsocketBillType'] = $this->websocketBillType;
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
        if (isset($map['BillType'])) {
            $model->billType = $map['BillType'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['WebsocketBillType'])) {
            $model->websocketBillType = $map['WebsocketBillType'];
        }

        return $model;
    }
}
