<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class DescribePackageStateResponseBody extends Model
{
    /**
     * @var int
     */
    public $issuedCount;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $usedCount;
    protected $_name = [
        'issuedCount' => 'IssuedCount',
        'productCode' => 'ProductCode',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
        'usedCount'   => 'UsedCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->issuedCount) {
            $res['IssuedCount'] = $this->issuedCount;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->usedCount) {
            $res['UsedCount'] = $this->usedCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePackageStateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IssuedCount'])) {
            $model->issuedCount = $map['IssuedCount'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['UsedCount'])) {
            $model->usedCount = $map['UsedCount'];
        }

        return $model;
    }
}
