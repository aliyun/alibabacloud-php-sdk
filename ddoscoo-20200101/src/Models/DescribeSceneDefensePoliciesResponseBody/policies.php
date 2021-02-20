<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSceneDefensePoliciesResponseBody;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSceneDefensePoliciesResponseBody\policies\runtimePolicies;
use AlibabaCloud\Tea\Model;

class policies extends Model
{
    /**
     * @var int
     */
    public $done;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $objectCount;

    /**
     * @var string
     */
    public $template;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var runtimePolicies[]
     */
    public $runtimePolicies;
    protected $_name = [
        'done'            => 'Done',
        'endTime'         => 'EndTime',
        'status'          => 'Status',
        'startTime'       => 'StartTime',
        'objectCount'     => 'ObjectCount',
        'template'        => 'Template',
        'policyId'        => 'PolicyId',
        'name'            => 'Name',
        'runtimePolicies' => 'RuntimePolicies',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->objectCount) {
            $res['ObjectCount'] = $this->objectCount;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ObjectCount'])) {
            $model->objectCount = $map['ObjectCount'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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

        return $model;
    }
}
