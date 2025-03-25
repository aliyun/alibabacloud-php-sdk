<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAvailableResourcesResponseBody\availableZones;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAvailableResourcesResponseBody\availableZones\supportedEngines\availableResources;

class supportedEngines extends Model
{
    /**
     * @var availableResources[]
     */
    public $availableResources;

    /**
     * @var string
     */
    public $engine;
    protected $_name = [
        'availableResources' => 'AvailableResources',
        'engine' => 'Engine',
    ];

    public function validate()
    {
        if (\is_array($this->availableResources)) {
            Model::validateArray($this->availableResources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableResources) {
            if (\is_array($this->availableResources)) {
                $res['AvailableResources'] = [];
                $n1 = 0;
                foreach ($this->availableResources as $item1) {
                    $res['AvailableResources'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
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
        if (isset($map['AvailableResources'])) {
            if (!empty($map['AvailableResources'])) {
                $model->availableResources = [];
                $n1 = 0;
                foreach ($map['AvailableResources'] as $item1) {
                    $model->availableResources[$n1++] = availableResources::fromMap($item1);
                }
            }
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        return $model;
    }
}
