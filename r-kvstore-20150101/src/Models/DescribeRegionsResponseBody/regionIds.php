<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRegionsResponseBody;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRegionsResponseBody\regionIds\KVStoreRegion;
use AlibabaCloud\Tea\Model;

class regionIds extends Model
{
    /**
     * @var KVStoreRegion[]
     */
    public $KVStoreRegion;
    protected $_name = [
        'KVStoreRegion' => 'KVStoreRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->KVStoreRegion) {
            $res['KVStoreRegion'] = [];
            if (null !== $this->KVStoreRegion && \is_array($this->KVStoreRegion)) {
                $n = 0;
                foreach ($this->KVStoreRegion as $item) {
                    $res['KVStoreRegion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KVStoreRegion'])) {
            if (!empty($map['KVStoreRegion'])) {
                $model->KVStoreRegion = [];
                $n                    = 0;
                foreach ($map['KVStoreRegion'] as $item) {
                    $model->KVStoreRegion[$n++] = null !== $item ? KVStoreRegion::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
