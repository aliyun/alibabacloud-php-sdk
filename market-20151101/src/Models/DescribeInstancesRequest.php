<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $codes;

    /**
     * @var string
     */
    public $exceptCodes;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $productType;
    protected $_name = [
        'codes'       => 'Codes',
        'exceptCodes' => 'ExceptCodes',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'productType' => 'ProductType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codes) {
            $res['Codes'] = $this->codes;
        }
        if (null !== $this->exceptCodes) {
            $res['ExceptCodes'] = $this->exceptCodes;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Codes'])) {
            $model->codes = $map['Codes'];
        }
        if (isset($map['ExceptCodes'])) {
            $model->exceptCodes = $map['ExceptCodes'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        return $model;
    }
}
