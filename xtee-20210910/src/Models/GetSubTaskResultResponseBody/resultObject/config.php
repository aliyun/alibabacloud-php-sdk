<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\GetSubTaskResultResponseBody\resultObject;

use AlibabaCloud\Dara\Model;

class config extends Model
{
    /**
     * @var string
     */
    public $item;

    /**
     * @var string
     */
    public $itemDesc;

    /**
     * @var string
     */
    public $sampleItem;

    /**
     * @var string[]
     */
    public $sampleItems;
    protected $_name = [
        'item' => 'Item',
        'itemDesc' => 'ItemDesc',
        'sampleItem' => 'SampleItem',
        'sampleItems' => 'SampleItems',
    ];

    public function validate()
    {
        if (\is_array($this->sampleItems)) {
            Model::validateArray($this->sampleItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }

        if (null !== $this->itemDesc) {
            $res['ItemDesc'] = $this->itemDesc;
        }

        if (null !== $this->sampleItem) {
            $res['SampleItem'] = $this->sampleItem;
        }

        if (null !== $this->sampleItems) {
            if (\is_array($this->sampleItems)) {
                $res['SampleItems'] = [];
                $n1 = 0;
                foreach ($this->sampleItems as $item1) {
                    $res['SampleItems'][$n1] = $item1;
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
        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }

        if (isset($map['ItemDesc'])) {
            $model->itemDesc = $map['ItemDesc'];
        }

        if (isset($map['SampleItem'])) {
            $model->sampleItem = $map['SampleItem'];
        }

        if (isset($map['SampleItems'])) {
            if (!empty($map['SampleItems'])) {
                $model->sampleItems = [];
                $n1 = 0;
                foreach ($map['SampleItems'] as $item1) {
                    $model->sampleItems[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
