<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ADBAI\V20250812\Models\ModifyEmbodiedAIPlatformRequest\rayTrainConfig\terminalConfig;

use AlibabaCloud\Dara\Model;

class acrConfig extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $namespaces;

    /**
     * @var string
     */
    public $registry;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'namespaces' => 'Namespaces',
        'registry' => 'Registry',
    ];

    public function validate()
    {
        if (\is_array($this->namespaces)) {
            Model::validateArray($this->namespaces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->namespaces) {
            if (\is_array($this->namespaces)) {
                $res['Namespaces'] = [];
                $n1 = 0;
                foreach ($this->namespaces as $item1) {
                    $res['Namespaces'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->registry) {
            $res['Registry'] = $this->registry;
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

        if (isset($map['Namespaces'])) {
            if (!empty($map['Namespaces'])) {
                $model->namespaces = [];
                $n1 = 0;
                foreach ($map['Namespaces'] as $item1) {
                    $model->namespaces[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Registry'])) {
            $model->registry = $map['Registry'];
        }

        return $model;
    }
}
