<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthLimitationResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthLimitationResponseBody\bandwidths\bandwidth;
use AlibabaCloud\Tea\Model;

class bandwidths extends Model
{
    /**
     * @var bandwidth[]
     */
    public $bandwidth;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = [];
            if (null !== $this->bandwidth && \is_array($this->bandwidth)) {
                $n = 0;
                foreach ($this->bandwidth as $item) {
                    $res['Bandwidth'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bandwidths
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            if (!empty($map['Bandwidth'])) {
                $model->bandwidth = [];
                $n                = 0;
                foreach ($map['Bandwidth'] as $item) {
                    $model->bandwidth[$n++] = null !== $item ? bandwidth::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
