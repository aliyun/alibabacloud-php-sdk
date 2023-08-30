<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneRequest;

use AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneRequest\entryRules\restItems;
use AlibabaCloud\Tea\Model;

class entryRules extends Model
{
    /**
     * @example AND
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }
        if (null !== $this->paths) {
            $res['Paths'] = $this->paths;
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
        if (isset($map['Paths'])) {
            if (!empty($map['Paths'])) {
                $model->paths = $map['Paths'];
            }
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
