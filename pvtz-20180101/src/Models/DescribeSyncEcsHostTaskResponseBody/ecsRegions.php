<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeSyncEcsHostTaskResponseBody;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeSyncEcsHostTaskResponseBody\ecsRegions\ecsRegion;
use AlibabaCloud\Tea\Model;

class ecsRegions extends Model
{
    /**
     * @var ecsRegion[]
     */
    public $ecsRegion;
    protected $_name = [
        'ecsRegion' => 'EcsRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsRegion) {
            $res['EcsRegion'] = [];
            if (null !== $this->ecsRegion && \is_array($this->ecsRegion)) {
                $n = 0;
                foreach ($this->ecsRegion as $item) {
                    $res['EcsRegion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecsRegions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsRegion'])) {
            if (!empty($map['EcsRegion'])) {
                $model->ecsRegion = [];
                $n                = 0;
                foreach ($map['EcsRegion'] as $item) {
                    $model->ecsRegion[$n++] = null !== $item ? ecsRegion::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
