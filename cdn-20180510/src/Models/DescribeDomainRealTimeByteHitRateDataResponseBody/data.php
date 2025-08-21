<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeByteHitRateDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeByteHitRateDataResponseBody\data\byteHitRateDataModel;

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
        if (\is_array($this->byteHitRateDataModel)) {
            Model::validateArray($this->byteHitRateDataModel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->byteHitRateDataModel) {
            if (\is_array($this->byteHitRateDataModel)) {
                $res['ByteHitRateDataModel'] = [];
                $n1 = 0;
                foreach ($this->byteHitRateDataModel as $item1) {
                    $res['ByteHitRateDataModel'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ByteHitRateDataModel'])) {
            if (!empty($map['ByteHitRateDataModel'])) {
                $model->byteHitRateDataModel = [];
                $n1 = 0;
                foreach ($map['ByteHitRateDataModel'] as $item1) {
                    $model->byteHitRateDataModel[$n1] = byteHitRateDataModel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
