<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeApiMeteringResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 102277855749****
     *
     * @var int
     */
    public $aliyunPk;

    /**
     * @example cmapi0004****
     *
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productName;

    /**
     * @example 98
     *
     * @var int
     */
    public $totalQuota;

    /**
     * @example 220
     *
     * @var int
     */
    public $totalUsage;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'aliyunPk'    => 'AliyunPk',
        'productCode' => 'ProductCode',
        'productName' => 'ProductName',
        'totalQuota'  => 'TotalQuota',
        'totalUsage'  => 'TotalUsage',
        'unit'        => 'Unit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunPk) {
            $res['AliyunPk'] = $this->aliyunPk;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->totalQuota) {
            $res['TotalQuota'] = $this->totalQuota;
        }
        if (null !== $this->totalUsage) {
            $res['TotalUsage'] = $this->totalUsage;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunPk'])) {
            $model->aliyunPk = $map['AliyunPk'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['TotalQuota'])) {
            $model->totalQuota = $map['TotalQuota'];
        }
        if (isset($map['TotalUsage'])) {
            $model->totalUsage = $map['TotalUsage'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
