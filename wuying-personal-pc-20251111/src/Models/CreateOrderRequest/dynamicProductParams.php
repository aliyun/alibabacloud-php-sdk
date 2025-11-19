<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\CreateOrderRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\CreateOrderRequest\dynamicProductParams\inputActivateConfig;

class dynamicProductParams extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $deliveryAddress;

    /**
     * @var string[]
     */
    public $dynamicAttributes;

    /**
     * @var inputActivateConfig
     */
    public $inputActivateConfig;

    /**
     * @var string[]
     */
    public $instanceIdList;

    /**
     * @var string
     */
    public $linkedResourceId;

    /**
     * @var string
     */
    public $packageCode;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productSkuCode;

    /**
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'amount' => 'Amount',
        'deliveryAddress' => 'DeliveryAddress',
        'dynamicAttributes' => 'DynamicAttributes',
        'inputActivateConfig' => 'InputActivateConfig',
        'instanceIdList' => 'InstanceIdList',
        'linkedResourceId' => 'LinkedResourceId',
        'packageCode' => 'PackageCode',
        'productCode' => 'ProductCode',
        'productSkuCode' => 'ProductSkuCode',
        'resourceId' => 'ResourceId',
    ];

    public function validate()
    {
        if (\is_array($this->dynamicAttributes)) {
            Model::validateArray($this->dynamicAttributes);
        }
        if (null !== $this->inputActivateConfig) {
            $this->inputActivateConfig->validate();
        }
        if (\is_array($this->instanceIdList)) {
            Model::validateArray($this->instanceIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->deliveryAddress) {
            $res['DeliveryAddress'] = $this->deliveryAddress;
        }

        if (null !== $this->dynamicAttributes) {
            if (\is_array($this->dynamicAttributes)) {
                $res['DynamicAttributes'] = [];
                foreach ($this->dynamicAttributes as $key1 => $value1) {
                    $res['DynamicAttributes'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->inputActivateConfig) {
            $res['InputActivateConfig'] = null !== $this->inputActivateConfig ? $this->inputActivateConfig->toArray($noStream) : $this->inputActivateConfig;
        }

        if (null !== $this->instanceIdList) {
            if (\is_array($this->instanceIdList)) {
                $res['InstanceIdList'] = [];
                $n1 = 0;
                foreach ($this->instanceIdList as $item1) {
                    $res['InstanceIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->linkedResourceId) {
            $res['LinkedResourceId'] = $this->linkedResourceId;
        }

        if (null !== $this->packageCode) {
            $res['PackageCode'] = $this->packageCode;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productSkuCode) {
            $res['ProductSkuCode'] = $this->productSkuCode;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['DeliveryAddress'])) {
            $model->deliveryAddress = $map['DeliveryAddress'];
        }

        if (isset($map['DynamicAttributes'])) {
            if (!empty($map['DynamicAttributes'])) {
                $model->dynamicAttributes = [];
                foreach ($map['DynamicAttributes'] as $key1 => $value1) {
                    $model->dynamicAttributes[$key1] = $value1;
                }
            }
        }

        if (isset($map['InputActivateConfig'])) {
            $model->inputActivateConfig = inputActivateConfig::fromMap($map['InputActivateConfig']);
        }

        if (isset($map['InstanceIdList'])) {
            if (!empty($map['InstanceIdList'])) {
                $model->instanceIdList = [];
                $n1 = 0;
                foreach ($map['InstanceIdList'] as $item1) {
                    $model->instanceIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LinkedResourceId'])) {
            $model->linkedResourceId = $map['LinkedResourceId'];
        }

        if (isset($map['PackageCode'])) {
            $model->packageCode = $map['PackageCode'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductSkuCode'])) {
            $model->productSkuCode = $map['ProductSkuCode'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
