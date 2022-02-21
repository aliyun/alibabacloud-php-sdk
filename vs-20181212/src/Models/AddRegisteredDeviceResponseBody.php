<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class AddRegisteredDeviceResponseBody extends Model
{
    /**
     * @var string
     */
    public $dsn;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $registerCode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $secretKey;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'dsn'          => 'Dsn',
        'id'           => 'Id',
        'registerCode' => 'RegisterCode',
        'requestId'    => 'RequestId',
        'secretKey'    => 'SecretKey',
        'vendor'       => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dsn) {
            $res['Dsn'] = $this->dsn;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->registerCode) {
            $res['RegisterCode'] = $this->registerCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->secretKey) {
            $res['SecretKey'] = $this->secretKey;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddRegisteredDeviceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dsn'])) {
            $model->dsn = $map['Dsn'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RegisterCode'])) {
            $model->registerCode = $map['RegisterCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecretKey'])) {
            $model->secretKey = $map['SecretKey'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
