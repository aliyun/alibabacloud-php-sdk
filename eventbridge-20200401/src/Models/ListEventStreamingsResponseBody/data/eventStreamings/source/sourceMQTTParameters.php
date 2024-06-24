<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\source;

use AlibabaCloud\Tea\Model;

class sourceMQTTParameters extends Model
{
    /**
     * @var string
     */
    public $bodyDataType;

    /**
     * @description The ID of the Message Queue for MQTT instance.
     *
     * @example bastionhost-cn-zvp27kcha1r
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the region where the Message Queue for MQTT instance resides.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the topic on the Message Queue for MQTT instance.
     *
     * @example migration_instance
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'bodyDataType' => 'BodyDataType',
        'instanceId'   => 'InstanceId',
        'regionId'     => 'RegionId',
        'topic'        => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bodyDataType) {
            $res['BodyDataType'] = $this->bodyDataType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
     * @return sourceMQTTParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BodyDataType'])) {
            $model->bodyDataType = $map['BodyDataType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
