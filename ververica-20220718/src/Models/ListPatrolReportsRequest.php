<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class ListPatrolReportsRequest extends Model
{
    /**
     * @var int
     */
    public $endDate;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $scopeType;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $startDate;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'endDate' => 'endDate',
        'page' => 'page',
        'scopeType' => 'scopeType',
        'size' => 'size',
        'startDate' => 'startDate',
        'status' => 'status',
        'triggerType' => 'triggerType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->scopeType) {
            $res['scopeType'] = $this->scopeType;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->triggerType) {
            $res['triggerType'] = $this->triggerType;
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
        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['scopeType'])) {
            $model->scopeType = $map['scopeType'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['triggerType'])) {
            $model->triggerType = $map['triggerType'];
        }

        return $model;
    }
}
