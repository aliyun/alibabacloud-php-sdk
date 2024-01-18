<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class QueryMessageRequest extends Model
{
    /**
     * @example 1672410180000
     *
     * @var int
     */
    public $beginTime;

    /**
     * @example alikafka_pre-cn-mp919o4v****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 100
     *
     * @var string
     */
    public $offset;

    /**
     * @example 0
     *
     * @var string
     */
    public $partition;

    /**
     * @example byTimestamp
     *
     * @var string
     */
    public $queryType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
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
