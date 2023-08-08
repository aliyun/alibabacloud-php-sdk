<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyInstancesStatusResponseBody\policyInstances;
use AlibabaCloud\Tea\Model;

class DescribePolicyInstancesStatusResponseBody extends Model
{
    /**
     * @description Information about the number of policy instances of each severity level.
     *
     * @example { "high": 11,     "medium": 1  }
     *
     * @var mixed[]
     */
    public $instancesSeverityCount;

    /**
     * @description Details about policy instances of different types.
     *
     * @var policyInstances[]
     */
    public $policyInstances;
    protected $_name = [
        'instancesSeverityCount' => 'instances_severity_count',
        'policyInstances'        => 'policy_instances',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instancesSeverityCount) {
            $res['instances_severity_count'] = $this->instancesSeverityCount;
        }
        if (null !== $this->policyInstances) {
            $res['policy_instances'] = [];
            if (null !== $this->policyInstances && \is_array($this->policyInstances)) {
                $n = 0;
                foreach ($this->policyInstances as $item) {
                    $res['policy_instances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePolicyInstancesStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instances_severity_count'])) {
            $model->instancesSeverityCount = $map['instances_severity_count'];
        }
        if (isset($map['policy_instances'])) {
            if (!empty($map['policy_instances'])) {
                $model->policyInstances = [];
                $n                      = 0;
                foreach ($map['policy_instances'] as $item) {
                    $model->policyInstances[$n++] = null !== $item ? policyInstances::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
