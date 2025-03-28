<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomScenePolicyRequest extends Model
{
    /**
     * @description The time when the policy expires.
     *
     * The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * This parameter is required.
     *
     * @example 2021-11-07T18:00:00Z
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
     * @example 7096621098****
     *
     * @var string
     */
    public $objects;

    /**
     * @description The time when the policy takes effect.
     *
     * The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * This parameter is required.
     *
     * @example 2021-11-07T17:00:00Z
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
     * @return CreateCustomScenePolicyRequest
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }

        return $model;
    }
}
