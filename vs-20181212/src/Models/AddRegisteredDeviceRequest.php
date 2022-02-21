<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class AddRegisteredDeviceRequest extends Model
{
    /**
     * @var string
     */
    public $dsn;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $registerCode;

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
        'ownerId'      => 'OwnerId',
        'registerCode' => 'RegisterCode',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->registerCode) {
            $res['RegisterCode'] = $this->registerCode;
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
     * @return AddRegisteredDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dsn'])) {
            $model->dsn = $map['Dsn'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegisterCode'])) {
            $model->registerCode = $map['RegisterCode'];
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
