<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class ClickToDialRequest extends Model
{
    /**
     * @var bool
     */
    public $asrFlag;

    /**
     * @var string
     */
    public $asrModelId;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $calledShowNumber;

    /**
     * @var string
     */
    public $callerNumber;

    /**
     * @var string
     */
    public $callerShowNumber;

    /**
     * @var string
     */
    public $outId;

    /**
     * @var int
     */
    public $ownerId;

    /**
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
     * @var int
     */
    public $sessionTimeout;
    protected $_name = [
        'asrFlag'              => 'AsrFlag',
        'asrModelId'           => 'AsrModelId',
        'calledNumber'         => 'CalledNumber',
        'calledShowNumber'     => 'CalledShowNumber',
        'callerNumber'         => 'CallerNumber',
        'callerShowNumber'     => 'CallerShowNumber',
        'outId'                => 'OutId',
        'ownerId'              => 'OwnerId',
        'recordFlag'           => 'RecordFlag',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'sessionTimeout'       => 'SessionTimeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asrFlag) {
            $res['AsrFlag'] = $this->asrFlag;
        }
        if (null !== $this->asrModelId) {
            $res['AsrModelId'] = $this->asrModelId;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->calledShowNumber) {
            $res['CalledShowNumber'] = $this->calledShowNumber;
        }
        if (null !== $this->callerNumber) {
            $res['CallerNumber'] = $this->callerNumber;
        }
        if (null !== $this->callerShowNumber) {
            $res['CallerShowNumber'] = $this->callerShowNumber;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->sessionTimeout) {
            $res['SessionTimeout'] = $this->sessionTimeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ClickToDialRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsrFlag'])) {
            $model->asrFlag = $map['AsrFlag'];
        }
        if (isset($map['AsrModelId'])) {
            $model->asrModelId = $map['AsrModelId'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['CalledShowNumber'])) {
            $model->calledShowNumber = $map['CalledShowNumber'];
        }
        if (isset($map['CallerNumber'])) {
            $model->callerNumber = $map['CallerNumber'];
        }
        if (isset($map['CallerShowNumber'])) {
            $model->callerShowNumber = $map['CallerShowNumber'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['SessionTimeout'])) {
            $model->sessionTimeout = $map['SessionTimeout'];
        }

        return $model;
    }
}
