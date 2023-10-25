<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetTagValRequest extends Model
{
    /**
     * @description The timestamp of the end time of the time range to query. The timestamp is accurate to milliseconds.
     *
     * @example 1575622455686
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The ID of the region.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the application.
     *
     * @example appTest
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The name of the span.
     *
     * @example createOrder
     *
     * @var string
     */
    public $spanName;

    /**
     * @description The timestamp of the start time of the time range to query. The timestamp is accurate to milliseconds.
     *
     * @example 1575561600000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The tag key.
     *
     * @example span.kind
     *
     * @var string
     */
    public $tagKey;
    protected $_name = [
        'endTime'     => 'EndTime',
        'regionId'    => 'RegionId',
        'serviceName' => 'ServiceName',
        'spanName'    => 'SpanName',
        'startTime'   => 'StartTime',
        'tagKey'      => 'TagKey',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->spanName) {
            $res['SpanName'] = $this->spanName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTagValRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['SpanName'])) {
            $model->spanName = $map['SpanName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }

        return $model;
    }
}
