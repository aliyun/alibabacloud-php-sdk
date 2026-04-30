<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyJVSInstanceRequest\creditConfig;

class ModifyJVSInstanceRequest extends Model
{
    /**
     * @var bool
     */
    public $applyToAll;

    /**
     * @var creditConfig[]
     */
    public $creditConfig;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $instanceName;
    protected $_name = [
        'applyToAll' => 'ApplyToAll',
        'creditConfig' => 'CreditConfig',
        'instanceIds' => 'InstanceIds',
        'instanceName' => 'InstanceName',
    ];

    public function validate()
    {
        if (\is_array($this->creditConfig)) {
            Model::validateArray($this->creditConfig);
        }
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyToAll) {
            $res['ApplyToAll'] = $this->applyToAll;
        }

        if (null !== $this->creditConfig) {
            if (\is_array($this->creditConfig)) {
                $res['CreditConfig'] = [];
                $n1 = 0;
                foreach ($this->creditConfig as $item1) {
                    $res['CreditConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
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
        if (isset($map['ApplyToAll'])) {
            $model->applyToAll = $map['ApplyToAll'];
        }

        if (isset($map['CreditConfig'])) {
            if (!empty($map['CreditConfig'])) {
                $model->creditConfig = [];
                $n1 = 0;
                foreach ($map['CreditConfig'] as $item1) {
                    $model->creditConfig[$n1] = creditConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        return $model;
    }
}
