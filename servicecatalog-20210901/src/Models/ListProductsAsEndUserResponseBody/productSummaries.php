<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProductsAsEndUserResponseBody;

use AlibabaCloud\Tea\Model;

class productSummaries extends Model
{
    /**
     * @description The time when the product was created.
     *
     * The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     * @example 2022-04-12T06:10:37Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the product.
     *
     * @example The description of the product.
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the default launch option exists. Valid values:
     *
     *   true: The default launch option exists. In this case, the PortfolioId parameter is not required when the product is launched or when the information about the product instance is updated.
     *   false: The default launch option does not exist. In this case, the PortfolioId parameter is required when the product is launched or when the information about the product instance is updated. For more information about how to obtain the value of the PortfolioId parameter, see [ListLaunchOptions](~~ListLaunchOptions~~).
     *
     * > If the product is added to only one product portfolio, the default launch option exists. If the product is added to multiple product portfolios, multiple launch options exist at the same time. However, no default launch options exist.
     * @example true
     *
     * @var bool
     */
    public $hasDefaultLaunchOption;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the product.
     *
     * @example acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****
     *
     * @var string
     */
    public $productArn;

    /**
     * @description The ID of the product.
     *
     * @example prod-bp18r7q127****
     *
     * @var string
     */
    public $productId;

    /**
     * @description The name of the product.
     *
     * @example DEMO-Create an ECS instance
     *
     * @var string
     */
    public $productName;

    /**
     * @description The type of the product.
     *
     * The value is fixed as Ros, which indicates Resource Orchestration Service (ROS).
     * @example Ros
     *
     * @var string
     */
    public $productType;

    /**
     * @description The provider of the product.
     *
     * @example IT team
     *
     * @var string
     */
    public $providerName;
    protected $_name = [
        'createTime'             => 'CreateTime',
        'description'            => 'Description',
        'hasDefaultLaunchOption' => 'HasDefaultLaunchOption',
        'productArn'             => 'ProductArn',
        'productId'              => 'ProductId',
        'productName'            => 'ProductName',
        'productType'            => 'ProductType',
        'providerName'           => 'ProviderName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->hasDefaultLaunchOption) {
            $res['HasDefaultLaunchOption'] = $this->hasDefaultLaunchOption;
        }
        if (null !== $this->productArn) {
            $res['ProductArn'] = $this->productArn;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->providerName) {
            $res['ProviderName'] = $this->providerName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productSummaries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HasDefaultLaunchOption'])) {
            $model->hasDefaultLaunchOption = $map['HasDefaultLaunchOption'];
        }
        if (isset($map['ProductArn'])) {
            $model->productArn = $map['ProductArn'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['ProviderName'])) {
            $model->providerName = $map['ProviderName'];
        }

        return $model;
    }
}
