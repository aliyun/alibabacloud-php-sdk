<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models;

use AlibabaCloud\Dara\Model;

class ListServiceApplyRequest extends Model
{
    /**
     * @var string[]
     */
    public $applyType;

    /**
     * @var int
     */
    public $endDate;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $productCode;

    /**
     * @var int
     */
    public $startDate;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'applyType' => 'applyType',
        'endDate' => 'endDate',
        'pageNum' => 'pageNum',
        'pageSize' => 'pageSize',
        'productCode' => 'productCode',
        'startDate' => 'startDate',
        'status' => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->applyType)) {
            Model::validateArray($this->applyType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyType) {
            if (\is_array($this->applyType)) {
                $res['applyType'] = [];
                $n1 = 0;
                foreach ($this->applyType as $item1) {
                    $res['applyType'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }

        if (null !== $this->pageNum) {
            $res['pageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->productCode) {
            $res['productCode'] = $this->productCode;
        }

        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['applyType'])) {
            if (!empty($map['applyType'])) {
                $model->applyType = [];
                $n1 = 0;
                foreach ($map['applyType'] as $item1) {
                    $model->applyType[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }

        if (isset($map['pageNum'])) {
            $model->pageNum = $map['pageNum'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['productCode'])) {
            $model->productCode = $map['productCode'];
        }

        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
