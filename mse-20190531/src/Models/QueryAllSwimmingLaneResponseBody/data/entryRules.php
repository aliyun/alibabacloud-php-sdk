<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryAllSwimmingLaneResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryAllSwimmingLaneResponseBody\data\entryRules\restItems;

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
        'path' => 'path',
        'paths' => 'paths',
        'restItems' => 'restItems',
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
            $res['condition'] = $this->condition;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->paths) {
            if (\is_array($this->paths)) {
                $res['paths'] = [];
                $n1 = 0;
                foreach ($this->paths as $item1) {
                    $res['paths'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->restItems) {
            if (\is_array($this->restItems)) {
                $res['restItems'] = [];
                $n1 = 0;
                foreach ($this->restItems as $item1) {
                    $res['restItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['condition'])) {
            $model->condition = $map['condition'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['paths'])) {
            if (!empty($map['paths'])) {
                $model->paths = [];
                $n1 = 0;
                foreach ($map['paths'] as $item1) {
                    $model->paths[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['restItems'])) {
            if (!empty($map['restItems'])) {
                $model->restItems = [];
                $n1 = 0;
                foreach ($map['restItems'] as $item1) {
                    $model->restItems[$n1] = restItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
