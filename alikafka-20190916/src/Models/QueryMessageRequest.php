<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class QueryMessageRequest extends Model
{
    /**
     * @description The beginning of the time range to query. The value of this parameter is a UNIX timestamp in milliseconds.
     *
     * @example 1672410180000
     *
     * @var int
     */
    public $beginTime;

    /**
     * @description The instance ID.
     *
     * @example alikafka_pre-cn-mp919o4v****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The consumer offset of the partition.
     *
     * @example 100
     *
     * @var string
     */
    public $offset;

    /**
     * @description The partition ID.
     *
     * @example 0
     *
     * @var string
     */
    public $partition;

    /**
     * @description The query type. Valid values:
     *
     *   byOffset: queries messages by offset. If you select this value, you must configure Partition and Offset.
     *   byTimestamp: queries messages by time. If you select this value, you must configure BeginTime.
     *
     * @example byTimestamp
     *
     * @var string
     */
    public $queryType;

    /**
     * @description The ID of the region where the resource resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The topic name.
     *
     * @example testkafka
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'beginTime'  => 'BeginTime',
        'instanceId' => 'InstanceId',
        'offset'     => 'Offset',
        'partition'  => 'Partition',
        'queryType'  => 'QueryType',
        'regionId'   => 'RegionId',
        'topic'      => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->partition) {
            $res['Partition'] = $this->partition;
        }
        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMessageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['Partition'])) {
            $model->partition = $map['Partition'];
        }
        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
