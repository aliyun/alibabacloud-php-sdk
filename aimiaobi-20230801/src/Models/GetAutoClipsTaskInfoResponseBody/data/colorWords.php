<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetAutoClipsTaskInfoResponseBody\data;

use AlibabaCloud\Dara\Model;

class colorWords extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $effectColorStyle;

    /**
     * @var int
     */
    public $fontSize;

    /**
     * @var int
     */
    public $timelineIn;

    /**
     * @var int
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
        'content' => 'Content',
        'effectColorStyle' => 'EffectColorStyle',
        'fontSize' => 'FontSize',
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
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->effectColorStyle) {
            $res['EffectColorStyle'] = $this->effectColorStyle;
        }

        if (null !== $this->fontSize) {
            $res['FontSize'] = $this->fontSize;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['EffectColorStyle'])) {
            $model->effectColorStyle = $map['EffectColorStyle'];
        }

        if (isset($map['FontSize'])) {
            $model->fontSize = $map['FontSize'];
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
