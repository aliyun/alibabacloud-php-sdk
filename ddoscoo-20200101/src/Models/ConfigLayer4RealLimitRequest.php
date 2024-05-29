<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ConfigLayer4RealLimitRequest extends Model
{
    /**
     * @description The ID of the Anti-DDoS Pro or Anti-DDoS Premium instance.
     *
     * This parameter is required.
     * @example ddoscoo-cn-XXXXX
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Specifies the threshold of the clean bandwidth. Valid values: 0 to 15360. The value 0 indicates that rate limiting is never triggered. Unit: Mbit/s
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $limitValue;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'limitValue' => 'LimitValue',
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
        if (null !== $this->limitValue) {
            $res['LimitValue'] = $this->limitValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigLayer4RealLimitRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LimitValue'])) {
            $model->limitValue = $map['LimitValue'];
        }

        return $model;
    }
}
