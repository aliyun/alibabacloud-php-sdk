<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Tea\Model;

class OnsConsumerAccumulateRequest extends Model
{
    /**
     * @description Specifies whether to query the details of each topic to which the consumer group subscribes. Valid values:
     *
     *   **true**: The details of each topic are queried. You can obtain the details from the **DetailInTopicList** response parameter.
     *   **false**: The details of each topic are not queried. This is the default value. If you use this value, the value of the **DetailInTopicList** response parameter is empty.
     *
     * @example true
     *
     * @var bool
     */
    public $detail;

    /**
     * @description The ID of the consumer group whose message accumulation you want to query.
     *
     * @example GID_test_consumer_id
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the instance.
     *
     * @example MQ_INST_111111111111_DOxxxxxx
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'detail'     => 'Detail',
        'groupId'    => 'GroupId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnsConsumerAccumulateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
