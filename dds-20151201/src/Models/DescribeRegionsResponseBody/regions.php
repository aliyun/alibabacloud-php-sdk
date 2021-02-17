<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRegionsResponseBody;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRegionsResponseBody\regions\ddsRegion;
use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @var ddsRegion[]
     */
    public $ddsRegion;
    protected $_name = [
        'ddsRegion' => 'DdsRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ddsRegion) {
            $res['DdsRegion'] = [];
            if (null !== $this->ddsRegion && \is_array($this->ddsRegion)) {
                $n = 0;
                foreach ($this->ddsRegion as $item) {
                    $res['DdsRegion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DdsRegion'])) {
            if (!empty($map['DdsRegion'])) {
                $model->ddsRegion = [];
                $n                = 0;
                foreach ($map['DdsRegion'] as $item) {
                    $model->ddsRegion[$n++] = null !== $item ? ddsRegion::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
