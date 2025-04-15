<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserDetailResponseBody\factorList\relatedEventDatas;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserDetailResponseBody\factorList\relatedMetricDatas;

class factorList extends Model
{
    /**
     * @var string
     */
    public $factorId;

    /**
     * @var string
     */
    public $faultSource;

    /**
     * @var relatedEventDatas[]
     */
    public $relatedEventDatas;

    /**
     * @var relatedMetricDatas[]
     */
    public $relatedMetricDatas;
    protected $_name = [
        'factorId' => 'FactorId',
        'faultSource' => 'FaultSource',
        'relatedEventDatas' => 'RelatedEventDatas',
        'relatedMetricDatas' => 'RelatedMetricDatas',
    ];

    public function validate()
    {
        if (\is_array($this->relatedEventDatas)) {
            Model::validateArray($this->relatedEventDatas);
        }
        if (\is_array($this->relatedMetricDatas)) {
            Model::validateArray($this->relatedMetricDatas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->factorId) {
            $res['FactorId'] = $this->factorId;
        }

        if (null !== $this->faultSource) {
            $res['FaultSource'] = $this->faultSource;
        }

        if (null !== $this->relatedEventDatas) {
            if (\is_array($this->relatedEventDatas)) {
                $res['RelatedEventDatas'] = [];
                $n1 = 0;
                foreach ($this->relatedEventDatas as $item1) {
                    $res['RelatedEventDatas'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->relatedMetricDatas) {
            if (\is_array($this->relatedMetricDatas)) {
                $res['RelatedMetricDatas'] = [];
                $n1 = 0;
                foreach ($this->relatedMetricDatas as $item1) {
                    $res['RelatedMetricDatas'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FactorId'])) {
            $model->factorId = $map['FactorId'];
        }

        if (isset($map['FaultSource'])) {
            $model->faultSource = $map['FaultSource'];
        }

        if (isset($map['RelatedEventDatas'])) {
            if (!empty($map['RelatedEventDatas'])) {
                $model->relatedEventDatas = [];
                $n1 = 0;
                foreach ($map['RelatedEventDatas'] as $item1) {
                    $model->relatedEventDatas[$n1++] = relatedEventDatas::fromMap($item1);
                }
            }
        }

        if (isset($map['RelatedMetricDatas'])) {
            if (!empty($map['RelatedMetricDatas'])) {
                $model->relatedMetricDatas = [];
                $n1 = 0;
                foreach ($map['RelatedMetricDatas'] as $item1) {
                    $model->relatedMetricDatas[$n1++] = relatedMetricDatas::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
