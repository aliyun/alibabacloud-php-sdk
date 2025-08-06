<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealTimeReqHitRateDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealTimeReqHitRateDataResponseBody\data\reqHitRateDataModel;

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
        if (\is_array($this->reqHitRateDataModel)) {
            Model::validateArray($this->reqHitRateDataModel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reqHitRateDataModel) {
            if (\is_array($this->reqHitRateDataModel)) {
                $res['ReqHitRateDataModel'] = [];
                $n1 = 0;
                foreach ($this->reqHitRateDataModel as $item1) {
                    $res['ReqHitRateDataModel'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ReqHitRateDataModel'])) {
            if (!empty($map['ReqHitRateDataModel'])) {
                $model->reqHitRateDataModel = [];
                $n1 = 0;
                foreach ($map['ReqHitRateDataModel'] as $item1) {
                    $model->reqHitRateDataModel[$n1] = reqHitRateDataModel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
