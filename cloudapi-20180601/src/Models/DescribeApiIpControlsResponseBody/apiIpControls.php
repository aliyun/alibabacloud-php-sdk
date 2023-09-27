<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiIpControlsResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiIpControlsResponseBody\apiIpControls\apiIpControlItem;
use AlibabaCloud\Tea\Model;

class apiIpControls extends Model
{
    /**
     * @var apiIpControlItem[]
     */
    public $apiIpControlItem;
    protected $_name = [
        'apiIpControlItem' => 'ApiIpControlItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiIpControlItem) {
            $res['ApiIpControlItem'] = [];
            if (null !== $this->apiIpControlItem && \is_array($this->apiIpControlItem)) {
                $n = 0;
                foreach ($this->apiIpControlItem as $item) {
                    $res['ApiIpControlItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiIpControls
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiIpControlItem'])) {
            if (!empty($map['ApiIpControlItem'])) {
                $model->apiIpControlItem = [];
                $n                       = 0;
                foreach ($map['ApiIpControlItem'] as $item) {
                    $model->apiIpControlItem[$n++] = null !== $item ? apiIpControlItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
