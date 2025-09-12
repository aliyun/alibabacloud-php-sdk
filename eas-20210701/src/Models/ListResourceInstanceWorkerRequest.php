<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class ListResourceInstanceWorkerRequest extends Model
{
    /**
     * @var string
     */
    public $order;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $ready;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $workerName;
    protected $_name = [
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'ready' => 'Ready',
        'serviceName' => 'ServiceName',
        'sort' => 'Sort',
        'status' => 'Status',
        'workerName' => 'WorkerName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->ready) {
            $res['Ready'] = $this->ready;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->workerName) {
            $res['WorkerName'] = $this->workerName;
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
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Ready'])) {
            $model->ready = $map['Ready'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['WorkerName'])) {
            $model->workerName = $map['WorkerName'];
        }

        return $model;
    }
}
