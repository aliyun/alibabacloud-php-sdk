<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderInfoAfterSaleResponseBody\model;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderInfoAfterSaleResponseBody\model\logisticsList\logistics;
use AlibabaCloud\Tea\Model;

class logisticsList extends Model
{
    /**
     * @var logistics[]
     */
    public $logistics;
    protected $_name = [
        'logistics' => 'Logistics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logistics) {
            $res['Logistics'] = [];
            if (null !== $this->logistics && \is_array($this->logistics)) {
                $n = 0;
                foreach ($this->logistics as $item) {
                    $res['Logistics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logisticsList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Logistics'])) {
            if (!empty($map['Logistics'])) {
                $model->logistics = [];
                $n                = 0;
                foreach ($map['Logistics'] as $item) {
                    $model->logistics[$n++] = null !== $item ? logistics::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
