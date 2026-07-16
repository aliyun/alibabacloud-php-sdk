<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\TargetVideo\filterVideo\desensitization;

use AlibabaCloud\Dara\Model;

class licensePlate extends Model
{
    /**
     * @var int
     */
    public $blurRadius;

    /**
     * @var float
     */
    public $confidence;

    /**
     * @var int
     */
    public $minSize;

    /**
     * @var float
     */
    public $scaleRatio;

    /**
     * @var float
     */
    public $transparency;
    protected $_name = [
        'blurRadius' => 'BlurRadius',
        'confidence' => 'Confidence',
        'minSize' => 'MinSize',
        'scaleRatio' => 'ScaleRatio',
        'transparency' => 'Transparency',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blurRadius) {
            $res['BlurRadius'] = $this->blurRadius;
        }

        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }

        if (null !== $this->minSize) {
            $res['MinSize'] = $this->minSize;
        }

        if (null !== $this->scaleRatio) {
            $res['ScaleRatio'] = $this->scaleRatio;
        }

        if (null !== $this->transparency) {
            $res['Transparency'] = $this->transparency;
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
        if (isset($map['BlurRadius'])) {
            $model->blurRadius = $map['BlurRadius'];
        }

        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }

        if (isset($map['MinSize'])) {
            $model->minSize = $map['MinSize'];
        }

        if (isset($map['ScaleRatio'])) {
            $model->scaleRatio = $map['ScaleRatio'];
        }

        if (isset($map['Transparency'])) {
            $model->transparency = $map['Transparency'];
        }

        return $model;
    }
}
