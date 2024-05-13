<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateUploadOSSFileJobRequest;

use AlibabaCloud\Tea\Model;

class uploadTarget extends Model
{
    /**
     * @description The name of the OSS bucket.
     *
     * This parameter is required.
     * @example test_bucket
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The endpoint of the OSS bucket.
     *
     * This parameter is required.
     * @example http://oss-cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The name of the OSS object.
     *
     * This parameter is required.
     * @example test.sql
     *
     * @var string
     */
    public $objectName;
    protected $_name = [
        'bucketName' => 'BucketName',
        'endpoint'   => 'Endpoint',
        'objectName' => 'ObjectName',
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
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->objectName) {
            $res['ObjectName'] = $this->objectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uploadTarget
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['ObjectName'])) {
            $model->objectName = $map['ObjectName'];
        }

        return $model;
    }
}
