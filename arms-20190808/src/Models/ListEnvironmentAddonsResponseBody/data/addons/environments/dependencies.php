<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentAddonsResponseBody\data\addons\environments;

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
        'clusterTypes' => 'ClusterTypes',
        'features'     => 'Features',
        'services'     => 'Services',
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
                $res['ClusterTypes'] = [];
                $n1                  = 0;
                foreach ($this->clusterTypes as $item1) {
                    $res['ClusterTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->features) {
            if (\is_array($this->features)) {
                $res['Features'] = [];
                foreach ($this->features as $key1 => $value1) {
                    $res['Features'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->services) {
            if (\is_array($this->services)) {
                $res['Services'] = [];
                $n1              = 0;
                foreach ($this->services as $item1) {
                    $res['Services'][$n1++] = $item1;
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
        if (isset($map['ClusterTypes'])) {
            if (!empty($map['ClusterTypes'])) {
                $model->clusterTypes = [];
                $n1                  = 0;
                foreach ($map['ClusterTypes'] as $item1) {
                    $model->clusterTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Features'])) {
            if (!empty($map['Features'])) {
                $model->features = [];
                foreach ($map['Features'] as $key1 => $value1) {
                    $model->features[$key1] = $value1;
                }
            }
        }

        if (isset($map['Services'])) {
            if (!empty($map['Services'])) {
                $model->services = [];
                $n1              = 0;
                foreach ($map['Services'] as $item1) {
                    $model->services[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
