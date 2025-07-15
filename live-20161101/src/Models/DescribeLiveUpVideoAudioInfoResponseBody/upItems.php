<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem;
use AlibabaCloud\Tea\Model;

class upItems extends Model
{
    /**
     * @var publishItem[]
     */
    public $publishItem;
    protected $_name = [
        'publishItem' => 'PublishItem',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->publishItem) {
            $res['PublishItem'] = [];
            if (null !== $this->publishItem && \is_array($this->publishItem)) {
                $n = 0;
                foreach ($this->publishItem as $item) {
                    $res['PublishItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return upItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PublishItem'])) {
            if (!empty($map['PublishItem'])) {
                $model->publishItem = [];
                $n = 0;
                foreach ($map['PublishItem'] as $item) {
                    $model->publishItem[$n++] = null !== $item ? publishItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
