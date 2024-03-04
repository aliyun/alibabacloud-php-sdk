<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig\ymlConfig;

use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig\ymlConfig\assessor\classArgs;
use AlibabaCloud\Tea\Model;

class assessor extends Model
{
    /**
     * @var classArgs
     */
    public $classArgs;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'classArgs' => 'class_args',
        'name'      => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classArgs) {
            $res['class_args'] = null !== $this->classArgs ? $this->classArgs->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assessor
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['class_args'])) {
            $model->classArgs = classArgs::fromMap($map['class_args']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
