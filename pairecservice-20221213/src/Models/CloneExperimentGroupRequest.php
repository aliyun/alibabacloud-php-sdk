<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class CloneExperimentGroupRequest extends Model
{
    /**
     * @var string
     */
    public $environment;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $layerId;
    protected $_name = [
        'environment' => 'Environment',
        'instanceId' => 'InstanceId',
        'layerId' => 'LayerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
