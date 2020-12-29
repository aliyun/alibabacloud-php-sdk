<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone;

use AlibabaCloud\Tea\Model;

class dedicatedHostGenerations extends Model
{
    /**
     * @var string[]
     */
    public $dedicatedHostGeneration;
    protected $_name = [
        'dedicatedHostGeneration' => 'DedicatedHostGeneration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostGeneration) {
            $res['DedicatedHostGeneration'] = $this->dedicatedHostGeneration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHostGenerations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostGeneration'])) {
            if (!empty($map['DedicatedHostGeneration'])) {
                $model->dedicatedHostGeneration = $map['DedicatedHostGeneration'];
            }
        }

        return $model;
    }
}
