<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\tailSlateList;

use AlibabaCloud\Dara\Model;

class tailSlate extends Model
{
    /**
     * @var string
     */
    public $bgColor;

    /**
     * @var string
     */
    public $blendDuration;

    /**
     * @var string
     */
    public $height;

    /**
     * @var bool
     */
    public $isMergeAudio;

    /**
     * @var string
     */
    public $start;

    /**
     * @var string
     */
    public $tailUrl;

    /**
     * @var string
     */
    public $width;
    protected $_name = [
        'bgColor' => 'BgColor',
        'blendDuration' => 'BlendDuration',
        'height' => 'Height',
        'isMergeAudio' => 'IsMergeAudio',
        'start' => 'Start',
        'tailUrl' => 'TailUrl',
        'width' => 'Width',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bgColor) {
            $res['BgColor'] = $this->bgColor;
        }

        if (null !== $this->blendDuration) {
            $res['BlendDuration'] = $this->blendDuration;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->isMergeAudio) {
            $res['IsMergeAudio'] = $this->isMergeAudio;
        }

        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        if (null !== $this->tailUrl) {
            $res['TailUrl'] = $this->tailUrl;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
        if (isset($map['BgColor'])) {
            $model->bgColor = $map['BgColor'];
        }

        if (isset($map['BlendDuration'])) {
            $model->blendDuration = $map['BlendDuration'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['IsMergeAudio'])) {
            $model->isMergeAudio = $map['IsMergeAudio'];
        }

        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        if (isset($map['TailUrl'])) {
            $model->tailUrl = $map['TailUrl'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
