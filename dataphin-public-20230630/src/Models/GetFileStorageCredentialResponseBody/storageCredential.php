<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetFileStorageCredentialResponseBody;

use AlibabaCloud\Tea\Model;

class storageCredential extends Model
{
    /**
     * @example temp.akId
     *
     * @var string
     */
    public $accessId;

    /**
     * @example temp.akKey
     *
     * @var string
     */
    public $accessKey;

    /**
     * @example dataphin
     *
     * @var string
     */
    public $bucket;

    /**
     * @example oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @example 17343434343434
     *
     * @var int
     */
    public $expiration;

    /**
     * @example 1023231111/abc
     *
     * @var string
     */
    public $objectName;

    /**
     * @description region
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @example temp.token
     *
     * @var string
     */
    public $securityToken;

    /**
     * @example oss
     *
     * @var string
     */
    public $storageType;
    protected $_name = [
        'accessId' => 'AccessId',
        'accessKey' => 'AccessKey',
        'bucket' => 'Bucket',
        'endpoint' => 'Endpoint',
        'expiration' => 'Expiration',
        'objectName' => 'ObjectName',
        'region' => 'Region',
        'securityToken' => 'SecurityToken',
        'storageType' => 'StorageType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }
        if (null !== $this->objectName) {
            $res['ObjectName'] = $this->objectName;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageCredential
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }
        if (isset($map['ObjectName'])) {
            $model->objectName = $map['ObjectName'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
