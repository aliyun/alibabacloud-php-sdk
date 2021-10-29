<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models\DescribeRegionsResponseBody;

use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeRegionsResponseBody\drdsRegions\drdsRegion;
use AlibabaCloud\Tea\Model;

class drdsRegions extends Model
{
    /**
     * @var drdsRegion[]
     */
    public $drdsRegion;
    protected $_name = [
        'drdsRegion' => 'DrdsRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsRegion) {
            $res['DrdsRegion'] = [];
            if (null !== $this->drdsRegion && \is_array($this->drdsRegion)) {
                $n = 0;
                foreach ($this->drdsRegion as $item) {
                    $res['DrdsRegion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return drdsRegions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsRegion'])) {
            if (!empty($map['DrdsRegion'])) {
                $model->drdsRegion = [];
                $n                 = 0;
                foreach ($map['DrdsRegion'] as $item) {
                    $model->drdsRegion[$n++] = null !== $item ? drdsRegion::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
