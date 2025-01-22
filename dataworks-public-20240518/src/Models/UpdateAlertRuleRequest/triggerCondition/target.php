<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleRequest\triggerCondition;

use AlibabaCloud\Dara\Model;

class target extends Model
{
    /**
     * @var int[]
     */
    public $allowTasks;
    /**
     * @var int[]
     */
    public $ids;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'allowTasks' => 'AllowTasks',
        'ids'        => 'Ids',
        'type'       => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->allowTasks)) {
            Model::validateArray($this->allowTasks);
        }
        if (\is_array($this->ids)) {
            Model::validateArray($this->ids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowTasks) {
            if (\is_array($this->allowTasks)) {
                $res['AllowTasks'] = [];
                $n1                = 0;
                foreach ($this->allowTasks as $item1) {
                    $res['AllowTasks'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ids) {
            if (\is_array($this->ids)) {
                $res['Ids'] = [];
                $n1         = 0;
                foreach ($this->ids as $item1) {
                    $res['Ids'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AllowTasks'])) {
            if (!empty($map['AllowTasks'])) {
                $model->allowTasks = [];
                $n1                = 0;
                foreach ($map['AllowTasks'] as $item1) {
                    $model->allowTasks[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Ids'])) {
            if (!empty($map['Ids'])) {
                $model->ids = [];
                $n1         = 0;
                foreach ($map['Ids'] as $item1) {
                    $model->ids[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
