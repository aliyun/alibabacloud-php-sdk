<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListOpenedAccessLogInstancesResponse;

use AlibabaCloud\Tea\Model;

class slsConfigStatus extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'enable'     => 'Enable',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        Model::validateRequired('enable', $this->enable, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
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
