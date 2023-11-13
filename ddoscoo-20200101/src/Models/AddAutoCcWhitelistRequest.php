<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class AddAutoCcWhitelistRequest extends Model
{
    /**
     * @description This parameter is deprecated.
     *
     * > This parameter indicates the validity period of the IP address blacklist. By default, the traffic from the IP addresses that you add to the whitelist is always allowed. You do not need to set this parameter.
     * @example 0
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description The ID of the instance.
     *
     * > You can call the [DescribeInstanceIds](~~157459~~) operation to query the IDs of all instances.
     * @example ddoscoo-cn-mp91j1ao****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The configuration of the IP addresses that you want to add to the whitelist. The value is a string that consists of JSON arrays. Each element in a JSON array is a JSON struct that contains the following fields:
     *
     *   **src**: the IP address that you want to add. This parameter is required. Data type: string.
     *
     * @example [{"src":"192.XX.XX.1"},{"src":"192.XX.XX.2"}]
     *
     * @var string
     */
    public $whitelist;
    protected $_name = [
        'expireTime' => 'ExpireTime',
        'instanceId' => 'InstanceId',
        'whitelist'  => 'Whitelist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->whitelist) {
            $res['Whitelist'] = $this->whitelist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddAutoCcWhitelistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Whitelist'])) {
            $model->whitelist = $map['Whitelist'];
        }

        return $model;
    }
}
