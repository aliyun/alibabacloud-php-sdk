<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DescribeGatewayLDAPInfoResponseBody extends Model
{
    /**
     * @example dc=sgwte***,dc=local
     *
     * @var string
     */
    public $baseDN;

    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example true
     *
     * @var bool
     */
    public $isEnabled;

    /**
     * @example false
     *
     * @var bool
     */
    public $isTls;

    /**
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @example 89398CFB-4EB6-4C7E-BB3C-EF213AC8FA**
     *
     * @var string
     */
    public $requestId;

    /**
     * @example cn=admin,dc=sgwte***,dc=local
     *
     * @var string
     */
    public $rootDN;

    /**
     * @example 47.101.59.188
     *
     * @var string
     */
    public $serverIp;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'baseDN'    => 'BaseDN',
        'code'      => 'Code',
        'isEnabled' => 'IsEnabled',
        'isTls'     => 'IsTls',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'rootDN'    => 'RootDN',
        'serverIp'  => 'ServerIp',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseDN) {
            $res['BaseDN'] = $this->baseDN;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->isEnabled) {
            $res['IsEnabled'] = $this->isEnabled;
        }
        if (null !== $this->isTls) {
            $res['IsTls'] = $this->isTls;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->rootDN) {
            $res['RootDN'] = $this->rootDN;
        }
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGatewayLDAPInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseDN'])) {
            $model->baseDN = $map['BaseDN'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IsEnabled'])) {
            $model->isEnabled = $map['IsEnabled'];
        }
        if (isset($map['IsTls'])) {
            $model->isTls = $map['IsTls'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RootDN'])) {
            $model->rootDN = $map['RootDN'];
        }
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
