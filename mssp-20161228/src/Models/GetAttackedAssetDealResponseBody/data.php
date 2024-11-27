<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetAttackedAssetDealResponseBody;

use AlibabaCloud\SDK\Mssp\V20161228\Models\GetAttackedAssetDealResponseBody\data\ecsTrendList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var ecsTrendList[]
     */
    public $ecsTrendList;
    protected $_name = [
        'ecsTrendList' => 'EcsTrendList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsTrendList) {
            $res['EcsTrendList'] = [];
            if (null !== $this->ecsTrendList && \is_array($this->ecsTrendList)) {
                $n = 0;
                foreach ($this->ecsTrendList as $item) {
                    $res['EcsTrendList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsTrendList'])) {
            if (!empty($map['EcsTrendList'])) {
                $model->ecsTrendList = [];
                $n                   = 0;
                foreach ($map['EcsTrendList'] as $item) {
                    $model->ecsTrendList[$n++] = null !== $item ? ecsTrendList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
