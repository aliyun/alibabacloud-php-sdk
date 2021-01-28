<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class OpenDcdnServiceRequest extends Model
{
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
    public $billType;

    /**
     * @var string
     */
    public $websocketBillType;
    protected $_name = [
        'ownerId'           => 'OwnerId',
        'securityToken'     => 'SecurityToken',
        'billType'          => 'BillType',
        'websocketBillType' => 'WebsocketBillType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->billType) {
            $res['BillType'] = $this->billType;
        }
        if (null !== $this->websocketBillType) {
            $res['WebsocketBillType'] = $this->websocketBillType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OpenDcdnServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['BillType'])) {
            $model->billType = $map['BillType'];
        }
        if (isset($map['WebsocketBillType'])) {
            $model->websocketBillType = $map['WebsocketBillType'];
        }

        return $model;
    }
}
