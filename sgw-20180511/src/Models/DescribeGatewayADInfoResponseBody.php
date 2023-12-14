<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DescribeGatewayADInfoResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example test***
     *
     * @var string
     */
    public $domainName;

    /**
     * @example true
     *
     * @var bool
     */
    public $isEnabled;

    /**
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @example 1B0CA0B9-2B0F-478D-ADC5-474C45BF947F
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 47.101.59.199
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

    /**
     * @example alex***
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'code'       => 'Code',
        'domainName' => 'DomainName',
        'isEnabled'  => 'IsEnabled',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'serverIp'   => 'ServerIp',
        'success'    => 'Success',
        'username'   => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->isEnabled) {
            $res['IsEnabled'] = $this->isEnabled;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGatewayADInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['IsEnabled'])) {
            $model->isEnabled = $map['IsEnabled'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
