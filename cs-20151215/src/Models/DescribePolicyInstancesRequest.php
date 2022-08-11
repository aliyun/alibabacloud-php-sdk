<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribePolicyInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $policyName;
    protected $_name = [
        'instanceName' => 'instance_name',
        'policyName'   => 'policy_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['instance_name'] = $this->instanceName;
        }
        if (null !== $this->policyName) {
            $res['policy_name'] = $this->policyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePolicyInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instance_name'])) {
            $model->instanceName = $map['instance_name'];
        }
        if (isset($map['policy_name'])) {
            $model->policyName = $map['policy_name'];
        }

        return $model;
    }
}
