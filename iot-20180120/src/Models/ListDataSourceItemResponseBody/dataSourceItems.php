<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListDataSourceItemResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListDataSourceItemResponseBody\dataSourceItems\dataSourceItem;

class dataSourceItems extends Model
{
    /**
     * @var dataSourceItem[]
     */
    public $dataSourceItem;
    protected $_name = [
        'dataSourceItem' => 'dataSourceItem',
    ];

    public function validate()
    {
        if (\is_array($this->dataSourceItem)) {
            Model::validateArray($this->dataSourceItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceItem) {
            if (\is_array($this->dataSourceItem)) {
                $res['dataSourceItem'] = [];
                $n1 = 0;
                foreach ($this->dataSourceItem as $item1) {
                    $res['dataSourceItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['dataSourceItem'])) {
            if (!empty($map['dataSourceItem'])) {
                $model->dataSourceItem = [];
                $n1 = 0;
                foreach ($map['dataSourceItem'] as $item1) {
                    $model->dataSourceItem[$n1] = dataSourceItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
