<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\DescribeCustomScenePoliciesResponseBody;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description The time when the policy expires.
     *
     * The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-03-06T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The name of the scenario-specific policy.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The IDs of websites that are associated with the policy.
     *
     * @var string[]
     */
    public $objects;

    /**
     * @description The policy ID.
     *
     * @example 1234****
     *
     * @var int
     */
    public $policyId;

    /**
     * @description The time when the policy takes effect.
     *
     * The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-03-04T16:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the policy. Valid values:
     *
     *   **Disabled**
     *   **Pending**
     *   **Running**
     *   **Expired**
     *
     * @example Expired
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the policy template. Valid value:
     *
     *   **promotion**: major events.
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
        'status' => 'Status',
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
     * @return dataModule
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
            if (!empty($map['Objects'])) {
                $model->objects = $map['Objects'];
            }
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
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
