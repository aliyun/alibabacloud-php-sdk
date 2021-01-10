<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListJobResponseBody\jobList\job\output\muxConfig;

use AlibabaCloud\Tea\Model;

class gif extends Model
{
    /**
     * @var string
     */
    public $finalDelay;

    /**
     * @var string
     */
    public $ditherMode;

    /**
     * @var string
     */
    public $loop;

    /**
     * @var string
     */
    public $isCustomPalette;
    protected $_name = [
        'finalDelay'      => 'FinalDelay',
        'ditherMode'      => 'DitherMode',
        'loop'            => 'Loop',
        'isCustomPalette' => 'IsCustomPalette',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->finalDelay) {
            $res['FinalDelay'] = $this->finalDelay;
        }
        if (null !== $this->ditherMode) {
            $res['DitherMode'] = $this->ditherMode;
        }
        if (null !== $this->loop) {
            $res['Loop'] = $this->loop;
        }
        if (null !== $this->isCustomPalette) {
            $res['IsCustomPalette'] = $this->isCustomPalette;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gif
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FinalDelay'])) {
            $model->finalDelay = $map['FinalDelay'];
        }
        if (isset($map['DitherMode'])) {
            $model->ditherMode = $map['DitherMode'];
        }
        if (isset($map['Loop'])) {
            $model->loop = $map['Loop'];
        }
        if (isset($map['IsCustomPalette'])) {
            $model->isCustomPalette = $map['IsCustomPalette'];
        }

        return $model;
    }
}
