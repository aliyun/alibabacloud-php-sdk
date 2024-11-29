<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetRecordResponseBody\recordModel;

use AlibabaCloud\Tea\Model;

class authConf extends Model
{
    /**
     * @description The access key ID of the account to which the origin server belongs. This parameter is returned if the origin type is OSS and AuthType is set to private_cross_account, or the origin type is S3 and AuthType is set to private.
     *
     * @example VIxuvJSA2S03f******kp208dy5w7
     *
     * @var string
     */
    public $accessKey;

    /**
     * @description The authentication type of the origin server. Different origins support different authentication types. The origin type refers to the SourceType parameter in this operation. This parameter is returned if the origin type is OSS or S3Valid values:
     *
     *   **public**: public read. This value is returned when the origin is a public OSS or S3 bucket.
     *   **private**: private read. This value is returned when the origin is a private S3 bucket.
     *   **private_same_account**: private read in the same account. This value is returned when the origin is a private OSS bucket in your account.
     *   **private_cross_account**: private read across accounts. This value is returned when the origin is a private OSS bucket in a different Alibaba Cloud account.
     *
     * @example public
     *
     * @var string
     */
    public $authType;

    /**
     * @description The region of the origin. If the origin type is S3, you must specify this value. You can obtain the region information from the official website of S3.
     *
     * @example us-east-1
     *
     * @var string
     */
    public $region;

    /**
     * @description The secret access key of the account to which the origin server belongs. This parameter is returned if the origin type is OSS and AuthType is set to private_cross_account, or the origin type is S3 and AuthType is set to private.SecretKey
     *
     * @example u0Nkg5gBK*******QF5wvKMM504JUHt
     *
     * @var string
     */
    public $secretKey;

    /**
     * @description The version of the signature algorithm. This parameter is returned when the origin type is S3 and AuthType is private. The following two types are supported:
     *
     *   **v2**
     *   **v4**
     *
     * If this parameter is left empty, the default value v4 is used.
     * @example v2
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'accessKey' => 'AccessKey',
        'authType'  => 'AuthType',
        'region'    => 'Region',
        'secretKey' => 'SecretKey',
        'version'   => 'Version',
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
