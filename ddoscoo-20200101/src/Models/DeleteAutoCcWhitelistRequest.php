<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DeleteAutoCcWhitelistRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example ddoscoo-cn-mp91j1ao****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The IP addresses that you want to manage. This parameter is a JSON string. This parameter is a JSON string. The string contains the following field:
     *
     *   **src**: the IP address. This field is required and must be of the string type.
     *
     * This parameter is required.
     * @example [{"src":"1.1.1.1"},{"src":"2.2.2.2"}]
     *
     * @var string
     */
    public $whitelist;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'whitelist'  => 'Whitelist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return DeleteAutoCcWhitelistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Whitelist'])) {
            $model->whitelist = $map['Whitelist'];
        }

        return $model;
    }
}
