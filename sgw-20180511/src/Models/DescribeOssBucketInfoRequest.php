<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DescribeOssBucketInfoRequest extends Model
{
    /**
     * @var string
     */
    public $bucketEndpoint;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bucketEndpoint' => 'BucketEndpoint',
        'bucketName'     => 'BucketName',
        'gatewayId'      => 'GatewayId',
        'securityToken'  => 'SecurityToken',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketEndpoint) {
            $res['BucketEndpoint'] = $this->bucketEndpoint;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOssBucketInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketEndpoint'])) {
            $model->bucketEndpoint = $map['BucketEndpoint'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
