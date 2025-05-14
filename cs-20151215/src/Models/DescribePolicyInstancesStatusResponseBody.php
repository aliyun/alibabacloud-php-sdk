<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyInstancesStatusResponseBody\policyInstances;

class DescribePolicyInstancesStatusResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $instancesSeverityCount;

    /**
     * @var policyInstances[]
     */
    public $policyInstances;
    protected $_name = [
        'instancesSeverityCount' => 'instances_severity_count',
        'policyInstances' => 'policy_instances',
    ];

    public function validate()
    {
        if (\is_array($this->instancesSeverityCount)) {
            Model::validateArray($this->instancesSeverityCount);
        }
        if (\is_array($this->policyInstances)) {
            Model::validateArray($this->policyInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instancesSeverityCount) {
            if (\is_array($this->instancesSeverityCount)) {
                $res['instances_severity_count'] = [];
                foreach ($this->instancesSeverityCount as $key1 => $value1) {
                    $res['instances_severity_count'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->policyInstances) {
            if (\is_array($this->policyInstances)) {
                $res['policy_instances'] = [];
                $n1 = 0;
                foreach ($this->policyInstances as $item1) {
                    $res['policy_instances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['instances_severity_count'])) {
            if (!empty($map['instances_severity_count'])) {
                $model->instancesSeverityCount = [];
                foreach ($map['instances_severity_count'] as $key1 => $value1) {
                    $model->instancesSeverityCount[$key1] = $value1;
                }
            }
        }

        if (isset($map['policy_instances'])) {
            if (!empty($map['policy_instances'])) {
                $model->policyInstances = [];
                $n1 = 0;
                foreach ($map['policy_instances'] as $item1) {
                    $model->policyInstances[$n1++] = policyInstances::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
