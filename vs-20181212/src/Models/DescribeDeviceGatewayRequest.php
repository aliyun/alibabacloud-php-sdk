<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeDeviceGatewayRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var int
     */
    public $expire;
    protected $_name = [
        'ownerId'  => 'OwnerId',
        'id'       => 'Id',
        'clientIp' => 'ClientIp',
        'expire'   => 'Expire',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDeviceGatewayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }

        return $model;
    }
}
