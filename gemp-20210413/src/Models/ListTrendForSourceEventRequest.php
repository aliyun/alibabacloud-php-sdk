<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListTrendForSourceEventRequest extends Model
{
    /**
     * @example 2020-10-10 23:59:59
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 1000
     *
     * @var int
     */
    public $instanceId;

    /**
     * @example INCIDENT
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2020-10-10 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 1000
     *
     * @var int
     */
    public $timeUnit;
    protected $_name = [
        'endTime'      => 'endTime',
        'instanceId'   => 'instanceId',
        'instanceType' => 'instanceType',
        'requestId'    => 'requestId',
        'startTime'    => 'startTime',
        'timeUnit'     => 'timeUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->timeUnit) {
            $res['timeUnit'] = $this->timeUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTrendForSourceEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['timeUnit'])) {
            $model->timeUnit = $map['timeUnit'];
        }

        return $model;
    }
}
