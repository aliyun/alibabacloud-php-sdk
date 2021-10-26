<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class CreateRobotTaskRequest extends Model
{
    /**
     * @var string
     */
    public $caller;

    /**
     * @var string
     */
    public $corpName;

    /**
     * @var int
     */
    public $dialogId;

    /**
     * @var bool
     */
    public $isSelfLine;

    /**
     * @var bool
     */
    public $numberStatusIdent;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $recallInterval;

    /**
     * @var string
     */
    public $recallStateCodes;

    /**
     * @var int
     */
    public $recallTimes;

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
    public $retryType;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'caller'               => 'Caller',
        'corpName'             => 'CorpName',
        'dialogId'             => 'DialogId',
        'isSelfLine'           => 'IsSelfLine',
        'numberStatusIdent'    => 'NumberStatusIdent',
        'ownerId'              => 'OwnerId',
        'recallInterval'       => 'RecallInterval',
        'recallStateCodes'     => 'RecallStateCodes',
        'recallTimes'          => 'RecallTimes',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'retryType'            => 'RetryType',
        'taskName'             => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->corpName) {
            $res['CorpName'] = $this->corpName;
        }
        if (null !== $this->dialogId) {
            $res['DialogId'] = $this->dialogId;
        }
        if (null !== $this->isSelfLine) {
            $res['IsSelfLine'] = $this->isSelfLine;
        }
        if (null !== $this->numberStatusIdent) {
            $res['NumberStatusIdent'] = $this->numberStatusIdent;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->recallInterval) {
            $res['RecallInterval'] = $this->recallInterval;
        }
        if (null !== $this->recallStateCodes) {
            $res['RecallStateCodes'] = $this->recallStateCodes;
        }
        if (null !== $this->recallTimes) {
            $res['RecallTimes'] = $this->recallTimes;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->retryType) {
            $res['RetryType'] = $this->retryType;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['CorpName'])) {
            $model->corpName = $map['CorpName'];
        }
        if (isset($map['DialogId'])) {
            $model->dialogId = $map['DialogId'];
        }
        if (isset($map['IsSelfLine'])) {
            $model->isSelfLine = $map['IsSelfLine'];
        }
        if (isset($map['NumberStatusIdent'])) {
            $model->numberStatusIdent = $map['NumberStatusIdent'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RecallInterval'])) {
            $model->recallInterval = $map['RecallInterval'];
        }
        if (isset($map['RecallStateCodes'])) {
            $model->recallStateCodes = $map['RecallStateCodes'];
        }
        if (isset($map['RecallTimes'])) {
            $model->recallTimes = $map['RecallTimes'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RetryType'])) {
            $model->retryType = $map['RetryType'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
