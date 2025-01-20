<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody\list_;

use AlibabaCloud\Dara\Model;

class completeStrategy extends Model
{
    /**
     * @var bool
     */
    public $clickCompleteAutoEnd;
    /**
     * @var int
     */
    public $duration;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
