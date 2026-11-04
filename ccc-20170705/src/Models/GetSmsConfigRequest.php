<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Dara\Model;

class GetSmsConfigRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int[]
     */
    public $scenario;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'scenario' => 'Scenario',
    ];

    public function validate()
    {
        if (\is_array($this->scenario)) {
            Model::validateArray($this->scenario);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->scenario) {
            if (\is_array($this->scenario)) {
                $res['Scenario'] = [];
                $n1 = 0;
                foreach ($this->scenario as $item1) {
                    $res['Scenario'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Scenario'])) {
            if (!empty($map['Scenario'])) {
                $model->scenario = [];
                $n1 = 0;
                foreach ($map['Scenario'] as $item1) {
                    $model->scenario[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
