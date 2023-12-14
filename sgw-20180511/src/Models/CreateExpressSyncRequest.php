<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class CreateExpressSyncRequest extends Model
{
    /**
     * @example sgw-test***
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
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bucketRegion;

    /**
     * @var string
     */
    public $description;

    /**
     * @example alex-tb***
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'bucketName'    => 'BucketName',
        'bucketPrefix'  => 'BucketPrefix',
        'bucketRegion'  => 'BucketRegion',
        'description'   => 'Description',
        'name'          => 'Name',
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
        if (null !== $this->bucketRegion) {
            $res['BucketRegion'] = $this->bucketRegion;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateExpressSyncRequest
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
        if (isset($map['BucketRegion'])) {
            $model->bucketRegion = $map['BucketRegion'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
