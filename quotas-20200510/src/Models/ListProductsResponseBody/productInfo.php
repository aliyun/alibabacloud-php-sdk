<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductsResponseBody;

use AlibabaCloud\Tea\Model;

class productInfo extends Model
{
    /**
     * @description Indicates whether the Alibaba Cloud service supports general quotas. Valid values:
     *
     *   support: The Alibaba Cloud service supports general quotas.
     *   unsupport: The Alibaba Cloud service does not support general quotas.
     *
     * @example support
     *
     * @var string
     */
    public $commonQuotaSupport;

    /**
     * @description Indicates whether the Alibaba Cloud service supports dynamic quota adjustment. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $dynamic;

    /**
     * @description Indicates whether the Alibaba Cloud service supports API rate limits. Valid values:
     *
     *   support: The Alibaba Cloud service supports API rate limits.
     *   unsupport: The Alibaba Cloud service does not support API rate limits.
     *
     * @example unsupport
     *
     * @var string
     */
    public $flowControlSupport;

    /**
     * @description The abbreviation of the Alibaba Cloud service name.
     *
     * @example ecs
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The name of the Alibaba Cloud service.
     *
     * @example Elastic Compute Service (ECS)
     *
     * @var string
     */
    public $productName;

    /**
     * @description The English name of the Alibaba Cloud service.
     *
     * @example Elastic Compute Service
     *
     * @var string
     */
    public $productNameEn;

    /**
     * @description The ID of the service category.
     *
     * @example 5
     *
     * @var int
     */
    public $secondCategoryId;

    /**
     * @description The name of the service category.
     *
     * @example Elastic Compute
     *
     * @var string
     */
    public $secondCategoryName;

    /**
     * @description The English name of the service category.
     *
     * @example Elastic Compute
     *
     * @var string
     */
    public $secondCategoryNameEn;

    /**
     * @description Indicates whether the Alibaba Cloud service supports whitelist quotas. Valid values:
     *
     *   support: The Alibaba Cloud service supports whitelist quotas.
     *   unsupport: The Alibaba Cloud service does not support whitelist quotas.
     *
     * @example support
     *
     * @var string
     */
    public $whiteListLabelQuotaSupport;
    protected $_name = [
        'commonQuotaSupport'         => 'CommonQuotaSupport',
        'dynamic'                    => 'Dynamic',
        'flowControlSupport'         => 'FlowControlSupport',
        'productCode'                => 'ProductCode',
        'productName'                => 'ProductName',
        'productNameEn'              => 'ProductNameEn',
        'secondCategoryId'           => 'SecondCategoryId',
        'secondCategoryName'         => 'SecondCategoryName',
        'secondCategoryNameEn'       => 'SecondCategoryNameEn',
        'whiteListLabelQuotaSupport' => 'WhiteListLabelQuotaSupport',
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
        if (null !== $this->whiteListLabelQuotaSupport) {
            $res['WhiteListLabelQuotaSupport'] = $this->whiteListLabelQuotaSupport;
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
        if (isset($map['WhiteListLabelQuotaSupport'])) {
            $model->whiteListLabelQuotaSupport = $map['WhiteListLabelQuotaSupport'];
        }

        return $model;
    }
}
