<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudRecordRequest;

use AlibabaCloud\Dara\Model;

class storageConfig extends Model
{
    /**
     * @var string
     */
    public $accessKey;
    /**
     * @var string
     */
    public $bucket;
    /**
     * @var int
     */
    public $region;
    /**
     * @var string
     */
    public $secretKey;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
