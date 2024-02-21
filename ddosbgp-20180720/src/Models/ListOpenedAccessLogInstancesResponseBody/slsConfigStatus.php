<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListOpenedAccessLogInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class slsConfigStatus extends Model
{
    /**
     * @description Indicates whether log analysis was enabled for the Anti-DDoS Origin instance. Valid values:
     *
     *   **true**: Log analysis was enabled.
     *   **false**: Log analysis was disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The ID of the Anti-DDoS Origin instance.
     *
     * @example ddosbgp-cn-m7r1zce2****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'enable'     => 'Enable',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slsConfigStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
