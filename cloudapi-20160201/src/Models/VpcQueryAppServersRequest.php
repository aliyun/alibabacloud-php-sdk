<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models;

use AlibabaCloud\Tea\Model;

class VpcQueryAppServersRequest extends Model
{
    /**
     * @var string
     */
    public $addressPoolId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $serverIp;
    protected $_name = [
        'addressPoolId' => 'AddressPoolId',
        'appId'         => 'AppId',
        'serverIp'      => 'ServerIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressPoolId) {
            $res['AddressPoolId'] = $this->addressPoolId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VpcQueryAppServersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressPoolId'])) {
            $model->addressPoolId = $map['AddressPoolId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }

        return $model;
    }
}
