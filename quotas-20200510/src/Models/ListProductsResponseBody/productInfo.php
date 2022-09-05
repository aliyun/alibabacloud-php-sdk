<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductsResponseBody;

use AlibabaCloud\Tea\Model;

class productInfo extends Model
{
    /**
     * @var string
     */
    public $commonQuotaSupport;

    /**
     * @var bool
     */
    public $dynamic;

    /**
     * @var string
     */
    public $flowControlSupport;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $productNameEn;

    /**
     * @var int
     */
    public $secondCategoryId;

    /**
     * @var string
     */
    public $secondCategoryName;

    /**
     * @var string
     */
    public $secondCategoryNameEn;
    protected $_name = [
        'commonQuotaSupport'   => 'CommonQuotaSupport',
        'dynamic'              => 'Dynamic',
        'flowControlSupport'   => 'FlowControlSupport',
        'productCode'          => 'ProductCode',
        'productName'          => 'ProductName',
        'productNameEn'        => 'ProductNameEn',
        'secondCategoryId'     => 'SecondCategoryId',
        'secondCategoryName'   => 'SecondCategoryName',
        'secondCategoryNameEn' => 'SecondCategoryNameEn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonQuotaSupport) {
            $res['CommonQuotaSupport'] = $this->commonQuotaSupport;
        }
        if (null !== $this->dynamic) {
            $res['Dynamic'] = $this->dynamic;
        }
        if (null !== $this->flowControlSupport) {
            $res['FlowControlSupport'] = $this->flowControlSupport;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->productNameEn) {
            $res['ProductNameEn'] = $this->productNameEn;
        }
        if (null !== $this->secondCategoryId) {
            $res['SecondCategoryId'] = $this->secondCategoryId;
        }
        if (null !== $this->secondCategoryName) {
            $res['SecondCategoryName'] = $this->secondCategoryName;
        }
        if (null !== $this->secondCategoryNameEn) {
            $res['SecondCategoryNameEn'] = $this->secondCategoryNameEn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommonQuotaSupport'])) {
            $model->commonQuotaSupport = $map['CommonQuotaSupport'];
        }
        if (isset($map['Dynamic'])) {
            $model->dynamic = $map['Dynamic'];
        }
        if (isset($map['FlowControlSupport'])) {
            $model->flowControlSupport = $map['FlowControlSupport'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['ProductNameEn'])) {
            $model->productNameEn = $map['ProductNameEn'];
        }
        if (isset($map['SecondCategoryId'])) {
            $model->secondCategoryId = $map['SecondCategoryId'];
        }
        if (isset($map['SecondCategoryName'])) {
            $model->secondCategoryName = $map['SecondCategoryName'];
        }
        if (isset($map['SecondCategoryNameEn'])) {
            $model->secondCategoryNameEn = $map['SecondCategoryNameEn'];
        }

        return $model;
    }
}
