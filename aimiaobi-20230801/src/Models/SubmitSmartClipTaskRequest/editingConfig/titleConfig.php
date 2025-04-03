<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\editingConfig;

use AlibabaCloud\Dara\Model;

class titleConfig extends Model
{
    /**
     * @var string
     */
    public $alignment;

    /**
     * @var float
     */
    public $timelineIn;

    /**
     * @var float
     */
    public $timelineOut;

    /**
     * @var float
     */
    public $x;

    /**
     * @var float
     */
    public $y;
    protected $_name = [
        'alignment' => 'Alignment',
        'timelineIn' => 'TimelineIn',
        'timelineOut' => 'TimelineOut',
        'x' => 'X',
        'y' => 'Y',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alignment) {
            $res['Alignment'] = $this->alignment;
        }

        if (null !== $this->timelineIn) {
            $res['TimelineIn'] = $this->timelineIn;
        }

        if (null !== $this->timelineOut) {
            $res['TimelineOut'] = $this->timelineOut;
        }

        if (null !== $this->x) {
            $res['X'] = $this->x;
        }

        if (null !== $this->y) {
            $res['Y'] = $this->y;
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
        if (isset($map['Alignment'])) {
            $model->alignment = $map['Alignment'];
        }

        if (isset($map['TimelineIn'])) {
            $model->timelineIn = $map['TimelineIn'];
        }

        if (isset($map['TimelineOut'])) {
            $model->timelineOut = $map['TimelineOut'];
        }

        if (isset($map['X'])) {
            $model->x = $map['X'];
        }

        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }

        return $model;
    }
}
