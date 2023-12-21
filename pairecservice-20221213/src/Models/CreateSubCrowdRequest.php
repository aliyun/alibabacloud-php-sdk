<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateSubCrowdRequest extends Model
{
    /**
     * @example pairec-test1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example ManualInput
     *
     * @var string
     */
    public $source;

    /**
     * @example user1,user2,user3
     *
     * @var string
     */
    public $users;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'source'     => 'Source',
        'users'      => 'Users',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->users) {
            $res['Users'] = $this->users;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSubCrowdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Users'])) {
            $model->users = $map['Users'];
        }

        return $model;
    }
}
