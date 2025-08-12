<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRealtimeDeliveryAccResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRealtimeDeliveryAccResponseBody\realTimeDeliveryAccData\accData;

class realTimeDeliveryAccData extends Model
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
        if (\is_array($this->accData)) {
            Model::validateArray($this->accData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accData) {
            if (\is_array($this->accData)) {
                $res['AccData'] = [];
                $n1 = 0;
                foreach ($this->accData as $item1) {
                    $res['AccData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccData'])) {
            if (!empty($map['AccData'])) {
                $model->accData = [];
                $n1 = 0;
                foreach ($map['AccData'] as $item1) {
                    $model->accData[$n1] = accData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
