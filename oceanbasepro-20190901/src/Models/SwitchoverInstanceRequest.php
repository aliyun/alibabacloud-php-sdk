<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class SwitchoverInstanceRequest extends Model
{
    /**
     * @var bool
     */
    public $forced;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $targetInstanceId;
    protected $_name = [
        'forced' => 'Forced',
        'instanceId' => 'InstanceId',
        'targetInstanceId' => 'TargetInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forced) {
            $res['Forced'] = $this->forced;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
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
        if (isset($map['Forced'])) {
            $model->forced = $map['Forced'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }

        return $model;
    }
}
