<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasQIService\V20260831\Models\CameraConsoleDebugStreamRequest;

use AlibabaCloud\Dara\Model;

class parameters extends Model
{
    /**
     * @var float
     */
    public $maxHeightRatio;

    /**
     * @var float
     */
    public $minHeightRatio;

    /**
     * @var float
     */
    public $minScore;
    protected $_name = [
        'maxHeightRatio' => 'maxHeightRatio',
        'minHeightRatio' => 'minHeightRatio',
        'minScore' => 'minScore',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxHeightRatio) {
            $res['maxHeightRatio'] = $this->maxHeightRatio;
        }

        if (null !== $this->minHeightRatio) {
            $res['minHeightRatio'] = $this->minHeightRatio;
        }

        if (null !== $this->minScore) {
            $res['minScore'] = $this->minScore;
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
        if (isset($map['maxHeightRatio'])) {
            $model->maxHeightRatio = $map['maxHeightRatio'];
        }

        if (isset($map['minHeightRatio'])) {
            $model->minHeightRatio = $map['minHeightRatio'];
        }

        if (isset($map['minScore'])) {
            $model->minScore = $map['minScore'];
        }

        return $model;
    }
}
