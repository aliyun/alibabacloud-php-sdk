<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRealtimeDeliveryAccResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRealtimeDeliveryAccResponseBody\reatTimeDeliveryAccData\accData;
use AlibabaCloud\Tea\Model;

class reatTimeDeliveryAccData extends Model
{
    /**
     * @var accData[]
     */
    public $accData;
    protected $_name = [
        'accData' => 'AccData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accData) {
            $res['AccData'] = [];
            if (null !== $this->accData && \is_array($this->accData)) {
                $n = 0;
                foreach ($this->accData as $item) {
                    $res['AccData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reatTimeDeliveryAccData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccData'])) {
            if (!empty($map['AccData'])) {
                $model->accData = [];
                $n              = 0;
                foreach ($map['AccData'] as $item) {
                    $model->accData[$n++] = null !== $item ? accData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
