<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class CreateRobotTaskRequest extends Model
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
    public $taskName;

    /**
     * @var int
     */
    public $dialogId;

    /**
     * @var string
     */
    public $corpName;

    /**
     * @var string
     */
    public $caller;

    /**
     * @var bool
     */
    public $numberStatusIdent;

    /**
     * @var int
     */
    public $retryType;

    /**
     * @var string
     */
    public $recallStateCodes;

    /**
     * @var int
     */
    public $recallTimes;

    /**
     * @var int
     */
    public $recallInterval;

    /**
     * @var bool
     */
    public $isSelfLine;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'taskName'             => 'TaskName',
        'dialogId'             => 'DialogId',
        'corpName'             => 'CorpName',
        'caller'               => 'Caller',
        'numberStatusIdent'    => 'NumberStatusIdent',
        'retryType'            => 'RetryType',
        'recallStateCodes'     => 'RecallStateCodes',
        'recallTimes'          => 'RecallTimes',
        'recallInterval'       => 'RecallInterval',
        'isSelfLine'           => 'IsSelfLine',
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
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->dialogId) {
            $res['DialogId'] = $this->dialogId;
        }
        if (null !== $this->corpName) {
            $res['CorpName'] = $this->corpName;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->numberStatusIdent) {
            $res['NumberStatusIdent'] = $this->numberStatusIdent;
        }
        if (null !== $this->retryType) {
            $res['RetryType'] = $this->retryType;
        }
        if (null !== $this->recallStateCodes) {
            $res['RecallStateCodes'] = $this->recallStateCodes;
        }
        if (null !== $this->recallTimes) {
            $res['RecallTimes'] = $this->recallTimes;
        }
        if (null !== $this->recallInterval) {
            $res['RecallInterval'] = $this->recallInterval;
        }
        if (null !== $this->isSelfLine) {
            $res['IsSelfLine'] = $this->isSelfLine;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRobotTaskRequest
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
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['DialogId'])) {
            $model->dialogId = $map['DialogId'];
        }
        if (isset($map['CorpName'])) {
            $model->corpName = $map['CorpName'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['NumberStatusIdent'])) {
            $model->numberStatusIdent = $map['NumberStatusIdent'];
        }
        if (isset($map['RetryType'])) {
            $model->retryType = $map['RetryType'];
        }
        if (isset($map['RecallStateCodes'])) {
            $model->recallStateCodes = $map['RecallStateCodes'];
        }
        if (isset($map['RecallTimes'])) {
            $model->recallTimes = $map['RecallTimes'];
        }
        if (isset($map['RecallInterval'])) {
            $model->recallInterval = $map['RecallInterval'];
        }
        if (isset($map['IsSelfLine'])) {
            $model->isSelfLine = $map['IsSelfLine'];
        }

        return $model;
    }
}
