<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class QueryCustomAuthConnectBlackRequest extends Model
{
    /**
     * @description The ID of the client to be queried.
     *
     * @example GID_test@@@test
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The ID of the ApsaraMQ for MQTT instance.
     *
     * This parameter is required.
     * @example post-111****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The token that marks the end position of the previous returned page. To obtain the next batch of data, call the operation again by using the value of NextToken returned by the previous request. If you call this operation for the first time or want to query all results, set NextToken to an empty string.
     *
     * @example xOfRU60sGEwN1OlFBIL8Ew==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The number of clients to be queried. Maximum value: 100.
     *
     * This parameter is required.
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
