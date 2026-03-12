<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;

class ModifyInstanceConfigPreCheckRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var InstanceConfigDto[]
     */
    public $configsToAdd;

    /**
     * @var InstanceConfigDto[]
     */
    public $configsToDelete;

    /**
     * @var InstanceConfigDto[]
     */
    public $configsToUpdate;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'configsToAdd' => 'configsToAdd',
        'configsToDelete' => 'configsToDelete',
        'configsToUpdate' => 'configsToUpdate',
    ];

    public function validate()
    {
        if (\is_array($this->configsToAdd)) {
            Model::validateArray($this->configsToAdd);
        }
        if (\is_array($this->configsToDelete)) {
            Model::validateArray($this->configsToDelete);
        }
        if (\is_array($this->configsToUpdate)) {
            Model::validateArray($this->configsToUpdate);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->configsToAdd) {
            if (\is_array($this->configsToAdd)) {
                $res['configsToAdd'] = [];
                $n1 = 0;
                foreach ($this->configsToAdd as $item1) {
                    $res['configsToAdd'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->configsToDelete) {
            if (\is_array($this->configsToDelete)) {
                $res['configsToDelete'] = [];
                $n1 = 0;
                foreach ($this->configsToDelete as $item1) {
                    $res['configsToDelete'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->configsToUpdate) {
            if (\is_array($this->configsToUpdate)) {
                $res['configsToUpdate'] = [];
                $n1 = 0;
                foreach ($this->configsToUpdate as $item1) {
                    $res['configsToUpdate'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['configsToAdd'])) {
            if (!empty($map['configsToAdd'])) {
                $model->configsToAdd = [];
                $n1 = 0;
                foreach ($map['configsToAdd'] as $item1) {
                    $model->configsToAdd[$n1] = InstanceConfigDto::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['configsToDelete'])) {
            if (!empty($map['configsToDelete'])) {
                $model->configsToDelete = [];
                $n1 = 0;
                foreach ($map['configsToDelete'] as $item1) {
                    $model->configsToDelete[$n1] = InstanceConfigDto::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['configsToUpdate'])) {
            if (!empty($map['configsToUpdate'])) {
                $model->configsToUpdate = [];
                $n1 = 0;
                foreach ($map['configsToUpdate'] as $item1) {
                    $model->configsToUpdate[$n1] = InstanceConfigDto::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
