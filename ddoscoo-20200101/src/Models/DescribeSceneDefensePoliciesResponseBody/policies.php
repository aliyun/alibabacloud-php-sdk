<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSceneDefensePoliciesResponseBody;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSceneDefensePoliciesResponseBody\policies\runtimePolicies;
use AlibabaCloud\Tea\Model;

class policies extends Model
{
    /**
     * @description The execution status of the policy. Valid values:
     *
     *   **1**: not executed or execution completed
     *   **0**: being executed
     *   **-1**: execution failed
     *
     * @example 1
     *
     * @var int
     */
    public $done;

    /**
     * @description The time at which the policy expires. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1586016000000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The name of the policy.
     *
     * @example testpolicy
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of objects that are protected by the policy.
     *
     * @example 1
     *
     * @var int
     */
    public $objectCount;

    /**
     * @description The ID of the policy.
     *
     * @example 321a-fd31-df51-****
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The running rules of the policy.
     *
     * @var runtimePolicies[]
     */
    public $runtimePolicies;

    /**
     * @description The time at which the policy takes effect. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1585670400000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the policy. Valid values:
     *
     *   **0**: disabled
     *   **1**: pending enabling
     *   **2**: enabled
     *   **3**: expired
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The type of the template that is used to create the policy. Valid values:
     *
     *   **promotion**: the Important Activity template
     *   **bypass**: the Forward All template
     *
     * @example promotion
     *
     * @var string
     */
    public $template;
    protected $_name = [
        'done'            => 'Done',
        'endTime'         => 'EndTime',
        'name'            => 'Name',
        'objectCount'     => 'ObjectCount',
        'policyId'        => 'PolicyId',
        'runtimePolicies' => 'RuntimePolicies',
        'startTime'       => 'StartTime',
        'status'          => 'Status',
        'template'        => 'Template',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->done) {
            $res['Done'] = $this->done;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->objectCount) {
            $res['ObjectCount'] = $this->objectCount;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->runtimePolicies) {
            $res['RuntimePolicies'] = [];
            if (null !== $this->runtimePolicies && \is_array($this->runtimePolicies)) {
                $n = 0;
                foreach ($this->runtimePolicies as $item) {
                    $res['RuntimePolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Done'])) {
            $model->done = $map['Done'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ObjectCount'])) {
            $model->objectCount = $map['ObjectCount'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['RuntimePolicies'])) {
            if (!empty($map['RuntimePolicies'])) {
                $model->runtimePolicies = [];
                $n                      = 0;
                foreach ($map['RuntimePolicies'] as $item) {
                    $model->runtimePolicies[$n++] = null !== $item ? runtimePolicies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }

        return $model;
    }
}
