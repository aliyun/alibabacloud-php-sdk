<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;

class ModifyInstanceConfigRequest extends Model
{
    /**
     * @var string
     */
    public $addConfigList;

    /**
     * @var string
     */
    public $configList;

    /**
     * @var string
     */
    public $deleteConfigList;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $reason;

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

    /**
     * @var bool
     */
    public $fastMode;

    /**
     * @var bool
     */
    public $restart;
    protected $_name = [
        'addConfigList' => 'AddConfigList',
        'configList' => 'ConfigList',
        'deleteConfigList' => 'DeleteConfigList',
        'instanceId' => 'InstanceId',
        'reason' => 'Reason',
        'configsToAdd' => 'configsToAdd',
        'configsToDelete' => 'configsToDelete',
        'configsToUpdate' => 'configsToUpdate',
        'fastMode' => 'fastMode',
        'restart' => 'restart',
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
        if (null !== $this->addConfigList) {
            $res['AddConfigList'] = $this->addConfigList;
        }

        if (null !== $this->configList) {
            $res['ConfigList'] = $this->configList;
        }

        if (null !== $this->deleteConfigList) {
            $res['DeleteConfigList'] = $this->deleteConfigList;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
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

        if (null !== $this->fastMode) {
            $res['fastMode'] = $this->fastMode;
        }

        if (null !== $this->restart) {
            $res['restart'] = $this->restart;
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
        if (isset($map['AddConfigList'])) {
            $model->addConfigList = $map['AddConfigList'];
        }

        if (isset($map['ConfigList'])) {
            $model->configList = $map['ConfigList'];
        }

        if (isset($map['DeleteConfigList'])) {
            $model->deleteConfigList = $map['DeleteConfigList'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
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

        if (isset($map['fastMode'])) {
            $model->fastMode = $map['fastMode'];
        }

        if (isset($map['restart'])) {
            $model->restart = $map['restart'];
        }

        return $model;
    }
}
