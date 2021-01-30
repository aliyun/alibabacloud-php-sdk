<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QueryRobotTaskCallListRequest extends Model
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
    public $taskId;

    /**
     * @var string
     */
    public $durationFrom;

    /**
     * @var string
     */
    public $durationTo;

    /**
     * @var string
     */
    public $dialogCountFrom;

    /**
     * @var string
     */
    public $dialogCountTo;

    /**
     * @var string
     */
    public $hangupDirection;

    /**
     * @var string
     */
    public $callResult;

    /**
     * @var string
     */
    public $called;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'pageNo'               => 'PageNo',
        'pageSize'             => 'PageSize',
        'taskId'               => 'TaskId',
        'durationFrom'         => 'DurationFrom',
        'durationTo'           => 'DurationTo',
        'dialogCountFrom'      => 'DialogCountFrom',
        'dialogCountTo'        => 'DialogCountTo',
        'hangupDirection'      => 'HangupDirection',
        'callResult'           => 'CallResult',
        'called'               => 'Called',
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
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->durationFrom) {
            $res['DurationFrom'] = $this->durationFrom;
        }
        if (null !== $this->durationTo) {
            $res['DurationTo'] = $this->durationTo;
        }
        if (null !== $this->dialogCountFrom) {
            $res['DialogCountFrom'] = $this->dialogCountFrom;
        }
        if (null !== $this->dialogCountTo) {
            $res['DialogCountTo'] = $this->dialogCountTo;
        }
        if (null !== $this->hangupDirection) {
            $res['HangupDirection'] = $this->hangupDirection;
        }
        if (null !== $this->callResult) {
            $res['CallResult'] = $this->callResult;
        }
        if (null !== $this->called) {
            $res['Called'] = $this->called;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRobotTaskCallListRequest
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
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['DurationFrom'])) {
            $model->durationFrom = $map['DurationFrom'];
        }
        if (isset($map['DurationTo'])) {
            $model->durationTo = $map['DurationTo'];
        }
        if (isset($map['DialogCountFrom'])) {
            $model->dialogCountFrom = $map['DialogCountFrom'];
        }
        if (isset($map['DialogCountTo'])) {
            $model->dialogCountTo = $map['DialogCountTo'];
        }
        if (isset($map['HangupDirection'])) {
            $model->hangupDirection = $map['HangupDirection'];
        }
        if (isset($map['CallResult'])) {
            $model->callResult = $map['CallResult'];
        }
        if (isset($map['Called'])) {
            $model->called = $map['Called'];
        }

        return $model;
    }
}
