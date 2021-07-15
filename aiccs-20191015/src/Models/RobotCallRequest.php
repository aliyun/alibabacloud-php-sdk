<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class RobotCallRequest extends Model
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
    public $calledShowNumber;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var int
     */
    public $robotId;

    /**
     * @var string
     */
    public $outId;

    /**
     * @var bool
     */
    public $recordFlag;

    /**
     * @var bool
     */
    public $earlyMediaAsr;

    /**
     * @var string
     */
    public $params;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'calledShowNumber'     => 'CalledShowNumber',
        'calledNumber'         => 'CalledNumber',
        'robotId'              => 'RobotId',
        'outId'                => 'OutId',
        'recordFlag'           => 'RecordFlag',
        'earlyMediaAsr'        => 'EarlyMediaAsr',
        'params'               => 'Params',
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
        if (null !== $this->calledShowNumber) {
            $res['CalledShowNumber'] = $this->calledShowNumber;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->robotId) {
            $res['RobotId'] = $this->robotId;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->recordFlag) {
            $res['RecordFlag'] = $this->recordFlag;
        }
        if (null !== $this->earlyMediaAsr) {
            $res['EarlyMediaAsr'] = $this->earlyMediaAsr;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['CalledShowNumber'])) {
            $model->calledShowNumber = $map['CalledShowNumber'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['RobotId'])) {
            $model->robotId = $map['RobotId'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['RecordFlag'])) {
            $model->recordFlag = $map['RecordFlag'];
        }
        if (isset($map['EarlyMediaAsr'])) {
            $model->earlyMediaAsr = $map['EarlyMediaAsr'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        return $model;
    }
}
