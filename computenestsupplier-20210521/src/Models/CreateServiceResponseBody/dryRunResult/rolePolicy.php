<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceResponseBody\dryRunResult;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceResponseBody\dryRunResult\rolePolicy\missingPolicy;
use AlibabaCloud\Tea\Model;

class rolePolicy extends Model
{
    /**
     * @description The missing ram policy for deploying role.
     *
     * @var missingPolicy[]
     */
    public $missingPolicy;

    /**
     * @description The required ram policy for deploying role.
     *
     * @example {
     * "Statement": [{
     * "Action": ["oos:CancelExecutions", "oos:DeleteExecutions", "oos:GetTemplate", "oos:ListExecutions", "oos:ListTemplates", "oos:NotifyExecution", "oos:StartExecution"],
     * "Effect": "Allow",
     * "Resource": "*"
     * }, {
     * "Action": ["ram:PassRole"],
     * "Effect": "Allow",
     * "Resource": "*"
     * }, {
     * "Action": ["ros:CreateStack", "ros:GetStack", "ros:UpdateStack", "ros:ListStackEvents", "ros:ListStackResources", "ros:ListStackResources", "ros:DeleteStack", "ram:GetRole"],
     * "Effect": "Allow",
     * "Resource": "*"
     * }],
     * "Version": "1"
     * }
     *
     * @var string
     */
    public $policy;
    protected $_name = [
        'missingPolicy' => 'MissingPolicy',
        'policy' => 'Policy',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->missingPolicy) {
            $res['MissingPolicy'] = [];
            if (null !== $this->missingPolicy && \is_array($this->missingPolicy)) {
                $n = 0;
                foreach ($this->missingPolicy as $item) {
                    $res['MissingPolicy'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rolePolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MissingPolicy'])) {
            if (!empty($map['MissingPolicy'])) {
                $model->missingPolicy = [];
                $n = 0;
                foreach ($map['MissingPolicy'] as $item) {
                    $model->missingPolicy[$n++] = null !== $item ? missingPolicy::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        return $model;
    }
}
