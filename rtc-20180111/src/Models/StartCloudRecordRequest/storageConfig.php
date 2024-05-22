<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudRecordRequest;

use AlibabaCloud\Tea\Model;

class storageConfig extends Model
{
    /**
     * @description accessKey
     *
     * This parameter is required.
     * @example LTAX***
     *
     * @var string
     */
    public $accessKey;

    /**
     * @description bucket
     *
     * This parameter is required.
     * @example test-bucket-for-recording
     *
     * @var string
     */
    public $bucket;

    /**
     * @description region
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $region;

    /**
     * @description secretKey
     *
     * This parameter is required.
     * @example APb6qWYEzKtYxE***
     *
     * @var string
     */
    public $secretKey;

    /**
     * @description vendor
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $vendor;
    protected $_name = [
        'accessKey' => 'AccessKey',
        'bucket'    => 'Bucket',
        'region'    => 'Region',
        'secretKey' => 'SecretKey',
        'vendor'    => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->secretKey) {
            $res['SecretKey'] = $this->secretKey;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SecretKey'])) {
            $model->secretKey = $map['SecretKey'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
