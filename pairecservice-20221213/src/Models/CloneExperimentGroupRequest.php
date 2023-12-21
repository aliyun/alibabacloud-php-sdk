<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CloneExperimentGroupRequest extends Model
{
    /**
     * @example Daily
     *
     * @var string
     */
    public $environment;

    /**
     * @example pairec-cn-abcdefg1234
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 3
     *
     * @var string
     */
    public $layerId;
    protected $_name = [
        'environment' => 'Environment',
        'instanceId'  => 'InstanceId',
        'layerId'     => 'LayerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->environment) {
            $res['Environment'] = $this->environment;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->layerId) {
            $res['LayerId'] = $this->layerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloneExperimentGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Environment'])) {
            $model->environment = $map['Environment'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LayerId'])) {
            $model->layerId = $map['LayerId'];
        }

        return $model;
    }
}
