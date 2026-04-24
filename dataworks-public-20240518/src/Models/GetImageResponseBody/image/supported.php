<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetImageResponseBody\image;

use AlibabaCloud\Dara\Model;

class supported extends Model
{
    /**
     * @var string
     */
    public $module;

    /**
     * @var string[]
     */
    public $taskTypes;
    protected $_name = [
        'module' => 'Module',
        'taskTypes' => 'TaskTypes',
    ];

    public function validate()
    {
        if (\is_array($this->taskTypes)) {
            Model::validateArray($this->taskTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }

        if (null !== $this->taskTypes) {
            if (\is_array($this->taskTypes)) {
                $res['TaskTypes'] = [];
                $n1 = 0;
                foreach ($this->taskTypes as $item1) {
                    $res['TaskTypes'][$n1] = $item1;
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
        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }

        if (isset($map['TaskTypes'])) {
            if (!empty($map['TaskTypes'])) {
                $model->taskTypes = [];
                $n1 = 0;
                foreach ($map['TaskTypes'] as $item1) {
                    $model->taskTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
