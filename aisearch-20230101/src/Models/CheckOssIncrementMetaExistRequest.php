<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aisearch\V20230101\Models;

use AlibabaCloud\Tea\Model;

class CheckOssIncrementMetaExistRequest extends Model
{
    /**
     * @description oss bucket
     *
     * @example linyunjing
     *
     * @var string
     */
    public $bucketName;

    /**
     * @example increment.meta
     *
     * @var string
     */
    public $key;

    /**
     * @description oss path
     *
     * @example /test/abc
     *
     * @var string
     */
    public $ossPath;
    protected $_name = [
        'bucketName' => 'BucketName',
        'key'        => 'Key',
        'ossPath'    => 'OssPath',
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
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->ossPath) {
            $res['OssPath'] = $this->ossPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckOssIncrementMetaExistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['OssPath'])) {
            $model->ossPath = $map['OssPath'];
        }

        return $model;
    }
}
