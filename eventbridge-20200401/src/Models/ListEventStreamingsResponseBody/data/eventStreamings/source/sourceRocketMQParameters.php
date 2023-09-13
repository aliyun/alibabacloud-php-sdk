<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\source;

use AlibabaCloud\Tea\Model;

class sourceRocketMQParameters extends Model
{
    /**
     * @example GID_group1
     *
     * @var string
     */
    public $groupID;

    /**
     * @example i-f8zbher64dlm58plyfte
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example CONSUMEFROMTIMESTAMP
     *
     * @var string
     */
    public $offset;

    /**
     * @example cn-chengdu
     *
     * @var string
     */
    public $regionId;

    /**
     * @example v1
     *
     * @var string
     */
    public $tag;

    /**
     * @example 1670742074043
     *
     * @var int
     */
    public $timestamp;

    /**
     * @example topic_add_anima
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'groupID'    => 'GroupID',
        'instanceId' => 'InstanceId',
        'offset'     => 'Offset',
        'regionId'   => 'RegionId',
        'tag'        => 'Tag',
        'timestamp'  => 'Timestamp',
        'topic'      => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupID) {
            $res['GroupID'] = $this->groupID;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceRocketMQParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupID'])) {
            $model->groupID = $map['GroupID'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
