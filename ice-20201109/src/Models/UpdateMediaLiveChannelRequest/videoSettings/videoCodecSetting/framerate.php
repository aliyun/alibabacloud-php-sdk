<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\videoSettings\videoCodecSetting;

use AlibabaCloud\Dara\Model;

class framerate extends Model
{
    /**
     * @var string
     */
    public $framerateControl;

    /**
     * @var int
     */
    public $framerateDenominator;

    /**
     * @var int
     */
    public $framerateNumerator;
    protected $_name = [
        'framerateControl' => 'FramerateControl',
        'framerateDenominator' => 'FramerateDenominator',
        'framerateNumerator' => 'FramerateNumerator',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
