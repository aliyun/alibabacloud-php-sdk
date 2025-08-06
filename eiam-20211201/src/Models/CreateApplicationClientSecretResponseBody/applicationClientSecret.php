<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationClientSecretResponseBody;

use AlibabaCloud\Dara\Model;

class applicationClientSecret extends Model
{
    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientSecret;

    /**
     * @var string
     */
    public $secretId;
    protected $_name = [
        'clientId' => 'ClientId',
        'clientSecret' => 'ClientSecret',
        'secretId' => 'SecretId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->clientSecret) {
            $res['ClientSecret'] = $this->clientSecret;
        }

        if (null !== $this->secretId) {
            $res['SecretId'] = $this->secretId;
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
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['ClientSecret'])) {
            $model->clientSecret = $map['ClientSecret'];
        }

        if (isset($map['SecretId'])) {
            $model->secretId = $map['SecretId'];
        }

        return $model;
    }
}
