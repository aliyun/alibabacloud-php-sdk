<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetRecordResponseBody\recordModel;

use AlibabaCloud\Tea\Model;

class authConf extends Model
{
    /**
     * @example VIxuvJSA2S03f******kp208dy5w7
     *
     * @var string
     */
    public $accessKey;

    /**
     * @example public
     *
     * @var string
     */
    public $authType;

    /**
     * @example us-east-1
     *
     * @var string
     */
    public $region;

    /**
     * @example u0Nkg5gBK*******QF5wvKMM504JUHt
     *
     * @var string
     */
    public $secretKey;

    /**
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
