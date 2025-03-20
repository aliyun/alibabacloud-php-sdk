<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateCustomScenePolicyRequest extends Model
{
    /**
     * @description The time when the policy expires.
     *
     * Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * This parameter is required.
     *
     * @example 2023-04-03T19:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The policy name.
     *
     * This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The IDs of the websites that you want to associate with the policy. Separate multiple IDs with commas (,).
     *
     * This parameter is required.
     *
     * @example 123456****
     *
     * @var string
     */
    public $objects;

    /**
     * @description The policy ID, which can be obtained by calling the [DescribeCustomScenePolicies](https://help.aliyun.com/document_detail/2850508.html) operation.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $policyId;

    /**
     * @description The time when the policy takes effect.
     *
     * Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * This parameter is required.
     *
     * @example 2023-04-03T16:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The name of the policy template. Valid value:
     *
     *   **promotion**: major events.
     *
     * This parameter is required.
     *
     * @example promotion
     *
     * @var string
     */
    public $template;
    protected $_name = [
        'endTime' => 'EndTime',
        'name' => 'Name',
        'objects' => 'Objects',
        'policyId' => 'PolicyId',
        'startTime' => 'StartTime',
        'template' => 'Template',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->objects) {
            $res['Objects'] = $this->objects;
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
     * @return UpdateCustomScenePolicyRequest
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
        if (isset($map['Objects'])) {
            $model->objects = $map['Objects'];
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
