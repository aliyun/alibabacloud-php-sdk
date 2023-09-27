<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeSecretKeysResponseBody\secretKeys;

use AlibabaCloud\Tea\Model;

class secretKey extends Model
{
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $secretKey;

    /**
     * @var string
     */
    public $secretKeyId;

    /**
     * @var string
     */
    public $secretKeyName;

    /**
     * @var string
     */
    public $secretKeyValue;
    protected $_name = [
        'createdTime'    => 'CreatedTime',
        'modifiedTime'   => 'ModifiedTime',
        'regionId'       => 'RegionId',
        'secretKey'      => 'SecretKey',
        'secretKeyId'    => 'SecretKeyId',
        'secretKeyName'  => 'SecretKeyName',
        'secretKeyValue' => 'SecretKeyValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->secretKey) {
            $res['SecretKey'] = $this->secretKey;
        }
        if (null !== $this->secretKeyId) {
            $res['SecretKeyId'] = $this->secretKeyId;
        }
        if (null !== $this->secretKeyName) {
            $res['SecretKeyName'] = $this->secretKeyName;
        }
        if (null !== $this->secretKeyValue) {
            $res['SecretKeyValue'] = $this->secretKeyValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secretKey
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecretKey'])) {
            $model->secretKey = $map['SecretKey'];
        }
        if (isset($map['SecretKeyId'])) {
            $model->secretKeyId = $map['SecretKeyId'];
        }
        if (isset($map['SecretKeyName'])) {
            $model->secretKeyName = $map['SecretKeyName'];
        }
        if (isset($map['SecretKeyValue'])) {
            $model->secretKeyValue = $map['SecretKeyValue'];
        }

        return $model;
    }
}
