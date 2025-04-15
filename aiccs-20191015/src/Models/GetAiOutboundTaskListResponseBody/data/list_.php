<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskListResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $concurrentRate;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $finishCount;

    /**
     * @var float
     */
    public $finishRate;

    /**
     * @var int
     */
    public $handlerId;

    /**
     * @var string
     */
    public $handlerName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $statusDesc;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'concurrentRate' => 'ConcurrentRate',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'finishCount' => 'FinishCount',
        'finishRate' => 'FinishRate',
        'handlerId' => 'HandlerId',
        'handlerName' => 'HandlerName',
        'name' => 'Name',
        'status' => 'Status',
        'statusDesc' => 'StatusDesc',
        'taskId' => 'TaskId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
