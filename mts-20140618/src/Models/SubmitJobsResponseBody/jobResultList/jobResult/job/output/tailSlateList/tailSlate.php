<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsResponseBody\jobResultList\jobResult\job\output\tailSlateList;

use AlibabaCloud\Tea\Model;

class tailSlate extends Model
{
    /**
     * @var string
     */
    public $start;

    /**
     * @var string
     */
    public $bgColor;

    /**
     * @var bool
     */
    public $isMergeAudio;

    /**
     * @var string
     */
    public $width;

    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $blendDuration;

    /**
     * @var string
     */
    public $tailUrl;
    protected $_name = [
        'start'         => 'Start',
        'bgColor'       => 'BgColor',
        'isMergeAudio'  => 'IsMergeAudio',
        'width'         => 'Width',
        'height'        => 'Height',
        'blendDuration' => 'BlendDuration',
        'tailUrl'       => 'TailUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->bgColor) {
            $res['BgColor'] = $this->bgColor;
        }
        if (null !== $this->isMergeAudio) {
            $res['IsMergeAudio'] = $this->isMergeAudio;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->blendDuration) {
            $res['BlendDuration'] = $this->blendDuration;
        }
        if (null !== $this->tailUrl) {
            $res['TailUrl'] = $this->tailUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tailSlate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['BgColor'])) {
            $model->bgColor = $map['BgColor'];
        }
        if (isset($map['IsMergeAudio'])) {
            $model->isMergeAudio = $map['IsMergeAudio'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['BlendDuration'])) {
            $model->blendDuration = $map['BlendDuration'];
        }
        if (isset($map['TailUrl'])) {
            $model->tailUrl = $map['TailUrl'];
        }

        return $model;
    }
}
