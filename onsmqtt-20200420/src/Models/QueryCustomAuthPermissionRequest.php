<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Dara\Model;

class QueryCustomAuthPermissionRequest extends Model
{
    /**
     * @var string
     */
    public $identity;

    /**
     * @var string
     */
    public $identityType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'identity' => 'Identity',
        'identityType' => 'IdentityType',
        'instanceId' => 'InstanceId',
        'nextToken' => 'NextToken',
        'size' => 'Size',
        'topic' => 'Topic',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
