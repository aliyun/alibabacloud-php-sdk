<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodAIDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodAIDataResponseBody\AIData\AIDataItem;

class AIData extends Model
{
    /**
     * @var AIDataItem[]
     */
    public $AIDataItem;
    protected $_name = [
        'AIDataItem' => 'AIDataItem',
    ];

    public function validate()
    {
        if (\is_array($this->AIDataItem)) {
            Model::validateArray($this->AIDataItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIDataItem) {
            if (\is_array($this->AIDataItem)) {
                $res['AIDataItem'] = [];
                $n1 = 0;
                foreach ($this->AIDataItem as $item1) {
                    $res['AIDataItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AIDataItem'])) {
            if (!empty($map['AIDataItem'])) {
                $model->AIDataItem = [];
                $n1 = 0;
                foreach ($map['AIDataItem'] as $item1) {
                    $model->AIDataItem[$n1] = AIDataItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
