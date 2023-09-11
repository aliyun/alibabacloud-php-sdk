<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListApplicationAccessPointsResponseBody;

use AlibabaCloud\SDK\Kms\V20160120\Models\ListApplicationAccessPointsResponseBody\applicationAccessPoints\applicationAccessPoint;
use AlibabaCloud\Tea\Model;

class applicationAccessPoints extends Model
{
    /**
     * @var applicationAccessPoint[]
     */
    public $applicationAccessPoint;
    protected $_name = [
        'applicationAccessPoint' => 'ApplicationAccessPoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationAccessPoint) {
            $res['ApplicationAccessPoint'] = [];
            if (null !== $this->applicationAccessPoint && \is_array($this->applicationAccessPoint)) {
                $n = 0;
                foreach ($this->applicationAccessPoint as $item) {
                    $res['ApplicationAccessPoint'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applicationAccessPoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationAccessPoint'])) {
            if (!empty($map['ApplicationAccessPoint'])) {
                $model->applicationAccessPoint = [];
                $n                             = 0;
                foreach ($map['ApplicationAccessPoint'] as $item) {
                    $model->applicationAccessPoint[$n++] = null !== $item ? applicationAccessPoint::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
