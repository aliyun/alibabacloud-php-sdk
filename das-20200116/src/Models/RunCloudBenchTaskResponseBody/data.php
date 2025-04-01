<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\RunCloudBenchTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\RunCloudBenchTaskResponseBody\data\preCheckItem;

class data extends Model
{
    /**
     * @var preCheckItem[]
     */
    public $preCheckItem;
    protected $_name = [
        'preCheckItem' => 'PreCheckItem',
    ];

    public function validate()
    {
        if (\is_array($this->preCheckItem)) {
            Model::validateArray($this->preCheckItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->preCheckItem) {
            if (\is_array($this->preCheckItem)) {
                $res['PreCheckItem'] = [];
                $n1 = 0;
                foreach ($this->preCheckItem as $item1) {
                    $res['PreCheckItem'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PreCheckItem'])) {
            if (!empty($map['PreCheckItem'])) {
                $model->preCheckItem = [];
                $n1 = 0;
                foreach ($map['PreCheckItem'] as $item1) {
                    $model->preCheckItem[$n1++] = preCheckItem::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
