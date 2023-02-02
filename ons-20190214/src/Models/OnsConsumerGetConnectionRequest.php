<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Tea\Model;

class OnsConsumerGetConnectionRequest extends Model
{
    /**
     * @description The ID of the consumer group whose client connection status you want to query.
     *
     * @example GID_test_consumer_id
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the instance to which the consumer group belongs.
     *
     * @example MQ_INST_111111111111_DOxxxxxx
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'groupId'    => 'GroupId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return OnsConsumerGetConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
