<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class DescribeSpaceClientConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $privateKey;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $fileUploadEndpoint;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'apiKey'             => 'ApiKey',
        'spaceId'            => 'SpaceId',
        'requestId'          => 'RequestId',
        'privateKey'         => 'PrivateKey',
        'endpoint'           => 'Endpoint',
        'fileUploadEndpoint' => 'FileUploadEndpoint',
        'name'               => 'Name',
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
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
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
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
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

        return $model;
    }
}
