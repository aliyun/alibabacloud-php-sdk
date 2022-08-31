<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRegionInfosResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRegionInfosResponseBody\regions\RDSRegion;
use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @var RDSRegion[]
     */
    public $RDSRegion;
    protected $_name = [
        'RDSRegion' => 'RDSRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->RDSRegion) {
            $res['RDSRegion'] = [];
            if (null !== $this->RDSRegion && \is_array($this->RDSRegion)) {
                $n = 0;
                foreach ($this->RDSRegion as $item) {
                    $res['RDSRegion'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['RDSRegion'])) {
            if (!empty($map['RDSRegion'])) {
                $model->RDSRegion = [];
                $n                = 0;
                foreach ($map['RDSRegion'] as $item) {
                    $model->RDSRegion[$n++] = null !== $item ? RDSRegion::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
