<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models;

use AlibabaCloud\SDK\Linkvisual\V20230630\Models\BatchBindDeviceRequest\deviceList;
use AlibabaCloud\Tea\Model;

class BatchBindDeviceRequest extends Model
{
    /**
     * @var deviceList[]
     */
    public $deviceList;

    /**
     * @var string
     */
    public $identityId;

    /**
     * @var string
     */
    public $openId;

    /**
     * @var string
     */
    public $openIdAppKey;
    protected $_name = [
        'deviceList'   => 'DeviceList',
        'identityId'   => 'IdentityId',
        'openId'       => 'OpenId',
        'openIdAppKey' => 'OpenIdAppKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceList) {
            $res['DeviceList'] = [];
            if (null !== $this->deviceList && \is_array($this->deviceList)) {
                $n = 0;
                foreach ($this->deviceList as $item) {
                    $res['DeviceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->identityId) {
            $res['IdentityId'] = $this->identityId;
        }
        if (null !== $this->openId) {
            $res['OpenId'] = $this->openId;
        }
        if (null !== $this->openIdAppKey) {
            $res['OpenIdAppKey'] = $this->openIdAppKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchBindDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceList'])) {
            if (!empty($map['DeviceList'])) {
                $model->deviceList = [];
                $n                 = 0;
                foreach ($map['DeviceList'] as $item) {
                    $model->deviceList[$n++] = null !== $item ? deviceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IdentityId'])) {
            $model->identityId = $map['IdentityId'];
        }
        if (isset($map['OpenId'])) {
            $model->openId = $map['OpenId'];
        }
        if (isset($map['OpenIdAppKey'])) {
            $model->openIdAppKey = $map['OpenIdAppKey'];
        }

        return $model;
    }
}
