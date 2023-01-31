<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeTenantBindNumberResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example e2d7a184-7d6c-45d4-ac24-34ab48f54669
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example true
     *
     * @var bool
     */
    public $isBinding;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'isBinding'    => 'IsBinding',
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
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->isBinding) {
            $res['IsBinding'] = $this->isBinding;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['IsBinding'])) {
            $model->isBinding = $map['IsBinding'];
        }

        return $model;
    }
}
