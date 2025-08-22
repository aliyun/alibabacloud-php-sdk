<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;

class CreateRoutineRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed[]
     */
    public $envConf;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'Description',
        'envConf' => 'EnvConf',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->envConf)) {
            Model::validateArray($this->envConf);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->envConf) {
            if (\is_array($this->envConf)) {
                $res['EnvConf'] = [];
                foreach ($this->envConf as $key1 => $value1) {
                    $res['EnvConf'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnvConf'])) {
            if (!empty($map['EnvConf'])) {
                $model->envConf = [];
                foreach ($map['EnvConf'] as $key1 => $value1) {
                    $model->envConf[$key1] = $value1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
