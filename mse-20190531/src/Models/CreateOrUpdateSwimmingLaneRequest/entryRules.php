<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneRequest\entryRules\restItems;

class entryRules extends Model
{
    /**
     * @var string
     */
    public $condition;
    /**
     * @var string[]
     */
    public $paths;
    /**
     * @var int
     */
    public $priority;
    /**
     * @var restItems[]
     */
    public $restItems;
    protected $_name = [
        'condition' => 'Condition',
        'paths'     => 'Paths',
        'priority'  => 'Priority',
        'restItems' => 'RestItems',
    ];

    public function validate()
    {
        if (\is_array($this->paths)) {
            Model::validateArray($this->paths);
        }
        if (\is_array($this->restItems)) {
            Model::validateArray($this->restItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }

        if (null !== $this->paths) {
            if (\is_array($this->paths)) {
                $res['Paths'] = [];
                $n1           = 0;
                foreach ($this->paths as $item1) {
                    $res['Paths'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->restItems) {
            if (\is_array($this->restItems)) {
                $res['RestItems'] = [];
                $n1               = 0;
                foreach ($this->restItems as $item1) {
                    $res['RestItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }

        if (isset($map['Paths'])) {
            if (!empty($map['Paths'])) {
                $model->paths = [];
                $n1           = 0;
                foreach ($map['Paths'] as $item1) {
                    $model->paths[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['RestItems'])) {
            if (!empty($map['RestItems'])) {
                $model->restItems = [];
                $n1               = 0;
                foreach ($map['RestItems'] as $item1) {
                    $model->restItems[$n1++] = restItems::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
