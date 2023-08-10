<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationClientSecretResponseBody;

use AlibabaCloud\Tea\Model;

class applicationClientSecret extends Model
{
    /**
     * @description The client ID of the application.
     *
     * @example app_mkv7rgt4d7i4u7zqtzev2mxxxx
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The client key secret of the application.
     *
     * @example CSEHDcHcrUKHw1CuxkJEHPveWRXBGqVqRsxxxx
     *
     * @var string
     */
    public $clientSecret;

    /**
     * @description The client key ID of the application.
     *
     * @example sci_k52x2ru63rlkflina5utgkxxxx
     *
     * @var string
     */
    public $secretId;
    protected $_name = [
        'clientId'     => 'ClientId',
        'clientSecret' => 'ClientSecret',
        'secretId'     => 'SecretId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return applicationClientSecret
     */
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
