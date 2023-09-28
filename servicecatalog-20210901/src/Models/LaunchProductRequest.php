<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\LaunchProductRequest\parameters;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\LaunchProductRequest\tags;
use AlibabaCloud\Tea\Model;

class LaunchProductRequest extends Model
{
    /**
     * @description The input parameters of the template.
     *
     * > This parameter is optional. If you specify the Parameters parameter, you must specify the ParameterKey and ParameterValue parameters.
     * @var parameters[]
     */
    public $parameters;

    /**
     * @description The ID of the product portfolio.
     *
     * > If the PortfolioId parameter is not required, you do not need to specify the PortfolioId parameter. If the PortfolioId parameter is required, you must specify the PortfolioId parameter. For more information about how to obtain the value of the PortfolioId parameter, see [ListLaunchOptions](~~ListLaunchOptions~~).
     * @example port-bp1yt7582g****
     *
     * @var string
     */
    public $portfolioId;

    /**
     * @description The ID of the product.
     *
     * @example prod-bp18r7q127****
     *
     * @var string
     */
    public $productId;

    /**
     * @description The ID of the product version.
     *
     * @example pv-bp15e79d26****
     *
     * @var string
     */
    public $productVersionId;

    /**
     * @description The name of the product instance.
     *
     * The value must be 1 to 128 characters in length.
     * @example DEMO-ECS instance
     *
     * @var string
     */
    public $provisionedProductName;

    /**
     * @description The ID of the region to which the Resource Orchestration Service (ROS) stack belongs.
     *
     * For more information about how to obtain the regions that are supported by ROS, see [DescribeRegions](~~131035~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $stackRegionId;

    /**
     * @description The custom tags that are specified by the end user.
     *
     * >
     *
     *   The Tags parameter is optional. If you specify the Tags parameter, you must specify the Tags.N.Key and Tags.N.Value parameters.
     *
     *   The tag is propagated to each stack resource that supports the tag feature.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'parameters'             => 'Parameters',
        'portfolioId'            => 'PortfolioId',
        'productId'              => 'ProductId',
        'productVersionId'       => 'ProductVersionId',
        'provisionedProductName' => 'ProvisionedProductName',
        'stackRegionId'          => 'StackRegionId',
        'tags'                   => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameters) {
            $res['Parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->portfolioId) {
            $res['PortfolioId'] = $this->portfolioId;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->productVersionId) {
            $res['ProductVersionId'] = $this->productVersionId;
        }
        if (null !== $this->provisionedProductName) {
            $res['ProvisionedProductName'] = $this->provisionedProductName;
        }
        if (null !== $this->stackRegionId) {
            $res['StackRegionId'] = $this->stackRegionId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LaunchProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n                 = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PortfolioId'])) {
            $model->portfolioId = $map['PortfolioId'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['ProductVersionId'])) {
            $model->productVersionId = $map['ProductVersionId'];
        }
        if (isset($map['ProvisionedProductName'])) {
            $model->provisionedProductName = $map['ProvisionedProductName'];
        }
        if (isset($map['StackRegionId'])) {
            $model->stackRegionId = $map['StackRegionId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
