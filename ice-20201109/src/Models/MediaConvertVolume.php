<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class MediaConvertVolume extends Model
{
    /**
     * @var int
     */
    public $integratedLoudnessTarget;

    /**
     * @var int
     */
    public $level;

    /**
     * @var int
     */
    public $loudnessRangeTarget;

    /**
     * @var string
     */
    public $method;

    /**
     * @var int
     */
    public $truePeak;
    protected $_name = [
        'integratedLoudnessTarget' => 'IntegratedLoudnessTarget',
        'level'                    => 'Level',
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
        if (null !== $this->level) {
            $res['Level'] = $this->level;
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
     * @return MediaConvertVolume
     */
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
        if (isset($map['TruePeak'])) {
            $model->truePeak = $map['TruePeak'];
        }

        return $model;
    }
}
