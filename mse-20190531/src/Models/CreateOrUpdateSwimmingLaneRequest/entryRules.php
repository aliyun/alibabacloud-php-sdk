<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneRequest;

use AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneRequest\entryRules\restItems;
use AlibabaCloud\Tea\Model;

class entryRules extends Model
{
    /**
     * @var string
     */
    public $condition;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $path;

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
        'enable'    => 'Enable',
        'path'      => 'Path',
        'priority'  => 'Priority',
        'restItems' => 'RestItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->restItems) {
            $res['RestItems'] = [];
            if (null !== $this->restItems && \is_array($this->restItems)) {
                $n = 0;
                foreach ($this->restItems as $item) {
                    $res['RestItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entryRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RestItems'])) {
            if (!empty($map['RestItems'])) {
                $model->restItems = [];
                $n                = 0;
                foreach ($map['RestItems'] as $item) {
                    $model->restItems[$n++] = null !== $item ? restItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
