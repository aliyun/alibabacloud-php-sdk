<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ListDeploymentsRequest extends Model
{
    /**
     * @var string[]
     */
    public $excludeStatus;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $orderDirection;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $serviceGroupId;

    /**
     * @var string[]
     */
    public $status;
    protected $_name = [
        'excludeStatus' => 'excludeStatus',
        'orderBy' => 'orderBy',
        'orderDirection' => 'orderDirection',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'serviceGroupId' => 'serviceGroupId',
        'status' => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->excludeStatus)) {
            Model::validateArray($this->excludeStatus);
        }
        if (\is_array($this->status)) {
            Model::validateArray($this->status);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->excludeStatus) {
            if (\is_array($this->excludeStatus)) {
                $res['excludeStatus'] = [];
                $n1 = 0;
                foreach ($this->excludeStatus as $item1) {
                    $res['excludeStatus'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orderBy) {
            $res['orderBy'] = $this->orderBy;
        }

        if (null !== $this->orderDirection) {
            $res['orderDirection'] = $this->orderDirection;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
        }

        if (null !== $this->status) {
            if (\is_array($this->status)) {
                $res['status'] = [];
                $n1 = 0;
                foreach ($this->status as $item1) {
                    $res['status'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['excludeStatus'])) {
            if (!empty($map['excludeStatus'])) {
                $model->excludeStatus = [];
                $n1 = 0;
                foreach ($map['excludeStatus'] as $item1) {
                    $model->excludeStatus[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['orderBy'])) {
            $model->orderBy = $map['orderBy'];
        }

        if (isset($map['orderDirection'])) {
            $model->orderDirection = $map['orderDirection'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }

        if (isset($map['status'])) {
            if (!empty($map['status'])) {
                $model->status = [];
                $n1 = 0;
                foreach ($map['status'] as $item1) {
                    $model->status[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
