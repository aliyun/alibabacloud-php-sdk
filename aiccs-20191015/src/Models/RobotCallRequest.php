<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class RobotCallRequest extends Model
{
    /**
     * @example 131****2204
     *
     * @var string
     */
    public $calledNumber;

    /**
     * @example 0571****5678
     *
     * @var string
     */
    public $calledShowNumber;

    /**
     * @example false
     *
     * @var bool
     */
    public $earlyMediaAsr;

    /**
     * @example abcdefgh
     *
     * @var string
     */
    public $outId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $params;

    /**
     * @example true
     *
     * @var bool
     */
    public $recordFlag;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @example 350000****
     *
     * @var int
     */
    public $robotId;
    protected $_name = [
        'calledNumber'         => 'CalledNumber',
        'calledShowNumber'     => 'CalledShowNumber',
        'earlyMediaAsr'        => 'EarlyMediaAsr',
        'outId'                => 'OutId',
        'ownerId'              => 'OwnerId',
        'params'               => 'Params',
        'recordFlag'           => 'RecordFlag',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'robotId'              => 'RobotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->calledShowNumber) {
            $res['CalledShowNumber'] = $this->calledShowNumber;
        }
        if (null !== $this->earlyMediaAsr) {
            $res['EarlyMediaAsr'] = $this->earlyMediaAsr;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->recordFlag) {
            $res['RecordFlag'] = $this->recordFlag;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->robotId) {
            $res['RobotId'] = $this->robotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RobotCallRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['CalledShowNumber'])) {
            $model->calledShowNumber = $map['CalledShowNumber'];
        }
        if (isset($map['EarlyMediaAsr'])) {
            $model->earlyMediaAsr = $map['EarlyMediaAsr'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['RecordFlag'])) {
            $model->recordFlag = $map['RecordFlag'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RobotId'])) {
            $model->robotId = $map['RobotId'];
        }

        return $model;
    }
}
