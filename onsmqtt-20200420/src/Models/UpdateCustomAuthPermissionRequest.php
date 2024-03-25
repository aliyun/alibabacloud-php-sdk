<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class UpdateCustomAuthPermissionRequest extends Model
{
    /**
     * @example ALLOW
     *
     * @var string
     */
    public $effect;

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
     * @example post-cn-0pp12gl****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example PUB_SUB
     *
     * @var string
     */
    public $permitAction;

    /**
     * @example test/t1
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'effect'       => 'Effect',
        'identity'     => 'Identity',
        'identityType' => 'IdentityType',
        'instanceId'   => 'InstanceId',
        'permitAction' => 'PermitAction',
        'topic'        => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effect) {
            $res['Effect'] = $this->effect;
        }
        if (null !== $this->identity) {
            $res['Identity'] = $this->identity;
        }
        if (null !== $this->identityType) {
            $res['IdentityType'] = $this->identityType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->permitAction) {
            $res['PermitAction'] = $this->permitAction;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCustomAuthPermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Effect'])) {
            $model->effect = $map['Effect'];
        }
        if (isset($map['Identity'])) {
            $model->identity = $map['Identity'];
        }
        if (isset($map['IdentityType'])) {
            $model->identityType = $map['IdentityType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PermitAction'])) {
            $model->permitAction = $map['PermitAction'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
