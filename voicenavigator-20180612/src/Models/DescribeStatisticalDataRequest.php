<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class DescribeStatisticalDataRequest extends Model
{
    /**
     * @example 1582283640000
     *
     * @var int
     */
    public $beginTimeLeftRange;

    /**
     * @example 1582298040000
     *
     * @var int
     */
    public $beginTimeRightRange;

    /**
     * @example c28fc549-d88f-4f6e-85ad-a0806e5e39c0
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example Day/Hour
     *
     * @var string
     */
    public $timeUnit;
    protected $_name = [
        'beginTimeLeftRange'  => 'BeginTimeLeftRange',
        'beginTimeRightRange' => 'BeginTimeRightRange',
        'instanceId'          => 'InstanceId',
        'timeUnit'            => 'TimeUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTimeLeftRange) {
            $res['BeginTimeLeftRange'] = $this->beginTimeLeftRange;
        }
        if (null !== $this->beginTimeRightRange) {
            $res['BeginTimeRightRange'] = $this->beginTimeRightRange;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->timeUnit) {
            $res['TimeUnit'] = $this->timeUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStatisticalDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTimeLeftRange'])) {
            $model->beginTimeLeftRange = $map['BeginTimeLeftRange'];
        }
        if (isset($map['BeginTimeRightRange'])) {
            $model->beginTimeRightRange = $map['BeginTimeRightRange'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TimeUnit'])) {
            $model->timeUnit = $map['TimeUnit'];
        }

        return $model;
    }
}
