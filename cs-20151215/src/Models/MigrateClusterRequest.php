<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class MigrateClusterRequest extends Model
{
    /**
     * @description The endpoint of the OSS bucket.
     *
     * @example *******.oss-cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $ossBucketEndpoint;

    /**
     * @description The name of the Object Storage Service (OSS) bucket.
     *
     * @example bucket-****
     *
     * @var string
     */
    public $ossBucketName;
    protected $_name = [
        'ossBucketEndpoint' => 'oss_bucket_endpoint',
        'ossBucketName'     => 'oss_bucket_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossBucketEndpoint) {
            $res['oss_bucket_endpoint'] = $this->ossBucketEndpoint;
        }
        if (null !== $this->ossBucketName) {
            $res['oss_bucket_name'] = $this->ossBucketName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MigrateClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['oss_bucket_endpoint'])) {
            $model->ossBucketEndpoint = $map['oss_bucket_endpoint'];
        }
        if (isset($map['oss_bucket_name'])) {
            $model->ossBucketName = $map['oss_bucket_name'];
        }

        return $model;
    }
}
