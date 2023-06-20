<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Tea\Model;

class DescribeApiMeteringRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example cmapi0004****
     *
     * @var string
     */
    public $productCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'pageNum'     => 'pageNum',
        'productCode' => 'productCode',
        'type'        => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNum) {
            $res['pageNum'] = $this->pageNum;
        }
        if (null !== $this->productCode) {
            $res['productCode'] = $this->productCode;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiMeteringRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pageNum'])) {
            $model->pageNum = $map['pageNum'];
        }
        if (isset($map['productCode'])) {
            $model->productCode = $map['productCode'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
