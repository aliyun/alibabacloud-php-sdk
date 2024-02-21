<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\RunCloudBenchTaskResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\RunCloudBenchTaskResponseBody\data\preCheckItem;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->preCheckItem) {
            $res['PreCheckItem'] = [];
            if (null !== $this->preCheckItem && \is_array($this->preCheckItem)) {
                $n = 0;
                foreach ($this->preCheckItem as $item) {
                    $res['PreCheckItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PreCheckItem'])) {
            if (!empty($map['PreCheckItem'])) {
                $model->preCheckItem = [];
                $n                   = 0;
                foreach ($map['PreCheckItem'] as $item) {
                    $model->preCheckItem[$n++] = null !== $item ? preCheckItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
