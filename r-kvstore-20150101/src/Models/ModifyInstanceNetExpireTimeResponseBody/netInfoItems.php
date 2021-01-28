<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceNetExpireTimeResponseBody;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\ModifyInstanceNetExpireTimeResponseBody\netInfoItems\netInfoItem;
use AlibabaCloud\Tea\Model;

class netInfoItems extends Model
{
    /**
     * @var netInfoItem[]
     */
    public $netInfoItem;
    protected $_name = [
        'netInfoItem' => 'NetInfoItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->netInfoItem) {
            $res['NetInfoItem'] = [];
            if (null !== $this->netInfoItem && \is_array($this->netInfoItem)) {
                $n = 0;
                foreach ($this->netInfoItem as $item) {
                    $res['NetInfoItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return netInfoItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetInfoItem'])) {
            if (!empty($map['NetInfoItem'])) {
                $model->netInfoItem = [];
                $n                  = 0;
                foreach ($map['NetInfoItem'] as $item) {
                    $model->netInfoItem[$n++] = null !== $item ? netInfoItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
