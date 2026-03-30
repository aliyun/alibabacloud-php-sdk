<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;

class AddCloudAccessRequest extends Model
{
    /**
     * @var string
     */
    public $cloudName;

    /**
     * @var string
     */
    public $secretId;

    /**
     * @var string
     */
    public $secretKey;
    protected $_name = [
        'cloudName' => 'CloudName',
        'secretId' => 'SecretId',
        'secretKey' => 'SecretKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudName) {
            $res['CloudName'] = $this->cloudName;
        }

        if (null !== $this->secretId) {
            $res['SecretId'] = $this->secretId;
        }

        if (null !== $this->secretKey) {
            $res['SecretKey'] = $this->secretKey;
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
        if (isset($map['CloudName'])) {
            $model->cloudName = $map['CloudName'];
        }

        if (isset($map['SecretId'])) {
            $model->secretId = $map['SecretId'];
        }

        if (isset($map['SecretKey'])) {
            $model->secretKey = $map['SecretKey'];
        }

        return $model;
    }
}
