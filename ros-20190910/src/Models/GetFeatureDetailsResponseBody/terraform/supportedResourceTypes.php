<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\terraform;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\terraform\supportedResourceTypes\stackOperationRisk;

class supportedResourceTypes extends Model
{
    /**
     * @var string[]
     */
    public $customTag;

    /**
     * @var string[]
     */
    public $estimateCost;

    /**
     * @var string[]
     */
    public $resourceGroup;

    /**
     * @var stackOperationRisk
     */
    public $stackOperationRisk;

    /**
     * @var string[]
     */
    public $systemTag;
    protected $_name = [
        'customTag' => 'CustomTag',
        'estimateCost' => 'EstimateCost',
        'resourceGroup' => 'ResourceGroup',
        'stackOperationRisk' => 'StackOperationRisk',
        'systemTag' => 'SystemTag',
    ];

    public function validate()
    {
        if (\is_array($this->customTag)) {
            Model::validateArray($this->customTag);
        }
        if (\is_array($this->estimateCost)) {
            Model::validateArray($this->estimateCost);
        }
        if (\is_array($this->resourceGroup)) {
            Model::validateArray($this->resourceGroup);
        }
        if (null !== $this->stackOperationRisk) {
            $this->stackOperationRisk->validate();
        }
        if (\is_array($this->systemTag)) {
            Model::validateArray($this->systemTag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customTag) {
            if (\is_array($this->customTag)) {
                $res['CustomTag'] = [];
                $n1 = 0;
                foreach ($this->customTag as $item1) {
                    $res['CustomTag'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->estimateCost) {
            if (\is_array($this->estimateCost)) {
                $res['EstimateCost'] = [];
                $n1 = 0;
                foreach ($this->estimateCost as $item1) {
                    $res['EstimateCost'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceGroup) {
            if (\is_array($this->resourceGroup)) {
                $res['ResourceGroup'] = [];
                $n1 = 0;
                foreach ($this->resourceGroup as $item1) {
                    $res['ResourceGroup'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->stackOperationRisk) {
            $res['StackOperationRisk'] = null !== $this->stackOperationRisk ? $this->stackOperationRisk->toArray($noStream) : $this->stackOperationRisk;
        }

        if (null !== $this->systemTag) {
            if (\is_array($this->systemTag)) {
                $res['SystemTag'] = [];
                $n1 = 0;
                foreach ($this->systemTag as $item1) {
                    $res['SystemTag'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CustomTag'])) {
            if (!empty($map['CustomTag'])) {
                $model->customTag = [];
                $n1 = 0;
                foreach ($map['CustomTag'] as $item1) {
                    $model->customTag[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EstimateCost'])) {
            if (!empty($map['EstimateCost'])) {
                $model->estimateCost = [];
                $n1 = 0;
                foreach ($map['EstimateCost'] as $item1) {
                    $model->estimateCost[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceGroup'])) {
            if (!empty($map['ResourceGroup'])) {
                $model->resourceGroup = [];
                $n1 = 0;
                foreach ($map['ResourceGroup'] as $item1) {
                    $model->resourceGroup[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StackOperationRisk'])) {
            $model->stackOperationRisk = stackOperationRisk::fromMap($map['StackOperationRisk']);
        }

        if (isset($map['SystemTag'])) {
            if (!empty($map['SystemTag'])) {
                $model->systemTag = [];
                $n1 = 0;
                foreach ($map['SystemTag'] as $item1) {
                    $model->systemTag[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
