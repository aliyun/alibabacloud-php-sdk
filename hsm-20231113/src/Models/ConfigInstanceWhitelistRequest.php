<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Tea\Model;

class ConfigInstanceWhitelistRequest extends Model
{
    /**
     * @description The ID of the HSM.
     *
     * This parameter is required.
     *
     * @example hsm-cn-vj30bil8****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description A list of IP addresses that you want to configure in the whitelist. Separate multiple IP addresses with spaces or commas (,).
     *
     * This parameter is required.
     *
     * @example 18.68.XX.XX,18.68.XX.XX
     *
     * @var string
     */
    public $whitelist;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'whitelist' => 'Whitelist',
    ];

    public function validate() {}

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
     * @return ConfigInstanceWhitelistRequest
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
