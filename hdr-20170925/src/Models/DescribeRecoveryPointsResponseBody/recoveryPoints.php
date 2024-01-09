<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeRecoveryPointsResponseBody;

use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeRecoveryPointsResponseBody\recoveryPoints\recoveryPoint;
use AlibabaCloud\Tea\Model;

class recoveryPoints extends Model
{
    /**
     * @var recoveryPoint[]
     */
    public $recoveryPoint;
    protected $_name = [
        'recoveryPoint' => 'recoveryPoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recoveryPoint) {
            $res['recoveryPoint'] = [];
            if (null !== $this->recoveryPoint && \is_array($this->recoveryPoint)) {
                $n = 0;
                foreach ($this->recoveryPoint as $item) {
                    $res['recoveryPoint'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recoveryPoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['recoveryPoint'])) {
            if (!empty($map['recoveryPoint'])) {
                $model->recoveryPoint = [];
                $n                    = 0;
                foreach ($map['recoveryPoint'] as $item) {
                    $model->recoveryPoint[$n++] = null !== $item ? recoveryPoint::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
