<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class AddNetworkInterfaceToInstanceRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoStart;

    /**
     * @example yourInstance ID
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example [{"ipType": "public", "ipAddressType": "ipv6" }]
     *
     * @var string
     */
    public $networks;
    protected $_name = [
        'autoStart'  => 'AutoStart',
        'instanceId' => 'InstanceId',
        'networks'   => 'Networks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoStart) {
            $res['AutoStart'] = $this->autoStart;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->networks) {
            $res['Networks'] = $this->networks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddNetworkInterfaceToInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoStart'])) {
            $model->autoStart = $map['AutoStart'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Networks'])) {
            $model->networks = $map['Networks'];
        }

        return $model;
    }
}
