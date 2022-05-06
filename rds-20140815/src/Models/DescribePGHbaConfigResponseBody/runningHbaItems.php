<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribePGHbaConfigResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePGHbaConfigResponseBody\runningHbaItems\hbaItem;
use AlibabaCloud\Tea\Model;

class runningHbaItems extends Model
{
    /**
     * @var hbaItem[]
     */
    public $hbaItem;
    protected $_name = [
        'hbaItem' => 'HbaItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hbaItem) {
            $res['HbaItem'] = [];
            if (null !== $this->hbaItem && \is_array($this->hbaItem)) {
                $n = 0;
                foreach ($this->hbaItem as $item) {
                    $res['HbaItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runningHbaItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HbaItem'])) {
            if (!empty($map['HbaItem'])) {
                $model->hbaItem = [];
                $n              = 0;
                foreach ($map['HbaItem'] as $item) {
                    $model->hbaItem[$n++] = null !== $item ? hbaItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
