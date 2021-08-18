<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisUserDetailResponseBody;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisUserDetailResponseBody\factorList\relatedEventDatas;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisUserDetailResponseBody\factorList\relatedMetricDatas;
use AlibabaCloud\Tea\Model;

class factorList extends Model
{
    /**
     * @description 影响因素ID： 1：发布端网络差 2：订阅端网络差 3：发布端设备性能差 4：发布端关闭摄像头 5：发布端切到后台运行
     *
     * @var string
     */
    public $factorId;

    /**
     * @description 异常来源 LOCAL：本端 REMOTE：远端
     *
     * @var string
     */
    public $faultSource;

    /**
     * @description 关联的指标，坐标数据，当FaultType为AUDIO_STUCK、VIDEO_STUCK、VIDEO_VAGUE、HIGH_DELAY时返回
     *
     * @var relatedMetricDatas[]
     */
    public $relatedMetricDatas;

    /**
     * @description 关联的事件，按时间分组，当FaultType为AUDIO_STUCK、VIDEO_STUCK、VIDEO_VAGUE、HIGH_DELAY时返回
     *
     * @var relatedEventDatas[]
     */
    public $relatedEventDatas;
    protected $_name = [
        'factorId'           => 'FactorId',
        'faultSource'        => 'FaultSource',
        'relatedMetricDatas' => 'RelatedMetricDatas',
        'relatedEventDatas'  => 'RelatedEventDatas',
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
        if (null !== $this->relatedMetricDatas) {
            $res['RelatedMetricDatas'] = [];
            if (null !== $this->relatedMetricDatas && \is_array($this->relatedMetricDatas)) {
                $n = 0;
                foreach ($this->relatedMetricDatas as $item) {
                    $res['RelatedMetricDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RelatedMetricDatas'])) {
            if (!empty($map['RelatedMetricDatas'])) {
                $model->relatedMetricDatas = [];
                $n                         = 0;
                foreach ($map['RelatedMetricDatas'] as $item) {
                    $model->relatedMetricDatas[$n++] = null !== $item ? relatedMetricDatas::fromMap($item) : $item;
                }
            }
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

        return $model;
    }
}
