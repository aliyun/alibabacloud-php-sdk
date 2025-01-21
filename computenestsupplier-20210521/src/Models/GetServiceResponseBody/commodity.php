<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity\cssMetadata;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity\marketplaceMetadata;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity\meteringEntities;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity\specifications;

class commodity extends Model
{
    /**
     * @var string
     */
    public $chargeType;
    /**
     * @var string
     */
    public $commodityCode;
    /**
     * @var string[]
     */
    public $components;
    /**
     * @var cssMetadata
     */
    public $cssMetadata;
    /**
     * @var marketplaceMetadata
     */
    public $marketplaceMetadata;
    /**
     * @var meteringEntities[]
     */
    public $meteringEntities;
    /**
     * @var string
     */
    public $saasBoostMetadata;
    /**
     * @var specifications[]
     */
    public $specifications;
    /**
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
        if (\is_array($this->components)) {
            Model::validateArray($this->components);
        }
        if (null !== $this->cssMetadata) {
            $this->cssMetadata->validate();
        }
        if (null !== $this->marketplaceMetadata) {
            $this->marketplaceMetadata->validate();
        }
        if (\is_array($this->meteringEntities)) {
            Model::validateArray($this->meteringEntities);
        }
        if (\is_array($this->specifications)) {
            Model::validateArray($this->specifications);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->components) {
            if (\is_array($this->components)) {
                $res['Components'] = [];
                $n1                = 0;
                foreach ($this->components as $item1) {
                    $res['Components'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->cssMetadata) {
            $res['CssMetadata'] = null !== $this->cssMetadata ? $this->cssMetadata->toArray($noStream) : $this->cssMetadata;
        }

        if (null !== $this->marketplaceMetadata) {
            $res['MarketplaceMetadata'] = null !== $this->marketplaceMetadata ? $this->marketplaceMetadata->toArray($noStream) : $this->marketplaceMetadata;
        }

        if (null !== $this->meteringEntities) {
            if (\is_array($this->meteringEntities)) {
                $res['MeteringEntities'] = [];
                $n1                      = 0;
                foreach ($this->meteringEntities as $item1) {
                    $res['MeteringEntities'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->saasBoostMetadata) {
            $res['SaasBoostMetadata'] = $this->saasBoostMetadata;
        }

        if (null !== $this->specifications) {
            if (\is_array($this->specifications)) {
                $res['Specifications'] = [];
                $n1                    = 0;
                foreach ($this->specifications as $item1) {
                    $res['Specifications'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->components = [];
                $n1                = 0;
                foreach ($map['Components'] as $item1) {
                    $model->components[$n1++] = $item1;
                }
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
                $n1                      = 0;
                foreach ($map['MeteringEntities'] as $item1) {
                    $model->meteringEntities[$n1++] = meteringEntities::fromMap($item1);
                }
            }
        }

        if (isset($map['SaasBoostMetadata'])) {
            $model->saasBoostMetadata = $map['SaasBoostMetadata'];
        }

        if (isset($map['Specifications'])) {
            if (!empty($map['Specifications'])) {
                $model->specifications = [];
                $n1                    = 0;
                foreach ($map['Specifications'] as $item1) {
                    $model->specifications[$n1++] = specifications::fromMap($item1);
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
