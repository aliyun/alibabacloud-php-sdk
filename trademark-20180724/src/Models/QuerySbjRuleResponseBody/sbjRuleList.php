<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QuerySbjRuleResponseBody;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QuerySbjRuleResponseBody\sbjRuleList\sbjRuleItem;
use AlibabaCloud\Tea\Model;

class sbjRuleList extends Model
{
    /**
     * @var sbjRuleItem[]
     */
    public $sbjRuleItem;
    protected $_name = [
        'sbjRuleItem' => 'SbjRuleItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sbjRuleItem) {
            $res['SbjRuleItem'] = [];
            if (null !== $this->sbjRuleItem && \is_array($this->sbjRuleItem)) {
                $n = 0;
                foreach ($this->sbjRuleItem as $item) {
                    $res['SbjRuleItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sbjRuleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SbjRuleItem'])) {
            if (!empty($map['SbjRuleItem'])) {
                $model->sbjRuleItem = [];
                $n                  = 0;
                foreach ($map['SbjRuleItem'] as $item) {
                    $model->sbjRuleItem[$n++] = null !== $item ? sbjRuleItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
