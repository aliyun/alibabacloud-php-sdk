<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem;

class upItems extends Model
{
    /**
     * @var publishItem[]
     */
    public $publishItem;
    protected $_name = [
        'publishItem' => 'PublishItem',
    ];

    public function validate()
    {
        if (\is_array($this->publishItem)) {
            Model::validateArray($this->publishItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->publishItem) {
            if (\is_array($this->publishItem)) {
                $res['PublishItem'] = [];
                $n1 = 0;
                foreach ($this->publishItem as $item1) {
                    $res['PublishItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PublishItem'])) {
            if (!empty($map['PublishItem'])) {
                $model->publishItem = [];
                $n1 = 0;
                foreach ($map['PublishItem'] as $item1) {
                    $model->publishItem[$n1] = publishItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
