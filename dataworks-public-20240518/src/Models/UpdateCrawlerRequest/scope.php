<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateCrawlerRequest;

use AlibabaCloud\Dara\Model;

class scope extends Model
{
    /**
     * @var string
     */
    public $excludeRegex;

    /**
     * @var string[]
     */
    public $items;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'excludeRegex' => 'ExcludeRegex',
        'items' => 'Items',
        'unit' => 'Unit',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->excludeRegex) {
            $res['ExcludeRegex'] = $this->excludeRegex;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['Items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['Items'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
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
        if (isset($map['ExcludeRegex'])) {
            $model->excludeRegex = $map['ExcludeRegex'];
        }

        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['Items'] as $item1) {
                    $model->items[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
