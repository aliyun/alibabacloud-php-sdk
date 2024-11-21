<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateRecordRequest;

use AlibabaCloud\Tea\Model;

class authConf extends Model
{
    /**
     * @description The access key of the account to which the origin server belongs. This parameter is required when the SourceType is OSS, and AuthType is private_cross_account, or when the SourceType is S3 and AuthType is private.
     *
     * @example u0Nkg5gBK*******QF5wvKMM504JUHt
     *
     * @var string
     */
    public $accessKey;

    /**
     * @description The authentication type of the origin server. Different origins support different authentication types. The type of origin refers to the SourceType parameter in this operation. If the type of origin is OSS or S3, you must specify the authentication type of the origin. Valid values:
     *
     *   **public**: public read. Select this value when the origin type is OSS or S3 and the origin access is public read.
     *   **private**: private read. Select this value when the origin type is S3 and the origin access is private read.
     *   **private_same_account**: private read under the same account. Select this value when the origin type is OSS, the origins belong to the same Alibaba Cloud account, and the origins have private read access.
     *   **private_cross_account**: private read cross accounts. Select this value when the origin type is OSS, the origins belong to different Alibaba Cloud accounts, and the origins have private read access.
     *
     * @example private
     *
     * @var string
     */
    public $authType;

    /**
     * @description The region of the origin. If the origin type is S3, you must specify this value. You can get the region information from the official website of S3.
     *
     * @example us-east-1
     *
     * @var string
     */
    public $region;

    /**
     * @description The secret access key of the account to which the origin server belongs. This parameter is required when the SourceType is OSS, and AuthType is private_same_account, or when the SourceType is S3 and AuthType is private.
     *
     * @example VIxuvJSA2S03f******kp208dy5w7
     *
     * @var string
     */
    public $secretKey;

    /**
     * @description The version of the signature algorithm. This parameter is required when the origin type is S3 and AuthType is private. The following two types are supported:
     *
     *   **v2**
     *   **v4**
     *
     * If you leave this parameter empty, the default value v4 is used.
     * @example v4
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
