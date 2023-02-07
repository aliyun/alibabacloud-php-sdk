<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskListResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $concurrentRate;

    /**
     * @example 1615083365000
     *
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 70
     *
     * @var int
     */
    public $finishCount;

    /**
     * @example 0.7
     *
     * @var float
     */
    public $finishRate;

    /**
     * @example 2468****
     *
     * @var int
     */
    public $handlerId;

    /**
     * @example 热线技能组
     *
     * @var string
     */
    public $handlerName;

    /**
     * @example xx外呼任务
     *
     * @var string
     */
    public $name;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example 未开始
     *
     * @var string
     */
    public $statusDesc;

    /**
     * @example 1763****
     *
     * @var int
     */
    public $taskId;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'concurrentRate' => 'ConcurrentRate',
        'createTime'     => 'CreateTime',
        'description'    => 'Description',
        'finishCount'    => 'FinishCount',
        'finishRate'     => 'FinishRate',
        'handlerId'      => 'HandlerId',
        'handlerName'    => 'HandlerName',
        'name'           => 'Name',
        'status'         => 'Status',
        'statusDesc'     => 'StatusDesc',
        'taskId'         => 'TaskId',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->concurrentRate) {
            $res['ConcurrentRate'] = $this->concurrentRate;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->finishCount) {
            $res['FinishCount'] = $this->finishCount;
        }
        if (null !== $this->finishRate) {
            $res['FinishRate'] = $this->finishRate;
        }
        if (null !== $this->handlerId) {
            $res['HandlerId'] = $this->handlerId;
        }
        if (null !== $this->handlerName) {
            $res['HandlerName'] = $this->handlerName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConcurrentRate'])) {
            $model->concurrentRate = $map['ConcurrentRate'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FinishCount'])) {
            $model->finishCount = $map['FinishCount'];
        }
        if (isset($map['FinishRate'])) {
            $model->finishRate = $map['FinishRate'];
        }
        if (isset($map['HandlerId'])) {
            $model->handlerId = $map['HandlerId'];
        }
        if (isset($map['HandlerName'])) {
            $model->handlerName = $map['HandlerName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
