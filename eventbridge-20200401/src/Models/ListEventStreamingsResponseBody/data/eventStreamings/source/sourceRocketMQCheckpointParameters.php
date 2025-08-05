<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\source;

use AlibabaCloud\Tea\Model;

class sourceRocketMQCheckpointParameters extends Model
{
    /**
     * @example rmq-cn-jte3w******
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example Cloud_5
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $topics;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
        'regionId' => 'RegionId',
        'topics' => 'Topics',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->topics) {
            $res['Topics'] = $this->topics;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceRocketMQCheckpointParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Topics'])) {
            if (!empty($map['Topics'])) {
                $model->topics = $map['Topics'];
            }
        }

        return $model;
    }
}
