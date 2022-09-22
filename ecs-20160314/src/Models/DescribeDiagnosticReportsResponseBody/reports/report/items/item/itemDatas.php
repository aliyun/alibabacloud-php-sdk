<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiagnosticReportsResponseBody\reports\report\items\item;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiagnosticReportsResponseBody\reports\report\items\item\itemDatas\itemData;
use AlibabaCloud\Tea\Model;

class itemDatas extends Model
{
    /**
     * @var itemData[]
     */
    public $itemData;
    protected $_name = [
        'itemData' => 'ItemData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemData) {
            $res['ItemData'] = [];
            if (null !== $this->itemData && \is_array($this->itemData)) {
                $n = 0;
                foreach ($this->itemData as $item) {
                    $res['ItemData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itemDatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemData'])) {
            if (!empty($map['ItemData'])) {
                $model->itemData = [];
                $n               = 0;
                foreach ($map['ItemData'] as $item) {
                    $model->itemData[$n++] = null !== $item ? itemData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
