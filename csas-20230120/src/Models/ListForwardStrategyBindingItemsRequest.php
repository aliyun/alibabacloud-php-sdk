<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class ListForwardStrategyBindingItemsRequest extends Model
{
    /**
     * @var string[]
     */
    public $forwardIds;

    /**
     * @var string
     */
    public $itemType;
    protected $_name = [
        'forwardIds' => 'ForwardIds',
        'itemType' => 'ItemType',
    ];

    public function validate()
    {
        if (\is_array($this->forwardIds)) {
            Model::validateArray($this->forwardIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forwardIds) {
            if (\is_array($this->forwardIds)) {
                $res['ForwardIds'] = [];
                $n1 = 0;
                foreach ($this->forwardIds as $item1) {
                    $res['ForwardIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->itemType) {
            $res['ItemType'] = $this->itemType;
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
        if (isset($map['ForwardIds'])) {
            if (!empty($map['ForwardIds'])) {
                $model->forwardIds = [];
                $n1 = 0;
                foreach ($map['ForwardIds'] as $item1) {
                    $model->forwardIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ItemType'])) {
            $model->itemType = $map['ItemType'];
        }

        return $model;
    }
}
