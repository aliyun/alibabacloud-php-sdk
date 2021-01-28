<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeZonesResponseBody;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeZonesResponseBody\zones\KVStoreZone;
use AlibabaCloud\Tea\Model;

class zones extends Model
{
    /**
     * @var KVStoreZone[]
     */
    public $KVStoreZone;
    protected $_name = [
        'KVStoreZone' => 'KVStoreZone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->KVStoreZone) {
            $res['KVStoreZone'] = [];
            if (null !== $this->KVStoreZone && \is_array($this->KVStoreZone)) {
                $n = 0;
                foreach ($this->KVStoreZone as $item) {
                    $res['KVStoreZone'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KVStoreZone'])) {
            if (!empty($map['KVStoreZone'])) {
                $model->KVStoreZone = [];
                $n                  = 0;
                foreach ($map['KVStoreZone'] as $item) {
                    $model->KVStoreZone[$n++] = null !== $item ? KVStoreZone::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
