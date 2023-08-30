<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryAllSwimmingLaneResponseBody\data;

use AlibabaCloud\SDK\Mse\V20190531\Models\QueryAllSwimmingLaneResponseBody\data\entryRules\restItems;
use AlibabaCloud\Tea\Model;

class entryRules extends Model
{
    /**
     * @var string
     */
    public $condition;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string[]
     */
    public $paths;

    /**
     * @var restItems[]
     */
    public $restItems;
    protected $_name = [
        'condition' => 'condition',
        'path'      => 'path',
        'paths'     => 'paths',
        'restItems' => 'restItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->condition) {
            $res['condition'] = $this->condition;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->paths) {
            $res['paths'] = $this->paths;
        }
        if (null !== $this->restItems) {
            $res['restItems'] = [];
            if (null !== $this->restItems && \is_array($this->restItems)) {
                $n = 0;
                foreach ($this->restItems as $item) {
                    $res['restItems'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['condition'])) {
            $model->condition = $map['condition'];
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['paths'])) {
            if (!empty($map['paths'])) {
                $model->paths = $map['paths'];
            }
        }
        if (isset($map['restItems'])) {
            if (!empty($map['restItems'])) {
                $model->restItems = [];
                $n                = 0;
                foreach ($map['restItems'] as $item) {
                    $model->restItems[$n++] = null !== $item ? restItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
