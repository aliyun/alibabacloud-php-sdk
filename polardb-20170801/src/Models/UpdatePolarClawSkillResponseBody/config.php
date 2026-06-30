<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\UpdatePolarClawSkillResponseBody;

use AlibabaCloud\Dara\Model;

class config extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string[]
     */
    public $env;
    protected $_name = [
        'enabled' => 'Enabled',
        'env' => 'Env',
    ];

    public function validate()
    {
        if (\is_array($this->env)) {
            Model::validateArray($this->env);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->env) {
            if (\is_array($this->env)) {
                $res['Env'] = [];
                foreach ($this->env as $key1 => $value1) {
                    $res['Env'][$key1] = $value1;
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
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Env'])) {
            if (!empty($map['Env'])) {
                $model->env = [];
                foreach ($map['Env'] as $key1 => $value1) {
                    $model->env[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
