<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnBlockedRegionsResponseBody;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnBlockedRegionsResponseBody\infoList\infoItem;
use AlibabaCloud\Tea\Model;

class infoList extends Model
{
    /**
     * @var infoItem[]
     */
    public $infoItem;
    protected $_name = [
        'infoItem' => 'InfoItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->infoItem) {
            $res['InfoItem'] = [];
            if (null !== $this->infoItem && \is_array($this->infoItem)) {
                $n = 0;
                foreach ($this->infoItem as $item) {
                    $res['InfoItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return infoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InfoItem'])) {
            if (!empty($map['InfoItem'])) {
                $model->infoItem = [];
                $n               = 0;
                foreach ($map['InfoItem'] as $item) {
                    $model->infoItem[$n++] = null !== $item ? infoItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
