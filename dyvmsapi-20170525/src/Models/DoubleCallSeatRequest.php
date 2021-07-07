<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class DoubleCallSeatRequest extends Model
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
    public $callerShowNumber;

    /**
     * @var string
     */
    public $callerNumber;

    /**
     * @var string
     */
    public $calledShowNumber;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var bool
     */
    public $recordFlag;

    /**
     * @var bool
     */
    public $asrFlag;

    /**
     * @var int
     */
    public $sessionTimeout;

    /**
     * @var string
     */
    public $asrModelId;

    /**
     * @var string
     */
    public $outId;

    /**
     * @var string
     */
    public $callType;

    /**
     * @var int
     */
    public $recordPoint;

    /**
     * @var string
     */
    public $voiceCode;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'callerShowNumber'     => 'CallerShowNumber',
        'callerNumber'         => 'CallerNumber',
        'calledShowNumber'     => 'CalledShowNumber',
        'calledNumber'         => 'CalledNumber',
        'recordFlag'           => 'RecordFlag',
        'asrFlag'              => 'AsrFlag',
        'sessionTimeout'       => 'SessionTimeout',
        'asrModelId'           => 'AsrModelId',
        'outId'                => 'OutId',
        'callType'             => 'CallType',
        'recordPoint'          => 'RecordPoint',
        'voiceCode'            => 'VoiceCode',
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
        if (null !== $this->callerShowNumber) {
            $res['CallerShowNumber'] = $this->callerShowNumber;
        }
        if (null !== $this->callerNumber) {
            $res['CallerNumber'] = $this->callerNumber;
        }
        if (null !== $this->calledShowNumber) {
            $res['CalledShowNumber'] = $this->calledShowNumber;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->recordFlag) {
            $res['RecordFlag'] = $this->recordFlag;
        }
        if (null !== $this->asrFlag) {
            $res['AsrFlag'] = $this->asrFlag;
        }
        if (null !== $this->sessionTimeout) {
            $res['SessionTimeout'] = $this->sessionTimeout;
        }
        if (null !== $this->asrModelId) {
            $res['AsrModelId'] = $this->asrModelId;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }
        if (null !== $this->recordPoint) {
            $res['RecordPoint'] = $this->recordPoint;
        }
        if (null !== $this->voiceCode) {
            $res['VoiceCode'] = $this->voiceCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DoubleCallSeatRequest
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
        if (isset($map['CallerShowNumber'])) {
            $model->callerShowNumber = $map['CallerShowNumber'];
        }
        if (isset($map['CallerNumber'])) {
            $model->callerNumber = $map['CallerNumber'];
        }
        if (isset($map['CalledShowNumber'])) {
            $model->calledShowNumber = $map['CalledShowNumber'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['RecordFlag'])) {
            $model->recordFlag = $map['RecordFlag'];
        }
        if (isset($map['AsrFlag'])) {
            $model->asrFlag = $map['AsrFlag'];
        }
        if (isset($map['SessionTimeout'])) {
            $model->sessionTimeout = $map['SessionTimeout'];
        }
        if (isset($map['AsrModelId'])) {
            $model->asrModelId = $map['AsrModelId'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }
        if (isset($map['RecordPoint'])) {
            $model->recordPoint = $map['RecordPoint'];
        }
        if (isset($map['VoiceCode'])) {
            $model->voiceCode = $map['VoiceCode'];
        }

        return $model;
    }
}
