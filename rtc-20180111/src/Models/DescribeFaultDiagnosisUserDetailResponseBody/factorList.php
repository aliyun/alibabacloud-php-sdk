<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserDetailResponseBody;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserDetailResponseBody\factorList\relatedEventDatas;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserDetailResponseBody\factorList\relatedMetricDatas;
use AlibabaCloud\Tea\Model;

class factorList extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $factorId;

    /**
     * @example LOCAL
     *
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
        'factorId'           => 'FactorId',
        'faultSource'        => 'FaultSource',
        'relatedEventDatas'  => 'RelatedEventDatas',
        'relatedMetricDatas' => 'RelatedMetricDatas',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->factorId) {
            $res['FactorId'] = $this->factorId;
        }
        if (null !== $this->faultSource) {
            $res['FaultSource'] = $this->faultSource;
        }
        if (null !== $this->relatedEventDatas) {
            $res['RelatedEventDatas'] = [];
            if (null !== $this->relatedEventDatas && \is_array($this->relatedEventDatas)) {
                $n = 0;
                foreach ($this->relatedEventDatas as $item) {
                    $res['RelatedEventDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->relatedMetricDatas) {
            $res['RelatedMetricDatas'] = [];
            if (null !== $this->relatedMetricDatas && \is_array($this->relatedMetricDatas)) {
                $n = 0;
                foreach ($this->relatedMetricDatas as $item) {
                    $res['RelatedMetricDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return factorList
     */
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
                $n                        = 0;
                foreach ($map['RelatedEventDatas'] as $item) {
                    $model->relatedEventDatas[$n++] = null !== $item ? relatedEventDatas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RelatedMetricDatas'])) {
            if (!empty($map['RelatedMetricDatas'])) {
                $model->relatedMetricDatas = [];
                $n                         = 0;
                foreach ($map['RelatedMetricDatas'] as $item) {
                    $model->relatedMetricDatas[$n++] = null !== $item ? relatedMetricDatas::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
