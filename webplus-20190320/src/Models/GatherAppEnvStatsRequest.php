<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\Tea\Model;

class GatherAppEnvStatsRequest extends Model
{
    /**
     * @var string
     */
    public $envId;

    /**
     * @var string
     */
    public $targetInstances;
    protected $_name = [
        'envId'           => 'EnvId',
        'targetInstances' => 'TargetInstances',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->targetInstances) {
            $res['TargetInstances'] = $this->targetInstances;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GatherAppEnvStatsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['TargetInstances'])) {
            $model->targetInstances = $map['TargetInstances'];
        }

        return $model;
    }
}
