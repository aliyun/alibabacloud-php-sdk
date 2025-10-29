<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class QueryAiCallDetailPageRequest extends Model
{
    /**
     * @var string
     */
    public $batchId;

    /**
     * @var string
     */
    public $callResult;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var int
     */
    public $endCallingTime;

    /**
     * @var int
     */
    public $endImportedTime;

    /**
     * @var string
     */
    public $majorIntent;

    /**
     * @var int
     */
    public $maxConversationDuration;

    /**
     * @var int
     */
    public $minConversationDuration;

    /**
     * @var string
     */
    public $outId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

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
    public $startCallingTime;

    /**
     * @var int
     */
    public $startImportedTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'batchId' => 'BatchId',
        'callResult' => 'CallResult',
        'calledNumber' => 'CalledNumber',
        'endCallingTime' => 'EndCallingTime',
        'endImportedTime' => 'EndImportedTime',
        'majorIntent' => 'MajorIntent',
        'maxConversationDuration' => 'MaxConversationDuration',
        'minConversationDuration' => 'MinConversationDuration',
        'outId' => 'OutId',
        'ownerId' => 'OwnerId',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'startCallingTime' => 'StartCallingTime',
        'startImportedTime' => 'StartImportedTime',
        'status' => 'Status',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }

        if (null !== $this->callResult) {
            $res['CallResult'] = $this->callResult;
        }

        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }

        if (null !== $this->endCallingTime) {
            $res['EndCallingTime'] = $this->endCallingTime;
        }

        if (null !== $this->endImportedTime) {
            $res['EndImportedTime'] = $this->endImportedTime;
        }

        if (null !== $this->majorIntent) {
            $res['MajorIntent'] = $this->majorIntent;
        }

        if (null !== $this->maxConversationDuration) {
            $res['MaxConversationDuration'] = $this->maxConversationDuration;
        }

        if (null !== $this->minConversationDuration) {
            $res['MinConversationDuration'] = $this->minConversationDuration;
        }

        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->startCallingTime) {
            $res['StartCallingTime'] = $this->startCallingTime;
        }

        if (null !== $this->startImportedTime) {
            $res['StartImportedTime'] = $this->startImportedTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }

        if (isset($map['CallResult'])) {
            $model->callResult = $map['CallResult'];
        }

        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }

        if (isset($map['EndCallingTime'])) {
            $model->endCallingTime = $map['EndCallingTime'];
        }

        if (isset($map['EndImportedTime'])) {
            $model->endImportedTime = $map['EndImportedTime'];
        }

        if (isset($map['MajorIntent'])) {
            $model->majorIntent = $map['MajorIntent'];
        }

        if (isset($map['MaxConversationDuration'])) {
            $model->maxConversationDuration = $map['MaxConversationDuration'];
        }

        if (isset($map['MinConversationDuration'])) {
            $model->minConversationDuration = $map['MinConversationDuration'];
        }

        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['StartCallingTime'])) {
            $model->startCallingTime = $map['StartCallingTime'];
        }

        if (isset($map['StartImportedTime'])) {
            $model->startImportedTime = $map['StartImportedTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
