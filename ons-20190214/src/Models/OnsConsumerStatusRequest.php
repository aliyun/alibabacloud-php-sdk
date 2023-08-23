<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Tea\Model;

class OnsConsumerStatusRequest extends Model
{
    /**
     * @description Specifies whether to query the details of the consumer group. Valid values:
     *
     *   **true**: The details of the consumer group are queried. You can obtain details from the **ConsumerConnectionInfoList** and **DetailInTopicList** response parameters.
     *   **false**: The details of the consumer group are not queried. The values of the **ConsumerConnectionInfoList** and **DetailInTopicList** response parameters are empty. This value is the default value of the Detail parameter.
     *
     * @example true
     *
     * @var bool
     */
    public $detail;

    /**
     * @description The ID of the consumer group whose details you want to query.
     *
     * @example GID_test_group_id
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

    /**
     * @description Specifies whether to query the information about thread stack traces. Valid values:
     *
     *   **true**: The information about thread stack traces is queried. You can obtain the information from the **Jstack** response parameter.
     *
     * > If you want to obtain the information about thread stack traces, make sure that the **Detail** parameter in the request is set to **true**.
     *
     *   **false**: The information about thread stack traces is not queried. The value of the **Jstack** response parameter is empty. This value is the default value of the NeedJstack parameter.
     *
     * @example true
     *
     * @var bool
     */
    public $needJstack;
    protected $_name = [
        'detail'     => 'Detail',
        'groupId'    => 'GroupId',
        'instanceId' => 'InstanceId',
        'needJstack' => 'NeedJstack',
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
        if (null !== $this->needJstack) {
            $res['NeedJstack'] = $this->needJstack;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnsConsumerStatusRequest
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
        if (isset($map['NeedJstack'])) {
            $model->needJstack = $map['NeedJstack'];
        }

        return $model;
    }
}
