<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeReqHitRateDataResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeReqHitRateDataResponseBody\data\reqHitRateDataModel;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var reqHitRateDataModel[]
     */
    public $reqHitRateDataModel;
    protected $_name = [
        'reqHitRateDataModel' => 'ReqHitRateDataModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reqHitRateDataModel) {
            $res['ReqHitRateDataModel'] = [];
            if (null !== $this->reqHitRateDataModel && \is_array($this->reqHitRateDataModel)) {
                $n = 0;
                foreach ($this->reqHitRateDataModel as $item) {
                    $res['ReqHitRateDataModel'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ReqHitRateDataModel'])) {
            if (!empty($map['ReqHitRateDataModel'])) {
                $model->reqHitRateDataModel = [];
                $n                          = 0;
                foreach ($map['ReqHitRateDataModel'] as $item) {
                    $model->reqHitRateDataModel[$n++] = null !== $item ? reqHitRateDataModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
