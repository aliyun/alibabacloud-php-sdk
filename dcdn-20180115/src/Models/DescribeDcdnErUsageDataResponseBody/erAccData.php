<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnErUsageDataResponseBody;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnErUsageDataResponseBody\erAccData\erAccItem;
use AlibabaCloud\Tea\Model;

class erAccData extends Model
{
    /**
     * @var erAccItem[]
     */
    public $erAccItem;
    protected $_name = [
        'erAccItem' => 'ErAccItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->erAccItem) {
            $res['ErAccItem'] = [];
            if (null !== $this->erAccItem && \is_array($this->erAccItem)) {
                $n = 0;
                foreach ($this->erAccItem as $item) {
                    $res['ErAccItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return erAccData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErAccItem'])) {
            if (!empty($map['ErAccItem'])) {
                $model->erAccItem = [];
                $n                = 0;
                foreach ($map['ErAccItem'] as $item) {
                    $model->erAccItem[$n++] = null !== $item ? erAccItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
