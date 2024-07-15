<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity\cssMetadata;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity\marketplaceMetadata;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity\meteringEntities;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity\specifications;
use AlibabaCloud\Tea\Model;

class commodity extends Model
{
    /**
     * @description The billing method of the service. Valid values:
     *
     *   **PREPAY** (default): subscription.
     *   **POSTPAY**: pay-as-you-go.
     *
     * @example PREPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The commodity code of the service in Alibaba Cloud Marketplace.
     *
     * @example cmjj00xxxx
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The commodity modules.
     *
     * @var string[]
     */
    public $components;

    /**
     * @description The configuration metadata related to Lingxiao.
     *
     * @var cssMetadata
     */
    public $cssMetadata;

    /**
     * @description The metadata of Alibaba Cloud Marketplace.
     *
     * @var marketplaceMetadata
     */
    public $marketplaceMetadata;

    /**
     * @description The information about the billable item.
     *
     * @var meteringEntities[]
     */
    public $meteringEntities;

    /**
     * @description The configuration metadata related to Saas Boost.
     *
     * @example { "Enabled":false // The public endpoint of the SaaS Boost instance. "PublicAccessUrl":"https://example.com" }
     *
     * @var string
     */
    public $saasBoostMetadata;

    /**
     * @description The specification details of the service in Alibaba Cloud Marketplace.
     *
     * @var specifications[]
     */
    public $specifications;

    /**
     * @description The service type. Valid values:
     *
     *   marketplace: Alibaba Cloud Marketplace.
     *   Css: Lingxiao.
     *
     * @example Marketplace
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'chargeType'          => 'ChargeType',
        'commodityCode'       => 'CommodityCode',
        'components'          => 'Components',
        'cssMetadata'         => 'CssMetadata',
        'marketplaceMetadata' => 'MarketplaceMetadata',
        'meteringEntities'    => 'MeteringEntities',
        'saasBoostMetadata'   => 'SaasBoostMetadata',
        'specifications'      => 'Specifications',
        'type'                => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->components) {
            $res['Components'] = $this->components;
        }
        if (null !== $this->cssMetadata) {
            $res['CssMetadata'] = null !== $this->cssMetadata ? $this->cssMetadata->toMap() : null;
        }
        if (null !== $this->marketplaceMetadata) {
            $res['MarketplaceMetadata'] = null !== $this->marketplaceMetadata ? $this->marketplaceMetadata->toMap() : null;
        }
        if (null !== $this->meteringEntities) {
            $res['MeteringEntities'] = [];
            if (null !== $this->meteringEntities && \is_array($this->meteringEntities)) {
                $n = 0;
                foreach ($this->meteringEntities as $item) {
                    $res['MeteringEntities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->saasBoostMetadata) {
            $res['SaasBoostMetadata'] = $this->saasBoostMetadata;
        }
        if (null !== $this->specifications) {
            $res['Specifications'] = [];
            if (null !== $this->specifications && \is_array($this->specifications)) {
                $n = 0;
                foreach ($this->specifications as $item) {
                    $res['Specifications'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commodity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['Components'])) {
            if (!empty($map['Components'])) {
                $model->components = $map['Components'];
            }
        }
        if (isset($map['CssMetadata'])) {
            $model->cssMetadata = cssMetadata::fromMap($map['CssMetadata']);
        }
        if (isset($map['MarketplaceMetadata'])) {
            $model->marketplaceMetadata = marketplaceMetadata::fromMap($map['MarketplaceMetadata']);
        }
        if (isset($map['MeteringEntities'])) {
            if (!empty($map['MeteringEntities'])) {
                $model->meteringEntities = [];
                $n                       = 0;
                foreach ($map['MeteringEntities'] as $item) {
                    $model->meteringEntities[$n++] = null !== $item ? meteringEntities::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SaasBoostMetadata'])) {
            $model->saasBoostMetadata = $map['SaasBoostMetadata'];
        }
        if (isset($map['Specifications'])) {
            if (!empty($map['Specifications'])) {
                $model->specifications = [];
                $n                     = 0;
                foreach ($map['Specifications'] as $item) {
                    $model->specifications[$n++] = null !== $item ? specifications::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
