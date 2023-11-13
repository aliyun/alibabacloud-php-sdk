<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifySceneDefensePolicyRequest extends Model
{
    /**
     * @description The end time of the policy. The value is a UNIX timestamp. Unit: milliseconds.
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
     * @description The ID of the policy that you want to modify.
     *
     * > You can call the [DescribeSceneDefensePolicies](~~159382~~) operation to query the IDs of all policies.
     * @example 321a-fd31-df51-****
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The start time of the policy. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1585670400000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The template of the policy. Valid values:
     *
     *   **promotion**: important activity
     *   **bypass**: all traffic forwarded
     *
     * @example promotion
     *
     * @var string
     */
    public $template;
    protected $_name = [
        'endTime'   => 'EndTime',
        'name'      => 'Name',
        'policyId'  => 'PolicyId',
        'startTime' => 'StartTime',
        'template'  => 'Template',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySceneDefensePolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }

        return $model;
    }
}
