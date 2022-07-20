<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig\transcode\overwriteParams\audio;

use AlibabaCloud\Tea\Model;

class volume extends Model
{
    /**
     * @description 目标音量
     *
     * @var string
     */
    public $integratedLoudnessTarget;

    /**
     * @description 音量范围
     *
     * @var string
     */
    public $loudnessRangeTarget;

    /**
     * @description 音量调整方式
     *
     * @var string
     */
    public $method;

    /**
     * @description 最大峰值
     *
     * @var string
     */
    public $truePeak;
    protected $_name = [
        'integratedLoudnessTarget' => 'IntegratedLoudnessTarget',
        'loudnessRangeTarget'      => 'LoudnessRangeTarget',
        'method'                   => 'Method',
        'truePeak'                 => 'TruePeak',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->integratedLoudnessTarget) {
            $res['IntegratedLoudnessTarget'] = $this->integratedLoudnessTarget;
        }
        if (null !== $this->loudnessRangeTarget) {
            $res['LoudnessRangeTarget'] = $this->loudnessRangeTarget;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->truePeak) {
            $res['TruePeak'] = $this->truePeak;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return volume
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntegratedLoudnessTarget'])) {
            $model->integratedLoudnessTarget = $map['IntegratedLoudnessTarget'];
        }
        if (isset($map['LoudnessRangeTarget'])) {
            $model->loudnessRangeTarget = $map['LoudnessRangeTarget'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['TruePeak'])) {
            $model->truePeak = $map['TruePeak'];
        }

        return $model;
    }
}
