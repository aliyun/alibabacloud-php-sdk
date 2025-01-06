<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class GetKafkaClientIpRequest extends Model
{
    /**
     * @description The end of the time range to query.
     *
     * This parameter is required.
     * @example 1716343502000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The ID of the consumer group.
     *
     * >  This parameter is required only if you set Type to byGroup.
     * @example group_name
     *
     * @var string
     */
    public $group;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example alikafka_post-cn-v0h1fgs2****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the region where the instance is deployed.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query.
     *
     * This parameter is required.
     * @example 1716343501000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The topic name.
     *
     * >
     *
     *   This parameter is required only if you set Type to byTopic.
     *
     * @example topic_name
     *
     * @var string
     */
    public $topic;

    /**
     * @description The query method that you want to use to query the client IP addresses. Valid values:
     *
     *   byInstance: queries the IP addresses of the clients that are connected to the instance within a specific period of time.
     *   byTopic: queries the IP addresses of the clients that are connected to a specific topic on the instance within a specific period of time.
     *   byGroup: queries the IP addresses of the clients that are connected to a specific group on the instance within a specific period of time.
     *
     * This parameter is required.
     * @example byInstance
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'endTime'    => 'EndTime',
        'group'      => 'Group',
        'instanceId' => 'InstanceId',
        'regionId'   => 'RegionId',
        'startTime'  => 'StartTime',
        'topic'      => 'Topic',
        'type'       => 'Type',
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
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetKafkaClientIpRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
