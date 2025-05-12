<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryTemplateListResponseBody\templateList\template\audio;

use AlibabaCloud\Dara\Model;

class volume extends Model
{
    /**
     * @var string
     */
    public $integratedLoudnessTarget;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $loudnessRangeTarget;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $peakLevel;

    /**
     * @var string
     */
    public $truePeak;
    protected $_name = [
        'integratedLoudnessTarget' => 'IntegratedLoudnessTarget',
        'level' => 'Level',
        'loudnessRangeTarget' => 'LoudnessRangeTarget',
        'method' => 'Method',
        'peakLevel' => 'PeakLevel',
        'truePeak' => 'TruePeak',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->integratedLoudnessTarget) {
            $res['IntegratedLoudnessTarget'] = $this->integratedLoudnessTarget;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->loudnessRangeTarget) {
            $res['LoudnessRangeTarget'] = $this->loudnessRangeTarget;
        }

        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }

        if (null !== $this->peakLevel) {
            $res['PeakLevel'] = $this->peakLevel;
        }

        if (null !== $this->truePeak) {
            $res['TruePeak'] = $this->truePeak;
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
        if (isset($map['IntegratedLoudnessTarget'])) {
            $model->integratedLoudnessTarget = $map['IntegratedLoudnessTarget'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['LoudnessRangeTarget'])) {
            $model->loudnessRangeTarget = $map['LoudnessRangeTarget'];
        }

        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }

        if (isset($map['PeakLevel'])) {
            $model->peakLevel = $map['PeakLevel'];
        }

        if (isset($map['TruePeak'])) {
            $model->truePeak = $map['TruePeak'];
        }

        return $model;
    }
}
