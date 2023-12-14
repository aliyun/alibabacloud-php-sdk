<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DescribeExpressSyncsRequest extends Model
{
    /**
     * @example sgw***
     *
     * @var string
     */
    public $bucketName;

    /**
     * @example test***
     *
     * @var string
     */
    public $bucketPrefix;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'bucketName'    => 'BucketName',
        'bucketPrefix'  => 'BucketPrefix',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->bucketPrefix) {
            $res['BucketPrefix'] = $this->bucketPrefix;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExpressSyncsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['BucketPrefix'])) {
            $model->bucketPrefix = $map['BucketPrefix'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
