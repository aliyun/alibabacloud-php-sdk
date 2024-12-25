<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody\list_;

use AlibabaCloud\Tea\Model;

class completeStrategy extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $clickCompleteAutoEnd;

    /**
     * @example 75
     *
     * @var int
     */
    public $duration;

    /**
     * @example false
     *
     * @var bool
     */
    public $fullCoverageAutoEnd;
    protected $_name = [
        'clickCompleteAutoEnd' => 'clickCompleteAutoEnd',
        'duration'             => 'duration',
        'fullCoverageAutoEnd'  => 'fullCoverageAutoEnd',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clickCompleteAutoEnd) {
            $res['clickCompleteAutoEnd'] = $this->clickCompleteAutoEnd;
        }
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->fullCoverageAutoEnd) {
            $res['fullCoverageAutoEnd'] = $this->fullCoverageAutoEnd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return completeStrategy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clickCompleteAutoEnd'])) {
            $model->clickCompleteAutoEnd = $map['clickCompleteAutoEnd'];
        }
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }
        if (isset($map['fullCoverageAutoEnd'])) {
            $model->fullCoverageAutoEnd = $map['fullCoverageAutoEnd'];
        }

        return $model;
    }
}
