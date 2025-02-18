<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRoleAclResponseBody\data;

use AlibabaCloud\Dara\Model;

class function_ extends Model
{
    /**
     * @var string[]
     */
    public $actions;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $schemaName;
    protected $_name = [
        'actions'    => 'actions',
        'name'       => 'name',
        'schemaName' => 'schemaName',
    ];

    public function validate()
    {
        if (\is_array($this->actions)) {
            Model::validateArray($this->actions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actions) {
            if (\is_array($this->actions)) {
                $res['actions'] = [];
                $n1             = 0;
                foreach ($this->actions as $item1) {
                    $res['actions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->schemaName) {
            $res['schemaName'] = $this->schemaName;
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
        if (isset($map['actions'])) {
            if (!empty($map['actions'])) {
                $model->actions = [];
                $n1             = 0;
                foreach ($map['actions'] as $item1) {
                    $model->actions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['schemaName'])) {
            $model->schemaName = $map['schemaName'];
        }

        return $model;
    }
}
