<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\resourceCleaner;

use AlibabaCloud\Dara\Model;

class supportedResourceTypes extends Model
{
    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string[]
     */
    public $sideEffects;

    /**
     * @var string[]
     */
    public $supportedFilters;
    protected $_name = [
        'resourceType' => 'ResourceType',
        'sideEffects' => 'SideEffects',
        'supportedFilters' => 'SupportedFilters',
    ];

    public function validate()
    {
        if (\is_array($this->sideEffects)) {
            Model::validateArray($this->sideEffects);
        }
        if (\is_array($this->supportedFilters)) {
            Model::validateArray($this->supportedFilters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->sideEffects) {
            if (\is_array($this->sideEffects)) {
                $res['SideEffects'] = [];
                $n1 = 0;
                foreach ($this->sideEffects as $item1) {
                    $res['SideEffects'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->supportedFilters) {
            if (\is_array($this->supportedFilters)) {
                $res['SupportedFilters'] = [];
                $n1 = 0;
                foreach ($this->supportedFilters as $item1) {
                    $res['SupportedFilters'][$n1] = $item1;
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
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['SideEffects'])) {
            if (!empty($map['SideEffects'])) {
                $model->sideEffects = [];
                $n1 = 0;
                foreach ($map['SideEffects'] as $item1) {
                    $model->sideEffects[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SupportedFilters'])) {
            if (!empty($map['SupportedFilters'])) {
                $model->supportedFilters = [];
                $n1 = 0;
                foreach ($map['SupportedFilters'] as $item1) {
                    $model->supportedFilters[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
