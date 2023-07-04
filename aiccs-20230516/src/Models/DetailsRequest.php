<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models;

use AlibabaCloud\Tea\Model;

class DetailsRequest extends Model
{
    /**
     * @description 批次id
     *
     * @example 75
     *
     * @var int
     */
    public $batchId;

    /**
     * @description 结束导入时间
     *
     * @example 2023-04-25 15:19:02
     *
     * @var string
     */
    public $endTime;

    /**
     * @description 号码状态
     *
     * @example 1
     *
     * @var int
     */
    public $numberStatus;

    /**
     * @description 号码列表
     *
     * @var string[]
     */
    public $numbers;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description 页数
     *
     * @example 77
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description 每页条数
     *
     * @example 3
     *
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
     * @description 开始导入时间
     *
     * @example 2023-04-25 15:19:02
     *
     * @var string
     */
    public $startTime;

    /**
     * @description 任务id
     *
     * @example 90
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'batchId'              => 'BatchId',
        'endTime'              => 'EndTime',
        'numberStatus'         => 'NumberStatus',
        'numbers'              => 'Numbers',
        'ownerId'              => 'OwnerId',
        'pageNo'               => 'PageNo',
        'pageSize'             => 'PageSize',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'startTime'            => 'StartTime',
        'taskId'               => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->numberStatus) {
            $res['NumberStatus'] = $this->numberStatus;
        }
        if (null !== $this->numbers) {
            $res['Numbers'] = $this->numbers;
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['NumberStatus'])) {
            $model->numberStatus = $map['NumberStatus'];
        }
        if (isset($map['Numbers'])) {
            if (!empty($map['Numbers'])) {
                $model->numbers = $map['Numbers'];
            }
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
