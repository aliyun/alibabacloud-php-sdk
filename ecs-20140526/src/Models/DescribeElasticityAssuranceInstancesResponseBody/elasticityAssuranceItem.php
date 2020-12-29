<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssuranceInstancesResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssuranceInstancesResponseBody\elasticityAssuranceItem\instanceIdSet;
use AlibabaCloud\Tea\Model;

class elasticityAssuranceItem extends Model
{
    /**
     * @var instanceIdSet[]
     */
    public $instanceIdSet;
    protected $_name = [
        'instanceIdSet' => 'InstanceIdSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIdSet) {
            $res['InstanceIdSet'] = [];
            if (null !== $this->instanceIdSet && \is_array($this->instanceIdSet)) {
                $n = 0;
                foreach ($this->instanceIdSet as $item) {
                    $res['InstanceIdSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elasticityAssuranceItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIdSet'])) {
            if (!empty($map['InstanceIdSet'])) {
                $model->instanceIdSet = [];
                $n                    = 0;
                foreach ($map['InstanceIdSet'] as $item) {
                    $model->instanceIdSet[$n++] = null !== $item ? instanceIdSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
