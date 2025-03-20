<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\UpdateOriginPoolRequest\origins;

use AlibabaCloud\Tea\Model;

class authConf extends Model
{
    /**
     * @description The AccessKey required for private authentication.
     *
     * @example LTAI5t7fKVT****atQpfNes
     *
     * @var string
     */
    public $accessKey;

    /**
     * @description The type of authentication.
     *
     * - public: Public read/write, used when the origin is OSS or S3 and is set to public read/write;
     * - private_same_account: Private same account, used when the origin is OSS and the authentication type is private within the same account;
     * - private_cross_account: Private cross-account, used when the origin is OSS and the authentication type is private across accounts;
     * - private: Used when the origin is S3 and the authentication type is private.
     *
     * @example public
     *
     * @var string
     */
    public $authType;

    /**
     * @description The region of the origin required when the origin is AWS S3.
     *
     * @example us-east-1
     *
     * @var string
     */
    public $region;

    /**
     * @description The SecretKey required for private authentication.
     *
     * @example VIxuvJSA2S0****YoZ3nkp208dy5w7
     *
     * @var string
     */
    public $secretKey;

    /**
     * @description The signature version required when the origin is AWS S3.
     *
     * @example v2
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'accessKey' => 'AccessKey',
        'authType' => 'AuthType',
        'region' => 'Region',
        'secretKey' => 'SecretKey',
        'version' => 'Version',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->secretKey) {
            $res['SecretKey'] = $this->secretKey;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authConf
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SecretKey'])) {
            $model->secretKey = $map['SecretKey'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
