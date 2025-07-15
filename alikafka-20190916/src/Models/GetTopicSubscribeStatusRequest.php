<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class GetTopicSubscribeStatusRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * You can call the [GetInstanceList](https://help.aliyun.com/document_detail/437663.html) operation to query the list of instances.
     *
     * This parameter is required.
     *
     * @example alikafka_pre-cn-v0h1cng0***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The topic name.
     *
     * You can call the [GetTopicList](https://help.aliyun.com/document_detail/437677.html) operation to query the list of topics.
     *
     * This parameter is required.
     *
     * @example topic_name
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'topic' => 'Topic',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
     * @return GetTopicSubscribeStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
