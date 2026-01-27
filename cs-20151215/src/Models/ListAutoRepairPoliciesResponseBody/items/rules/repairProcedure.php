<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ListAutoRepairPoliciesResponseBody\items\rules;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\ListAutoRepairPoliciesResponseBody\items\rules\repairProcedure\intervention;

class repairProcedure extends Model
{
    /**
     * @var mixed[]
     */
    public $config;

    /**
     * @var intervention
     */
    public $intervention;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'config' => 'config',
        'intervention' => 'intervention',
        'name' => 'name',
    ];

    public function validate()
    {
        if (\is_array($this->config)) {
            Model::validateArray($this->config);
        }
        if (null !== $this->intervention) {
            $this->intervention->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            if (\is_array($this->config)) {
                $res['config'] = [];
                foreach ($this->config as $key1 => $value1) {
                    $res['config'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->intervention) {
            $res['intervention'] = null !== $this->intervention ? $this->intervention->toArray($noStream) : $this->intervention;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['config'])) {
            if (!empty($map['config'])) {
                $model->config = [];
                foreach ($map['config'] as $key1 => $value1) {
                    $model->config[$key1] = $value1;
                }
            }
        }

        if (isset($map['intervention'])) {
            $model->intervention = intervention::fromMap($map['intervention']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
