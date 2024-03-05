<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models;

use AlibabaCloud\Tea\Model;

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
        'applyType'   => 'applyType',
        'endDate'     => 'endDate',
        'pageNum'     => 'pageNum',
        'pageSize'    => 'pageSize',
        'productCode' => 'productCode',
        'startDate'   => 'startDate',
        'status'      => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyType) {
            $res['applyType'] = $this->applyType;
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

    /**
     * @param array $map
     *
     * @return ListServiceApplyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['applyType'])) {
            if (!empty($map['applyType'])) {
                $model->applyType = $map['applyType'];
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
