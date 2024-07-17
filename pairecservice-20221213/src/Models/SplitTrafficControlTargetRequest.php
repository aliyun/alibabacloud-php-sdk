<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class SplitTrafficControlTargetRequest extends Model
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
     * @var int[]
     */
    public $setPoints;

    /**
     * @var int[]
     */
    public $setValues;

    /**
     * @var int[]
     */
    public $timePoints;
    protected $_name = [
        'environment' => 'Environment',
        'instanceId'  => 'InstanceId',
        'setPoints'   => 'SetPoints',
        'setValues'   => 'SetValues',
        'timePoints'  => 'TimePoints',
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
        if (null !== $this->setPoints) {
            $res['SetPoints'] = $this->setPoints;
        }
        if (null !== $this->setValues) {
            $res['SetValues'] = $this->setValues;
        }
        if (null !== $this->timePoints) {
            $res['TimePoints'] = $this->timePoints;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SplitTrafficControlTargetRequest
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
        if (isset($map['SetPoints'])) {
            if (!empty($map['SetPoints'])) {
                $model->setPoints = $map['SetPoints'];
            }
        }
        if (isset($map['SetValues'])) {
            if (!empty($map['SetValues'])) {
                $model->setValues = $map['SetValues'];
            }
        }
        if (isset($map['TimePoints'])) {
            if (!empty($map['TimePoints'])) {
                $model->timePoints = $map['TimePoints'];
            }
        }

        return $model;
    }
}
