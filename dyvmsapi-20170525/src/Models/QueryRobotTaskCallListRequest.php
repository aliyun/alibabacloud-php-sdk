<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QueryRobotTaskCallListRequest extends Model
{
    /**
     * @var string
     */
    public $callResult;

    /**
     * @var string
     */
    public $called;

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
    public $durationFrom;

    /**
     * @var string
     */
    public $durationTo;

    /**
     * @var string
     */
    public $hangupDirection;

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
     * @var string
     */
    public $taskId;
    protected $_name = [
        'callResult'           => 'CallResult',
        'called'               => 'Called',
        'dialogCountFrom'      => 'DialogCountFrom',
        'dialogCountTo'        => 'DialogCountTo',
        'durationFrom'         => 'DurationFrom',
        'durationTo'           => 'DurationTo',
        'hangupDirection'      => 'HangupDirection',
        'ownerId'              => 'OwnerId',
        'pageNo'               => 'PageNo',
        'pageSize'             => 'PageSize',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'taskId'               => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callResult) {
            $res['CallResult'] = $this->callResult;
        }
        if (null !== $this->called) {
            $res['Called'] = $this->called;
        }
        if (null !== $this->dialogCountFrom) {
            $res['DialogCountFrom'] = $this->dialogCountFrom;
        }
        if (null !== $this->dialogCountTo) {
            $res['DialogCountTo'] = $this->dialogCountTo;
        }
        if (null !== $this->durationFrom) {
            $res['DurationFrom'] = $this->durationFrom;
        }
        if (null !== $this->durationTo) {
            $res['DurationTo'] = $this->durationTo;
        }
        if (null !== $this->hangupDirection) {
            $res['HangupDirection'] = $this->hangupDirection;
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
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['CallResult'])) {
            $model->callResult = $map['CallResult'];
        }
        if (isset($map['Called'])) {
            $model->called = $map['Called'];
        }
        if (isset($map['DialogCountFrom'])) {
            $model->dialogCountFrom = $map['DialogCountFrom'];
        }
        if (isset($map['DialogCountTo'])) {
            $model->dialogCountTo = $map['DialogCountTo'];
        }
        if (isset($map['DurationFrom'])) {
            $model->durationFrom = $map['DurationFrom'];
        }
        if (isset($map['DurationTo'])) {
            $model->durationTo = $map['DurationTo'];
        }
        if (isset($map['HangupDirection'])) {
            $model->hangupDirection = $map['HangupDirection'];
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
