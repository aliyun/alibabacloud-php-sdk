<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveChannelResponseBody\channel\videoSettings\videoCodecSetting;

use AlibabaCloud\Tea\Model;

class framerate extends Model
{
    /**
     * @description The frame rate mode.
     *
     * @example SPECIFIED
     *
     * @var string
     */
    public $framerateControl;

    /**
     * @description The denominator of the fixed frame rate.
     *
     * @example 1
     *
     * @var int
     */
    public $framerateDenominator;

    /**
     * @description The numerator of the fixed frame rate.
     *
     * @example 25
     *
     * @var int
     */
    public $framerateNumerator;
    protected $_name = [
        'framerateControl'     => 'FramerateControl',
        'framerateDenominator' => 'FramerateDenominator',
        'framerateNumerator'   => 'FramerateNumerator',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->framerateControl) {
            $res['FramerateControl'] = $this->framerateControl;
        }
        if (null !== $this->framerateDenominator) {
            $res['FramerateDenominator'] = $this->framerateDenominator;
        }
        if (null !== $this->framerateNumerator) {
            $res['FramerateNumerator'] = $this->framerateNumerator;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return framerate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FramerateControl'])) {
            $model->framerateControl = $map['FramerateControl'];
        }
        if (isset($map['FramerateDenominator'])) {
            $model->framerateDenominator = $map['FramerateDenominator'];
        }
        if (isset($map['FramerateNumerator'])) {
            $model->framerateNumerator = $map['FramerateNumerator'];
        }

        return $model;
    }
}
