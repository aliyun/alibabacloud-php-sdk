<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AddonMeta\environments;

use AlibabaCloud\Dara\Model;

class dependencies extends Model
{
    /**
     * @var string[]
     */
    public $clusterTypes;

    /**
     * @var bool[]
     */
    public $features;

    /**
     * @var string[]
     */
    public $services;
    protected $_name = [
        'clusterTypes' => 'clusterTypes',
        'features' => 'features',
        'services' => 'services',
    ];

    public function validate()
    {
        if (\is_array($this->clusterTypes)) {
            Model::validateArray($this->clusterTypes);
        }
        if (\is_array($this->features)) {
            Model::validateArray($this->features);
        }
        if (\is_array($this->services)) {
            Model::validateArray($this->services);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterTypes) {
            if (\is_array($this->clusterTypes)) {
                $res['clusterTypes'] = [];
                $n1 = 0;
                foreach ($this->clusterTypes as $item1) {
                    $res['clusterTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->features) {
            if (\is_array($this->features)) {
                $res['features'] = [];
                foreach ($this->features as $key1 => $value1) {
                    $res['features'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->services) {
            if (\is_array($this->services)) {
                $res['services'] = [];
                $n1 = 0;
                foreach ($this->services as $item1) {
                    $res['services'][$n1] = $item1;
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
        if (isset($map['clusterTypes'])) {
            if (!empty($map['clusterTypes'])) {
                $model->clusterTypes = [];
                $n1 = 0;
                foreach ($map['clusterTypes'] as $item1) {
                    $model->clusterTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['features'])) {
            if (!empty($map['features'])) {
                $model->features = [];
                foreach ($map['features'] as $key1 => $value1) {
                    $model->features[$key1] = $value1;
                }
            }
        }

        if (isset($map['services'])) {
            if (!empty($map['services'])) {
                $model->services = [];
                $n1 = 0;
                foreach ($map['services'] as $item1) {
                    $model->services[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
