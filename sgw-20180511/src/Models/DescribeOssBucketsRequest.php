<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DescribeOssBucketsRequest extends Model
{
    /**
     * @var string
     */
    public $bucketEndpoint;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'bucketEndpoint' => 'BucketEndpoint',
        'securityToken'  => 'SecurityToken',
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
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOssBucketsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketEndpoint'])) {
            $model->bucketEndpoint = $map['BucketEndpoint'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
