<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class DescribeSpaceClientConfigResponseBody extends Model
{
    /**
     * @example 0a4gJT0faV*****D4lgQmw==
     *
     * @var string
     */
    public $apiKey;

    /**
     * @example 226e5213-697c-4a52-b4ff-35a09f8*****
     *
     * @var string
     */
    public $endpoint;

    /**
     * @example cocdsfmb-12266946259*****-file.oss-cn-zhangjiakou.aliyuncs.com
     *
     * @var string
     */
    public $fileUploadEndpoint;

    /**
     * @example myspace
     *
     * @var string
     */
    public $name;

    /**
     * @example -----BEGIN PRIVATE KEY-----\nMIIEvgIBADANBgkqhki******G9w0BAQE7V0sQaj\n-----END PRIVATE KEY-----
     *
     * @var string
     */
    public $privateKey;

    /**
     * @example EA770971-A4A0-4555-9E00-C94A2194E150
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 226e5213-697c-4a52-b4ff-35a09f8*****
     *
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'apiKey'             => 'ApiKey',
        'endpoint'           => 'Endpoint',
        'fileUploadEndpoint' => 'FileUploadEndpoint',
        'name'               => 'Name',
        'privateKey'         => 'PrivateKey',
        'requestId'          => 'RequestId',
        'spaceId'            => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->fileUploadEndpoint) {
            $res['FileUploadEndpoint'] = $this->fileUploadEndpoint;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSpaceClientConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['FileUploadEndpoint'])) {
            $model->fileUploadEndpoint = $map['FileUploadEndpoint'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
