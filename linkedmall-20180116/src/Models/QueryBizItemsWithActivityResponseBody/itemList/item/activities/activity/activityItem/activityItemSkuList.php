<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\activities\activity\activityItem;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\activities\activity\activityItem\activityItemSkuList\activityItemSku;
use AlibabaCloud\Tea\Model;

class activityItemSkuList extends Model
{
    /**
     * @var activityItemSku[]
     */
    public $activityItemSku;
    protected $_name = [
        'activityItemSku' => 'ActivityItemSku',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityItemSku) {
            $res['ActivityItemSku'] = [];
            if (null !== $this->activityItemSku && \is_array($this->activityItemSku)) {
                $n = 0;
                foreach ($this->activityItemSku as $item) {
                    $res['ActivityItemSku'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return activityItemSkuList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityItemSku'])) {
            if (!empty($map['ActivityItemSku'])) {
                $model->activityItemSku = [];
                $n                      = 0;
                foreach ($map['ActivityItemSku'] as $item) {
                    $model->activityItemSku[$n++] = null !== $item ? activityItemSku::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
