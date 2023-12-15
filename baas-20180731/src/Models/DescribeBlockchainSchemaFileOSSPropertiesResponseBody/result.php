<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainSchemaFileOSSPropertiesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $accessKeySecret;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $folderName;
    protected $_name = [
        'accessKeyId'     => 'AccessKeyId',
        'accessKeySecret' => 'AccessKeySecret',
        'bucketName'      => 'BucketName',
        'endpoint'        => 'Endpoint',
        'folderName'      => 'FolderName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->accessKeySecret) {
            $res['AccessKeySecret'] = $this->accessKeySecret;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->folderName) {
            $res['FolderName'] = $this->folderName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['AccessKeySecret'])) {
            $model->accessKeySecret = $map['AccessKeySecret'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['FolderName'])) {
            $model->folderName = $map['FolderName'];
        }

        return $model;
    }
}
