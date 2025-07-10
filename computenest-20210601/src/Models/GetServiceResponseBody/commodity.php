<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody\commodity\cssMetadata;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody\commodity\marketplaceMetadata;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody\commodity\specifications;

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
     * @var cssMetadata
     */
    public $cssMetadata;

    /**
     * @var string
     */
    public $deployPage;

    /**
     * @var marketplaceMetadata
     */
    public $marketplaceMetadata;

    /**
     * @var string[][]
     */
    public $orderTime;

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
        'chargeType' => 'ChargeType',
        'commodityCode' => 'CommodityCode',
        'cssMetadata' => 'CssMetadata',
        'deployPage' => 'DeployPage',
        'marketplaceMetadata' => 'MarketplaceMetadata',
        'orderTime' => 'OrderTime',
        'saasBoostMetadata' => 'SaasBoostMetadata',
        'specifications' => 'Specifications',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->cssMetadata) {
            $this->cssMetadata->validate();
        }
        if (null !== $this->marketplaceMetadata) {
            $this->marketplaceMetadata->validate();
        }
        if (\is_array($this->orderTime)) {
            Model::validateArray($this->orderTime);
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

        if (null !== $this->cssMetadata) {
            $res['CssMetadata'] = null !== $this->cssMetadata ? $this->cssMetadata->toArray($noStream) : $this->cssMetadata;
        }

        if (null !== $this->deployPage) {
            $res['DeployPage'] = $this->deployPage;
        }

        if (null !== $this->marketplaceMetadata) {
            $res['MarketplaceMetadata'] = null !== $this->marketplaceMetadata ? $this->marketplaceMetadata->toArray($noStream) : $this->marketplaceMetadata;
        }

        if (null !== $this->orderTime) {
            if (\is_array($this->orderTime)) {
                $res['OrderTime'] = [];
                foreach ($this->orderTime as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['OrderTime'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['OrderTime'][$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (null !== $this->saasBoostMetadata) {
            $res['SaasBoostMetadata'] = $this->saasBoostMetadata;
        }

        if (null !== $this->specifications) {
            if (\is_array($this->specifications)) {
                $res['Specifications'] = [];
                $n1 = 0;
                foreach ($this->specifications as $item1) {
                    $res['Specifications'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (isset($map['CssMetadata'])) {
            $model->cssMetadata = cssMetadata::fromMap($map['CssMetadata']);
        }

        if (isset($map['DeployPage'])) {
            $model->deployPage = $map['DeployPage'];
        }

        if (isset($map['MarketplaceMetadata'])) {
            $model->marketplaceMetadata = marketplaceMetadata::fromMap($map['MarketplaceMetadata']);
        }

        if (isset($map['OrderTime'])) {
            if (!empty($map['OrderTime'])) {
                $model->orderTime = [];
                foreach ($map['OrderTime'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->orderTime[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->orderTime[$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (isset($map['SaasBoostMetadata'])) {
            $model->saasBoostMetadata = $map['SaasBoostMetadata'];
        }

        if (isset($map['Specifications'])) {
            if (!empty($map['Specifications'])) {
                $model->specifications = [];
                $n1 = 0;
                foreach ($map['Specifications'] as $item1) {
                    $model->specifications[$n1] = specifications::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
