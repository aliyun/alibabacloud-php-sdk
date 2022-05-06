<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyPGHbaConfigLogResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyPGHbaConfigLogResponseBody\hbaLogItems\hbaLogItem;
use AlibabaCloud\Tea\Model;

class hbaLogItems extends Model
{
    /**
     * @var hbaLogItem[]
     */
    public $hbaLogItem;
    protected $_name = [
        'hbaLogItem' => 'HbaLogItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hbaLogItem) {
            $res['HbaLogItem'] = [];
            if (null !== $this->hbaLogItem && \is_array($this->hbaLogItem)) {
                $n = 0;
                foreach ($this->hbaLogItem as $item) {
                    $res['HbaLogItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hbaLogItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HbaLogItem'])) {
            if (!empty($map['HbaLogItem'])) {
                $model->hbaLogItem = [];
                $n                 = 0;
                foreach ($map['HbaLogItem'] as $item) {
                    $model->hbaLogItem[$n++] = null !== $item ? hbaLogItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
