<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasQIService\V20260831\Models\CameraConsoleDebugStreamRequest\config\extensionConfig;

use AlibabaCloud\Dara\Model;

class camera extends Model
{
    /**
     * @var float
     */
    public $headMaxHeightRatio;

    /**
     * @var float
     */
    public $headMinHeightRatio;

    /**
     * @var float
     */
    public $minConfidence;

    /**
     * @var string
     */
    public $scenario;
    protected $_name = [
        'headMaxHeightRatio' => 'headMaxHeightRatio',
        'headMinHeightRatio' => 'headMinHeightRatio',
        'minConfidence' => 'minConfidence',
        'scenario' => 'scenario',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->headMaxHeightRatio) {
            $res['headMaxHeightRatio'] = $this->headMaxHeightRatio;
        }

        if (null !== $this->headMinHeightRatio) {
            $res['headMinHeightRatio'] = $this->headMinHeightRatio;
        }

        if (null !== $this->minConfidence) {
            $res['minConfidence'] = $this->minConfidence;
        }

        if (null !== $this->scenario) {
            $res['scenario'] = $this->scenario;
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
        if (isset($map['headMaxHeightRatio'])) {
            $model->headMaxHeightRatio = $map['headMaxHeightRatio'];
        }

        if (isset($map['headMinHeightRatio'])) {
            $model->headMinHeightRatio = $map['headMinHeightRatio'];
        }

        if (isset($map['minConfidence'])) {
            $model->minConfidence = $map['minConfidence'];
        }

        if (isset($map['scenario'])) {
            $model->scenario = $map['scenario'];
        }

        return $model;
    }
}
