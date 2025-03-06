<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeHistoryApisResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeHistoryApisResponseBody\apiHisItems\apiHisItem;
use AlibabaCloud\Tea\Model;

class apiHisItems extends Model
{
    /**
     * @var apiHisItem[]
     */
    public $apiHisItem;
    protected $_name = [
        'apiHisItem' => 'ApiHisItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiHisItem) {
            $res['ApiHisItem'] = [];
            if (null !== $this->apiHisItem && \is_array($this->apiHisItem)) {
                $n = 0;
                foreach ($this->apiHisItem as $item) {
                    $res['ApiHisItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiHisItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiHisItem'])) {
            if (!empty($map['ApiHisItem'])) {
                $model->apiHisItem = [];
                $n                 = 0;
                foreach ($map['ApiHisItem'] as $item) {
                    $model->apiHisItem[$n++] = null !== $item ? apiHisItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
