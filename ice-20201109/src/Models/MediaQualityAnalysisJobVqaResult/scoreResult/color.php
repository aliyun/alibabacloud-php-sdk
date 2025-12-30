<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\MediaQualityAnalysisJobVqaResult\scoreResult;

use AlibabaCloud\Dara\Model;

class color extends Model
{
    /**
     * @var float
     */
    public $intensityValue;

    /**
     * @var float
     */
    public $perceptualScore;
    protected $_name = [
        'intensityValue' => 'IntensityValue',
        'perceptualScore' => 'PerceptualScore',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->intensityValue) {
            $res['IntensityValue'] = $this->intensityValue;
        }

        if (null !== $this->perceptualScore) {
            $res['PerceptualScore'] = $this->perceptualScore;
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
        if (isset($map['IntensityValue'])) {
            $model->intensityValue = $map['IntensityValue'];
        }

        if (isset($map['PerceptualScore'])) {
            $model->perceptualScore = $map['PerceptualScore'];
        }

        return $model;
    }
}
