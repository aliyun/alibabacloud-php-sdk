<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class QueryCustomAuthConnectBlackRequest extends Model
{
    /**
     * @example GID_test@@@test
     *
     * @var string
     */
    public $clientId;

    /**
     * @example post-111****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example xOfRU60sGEwN1OlFBIL8Ew==
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
    protected $_name = [
        'clientId'   => 'ClientId',
        'instanceId' => 'InstanceId',
        'nextToken'  => 'NextToken',
        'size'       => 'Size',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCustomAuthConnectBlackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
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

        return $model;
    }
}
