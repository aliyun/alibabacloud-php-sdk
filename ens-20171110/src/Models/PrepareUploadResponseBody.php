<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class PrepareUploadResponseBody extends Model
{
    /**
     * @description The name of the bucket. This parameter is available only when the OSS SDK is used.
     *
     * @example test-xxxxxx
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The endpoint. This parameter is available only when the OSS SDK is used.
     *
     * @example eos.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The request ID.
     *
     * @example 6666C5A5-75ED-422E-A022-7121FA18C968
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bucketName' => 'BucketName',
        'endpoint' => 'Endpoint',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PrepareUploadResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
