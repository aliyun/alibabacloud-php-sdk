<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeByteHitRateDataResponseBody;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeByteHitRateDataResponseBody\data\byteHitRateDataModel;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var byteHitRateDataModel[]
     */
    public $byteHitRateDataModel;
    protected $_name = [
        'byteHitRateDataModel' => 'ByteHitRateDataModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->byteHitRateDataModel) {
            $res['ByteHitRateDataModel'] = [];
            if (null !== $this->byteHitRateDataModel && \is_array($this->byteHitRateDataModel)) {
                $n = 0;
                foreach ($this->byteHitRateDataModel as $item) {
                    $res['ByteHitRateDataModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ByteHitRateDataModel'])) {
            if (!empty($map['ByteHitRateDataModel'])) {
                $model->byteHitRateDataModel = [];
                $n                           = 0;
                foreach ($map['ByteHitRateDataModel'] as $item) {
                    $model->byteHitRateDataModel[$n++] = null !== $item ? byteHitRateDataModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
