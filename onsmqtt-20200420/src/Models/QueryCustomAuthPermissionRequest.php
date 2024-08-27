<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class QueryCustomAuthPermissionRequest extends Model
{
    /**
     * @description The username or client ID.
     *
     * @example test
     *
     * @var string
     */
    public $identity;

    /**
     * @description The identity type.
     *
     * Valid values:
     *
     *   USER
     *   CLIENT
     *
     * @example USER
     *
     * @var string
     */
    public $identityType;

    /**
     * @description The ID of the ApsaraMQ for MQTT instance.
     *
     * This parameter is required.
     * @example post-cn-0pp12gl****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The token that marks the end position of the previous returned page. To obtain the next batch of data, call the operation again by using the value of NextToken returned by the previous request. If you call this operation for the first time or want to query all results, set NextToken to an empty string.
     *
     * @example AAAAAThmKW2HkRgzo4G7IRRTK2fC6zZmAk6y0bwoNPFOOcSP
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The number of queries to be returned. Maximum value: 100.
     *
     * This parameter is required.
     * @example 100
     *
     * @var int
     */
    public $size;

    /**
     * @description The topic whose authorization information you want to query. Multi-level topics and wildcard characters are supported.
     *
     * @example test
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'identity'     => 'Identity',
        'identityType' => 'IdentityType',
        'instanceId'   => 'InstanceId',
        'nextToken'    => 'NextToken',
        'size'         => 'Size',
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

    /**
     * @param array $map
     *
     * @return QueryCustomAuthPermissionRequest
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
