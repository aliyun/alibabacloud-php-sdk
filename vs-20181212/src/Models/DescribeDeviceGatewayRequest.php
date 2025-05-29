<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class DescribeDeviceGatewayRequest extends Model
{
    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var int
     */
    public $expire;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'clientIp' => 'ClientIp',
        'expire' => 'Expire',
        'id' => 'Id',
        'ownerId' => 'OwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }

        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }

        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
