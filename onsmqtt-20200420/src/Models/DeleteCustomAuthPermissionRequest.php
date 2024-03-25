<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class DeleteCustomAuthPermissionRequest extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $identity;

    /**
     * @example USER
     *
     * @var string
     */
    public $identityType;

    /**
     * @example mqtt-cn-0pp1ldu****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example test/t1
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'identity'     => 'Identity',
        'identityType' => 'IdentityType',
        'instanceId'   => 'InstanceId',
        'topic'        => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identity) {
            $res['Identity'] = $this->identity;
        }
        if (null !== $this->identityType) {
            $res['IdentityType'] = $this->identityType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCustomAuthPermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Identity'])) {
            $model->identity = $map['Identity'];
        }
        if (isset($map['IdentityType'])) {
            $model->identityType = $map['IdentityType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
