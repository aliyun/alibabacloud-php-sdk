<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class AiccsSmartCallOperateRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $prodCode;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $command;

    /**
     * @var string
     */
    public $param;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'prodCode'             => 'ProdCode',
        'callId'               => 'CallId',
        'command'              => 'Command',
        'param'                => 'Param',
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->param) {
            $res['Param'] = $this->param;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AiccsSmartCallOperateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['Param'])) {
            $model->param = $map['Param'];
        }

        return $model;
    }
}
