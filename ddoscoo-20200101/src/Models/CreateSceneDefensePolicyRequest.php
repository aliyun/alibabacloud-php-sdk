<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class CreateSceneDefensePolicyRequest extends Model
{
    /**
     * @description The end time of the policy. This value is a UNIX timestamp. Units: milliseconds.
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
     * @description The start time of the policy. This value is a UNIX timestamp. Units: milliseconds.
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
     * @return CreateSceneDefensePolicyRequest
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }

        return $model;
    }
}
