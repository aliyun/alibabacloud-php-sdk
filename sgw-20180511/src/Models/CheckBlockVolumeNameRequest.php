<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class CheckBlockVolumeNameRequest extends Model
{
    /**
     * @description Bucket Endpoint。
     *
     * @example oss-cn-hangzhou-internal.aliyuncs.com
     *
     * @var string
     */
    public $bucketEndpoint;

    /**
     * @example random***
     *
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example alex***
     *
     * @var string
     */
    public $volumeName;
    protected $_name = [
        'bucketEndpoint' => 'BucketEndpoint',
        'bucketName'     => 'BucketName',
        'securityToken'  => 'SecurityToken',
        'volumeName'     => 'VolumeName',
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
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->volumeName) {
            $res['VolumeName'] = $this->volumeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckBlockVolumeNameRequest
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['VolumeName'])) {
            $model->volumeName = $map['VolumeName'];
        }

        return $model;
    }
}
