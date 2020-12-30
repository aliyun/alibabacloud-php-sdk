<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeContactPointsResponseBody;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeContactPointsResponseBody\contactPoints\contactPoint;
use AlibabaCloud\Tea\Model;

class contactPoints extends Model
{
    /**
     * @var contactPoint[]
     */
    public $contactPoint;
    protected $_name = [
        'contactPoint' => 'ContactPoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactPoint) {
            $res['ContactPoint'] = [];
            if (null !== $this->contactPoint && \is_array($this->contactPoint)) {
                $n = 0;
                foreach ($this->contactPoint as $item) {
                    $res['ContactPoint'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactPoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactPoint'])) {
            if (!empty($map['ContactPoint'])) {
                $model->contactPoint = [];
                $n                   = 0;
                foreach ($map['ContactPoint'] as $item) {
                    $model->contactPoint[$n++] = null !== $item ? contactPoint::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
