<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aisearch\V20230101\Models;

use AlibabaCloud\Tea\Model;

class ListOssBucketAndPathRequest extends Model
{
    /**
     * @example bucket-test
     *
     * @var string
     */
    public $bucketName;

    /**
     * @example /test/abc
     *
     * @var string
     */
    public $ossPath;
    protected $_name = [
        'bucketName' => 'BucketName',
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
        if (null !== $this->ossPath) {
            $res['OssPath'] = $this->ossPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOssBucketAndPathRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['OssPath'])) {
            $model->ossPath = $map['OssPath'];
        }

        return $model;
    }
}
