<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class QueryCustomAuthIdentityRequest extends Model
{
    /**
     * @example GID_test@@@test
     *
     * @var string
     */
    public $clientId;

    /**
     * @example USER
     *
     * @var string
     */
    public $identityType;

    /**
     * @example post-111****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example eyJhY2NvdW50IjoiMTM4MTcxODk3NDQzMjQ1OSIsImV2ZW50SWQiOiJGMkUxOUE3QS1FM0Q0LTVCOEYtQkU4OS1CNkMyM0RBM0UyRjIiLCJsb2dJZCI6IjY2LTEzODE3MTg5NzQ0MzI0NTkiLCJydyI6IlciLCJ0aW1lIjoxNjc4MzI2MTI1MDAwfQ
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 100
     *
     * @var int
     */
    public $size;

    /**
     * @example test
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'clientId'     => 'ClientId',
        'identityType' => 'IdentityType',
        'instanceId'   => 'InstanceId',
        'nextToken'    => 'NextToken',
        'size'         => 'Size',
        'username'     => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
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
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCustomAuthIdentityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
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
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
