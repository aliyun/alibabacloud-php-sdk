<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\SearchLogResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\SearchLogResponseBody\slsLogItemList\slsLogItem;
use AlibabaCloud\Tea\Model;

class slsLogItemList extends Model
{
    /**
     * @var slsLogItem[]
     */
    public $slsLogItem;
    protected $_name = [
        'slsLogItem' => 'SlsLogItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->slsLogItem) {
            $res['SlsLogItem'] = [];
            if (null !== $this->slsLogItem && \is_array($this->slsLogItem)) {
                $n = 0;
                foreach ($this->slsLogItem as $item) {
                    $res['SlsLogItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slsLogItemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SlsLogItem'])) {
            if (!empty($map['SlsLogItem'])) {
                $model->slsLogItem = [];
                $n                 = 0;
                foreach ($map['SlsLogItem'] as $item) {
                    $model->slsLogItem[$n++] = null !== $item ? slsLogItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
