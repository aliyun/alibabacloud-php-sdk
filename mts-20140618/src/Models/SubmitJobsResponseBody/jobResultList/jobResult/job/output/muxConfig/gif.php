<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsResponseBody\jobResultList\jobResult\job\output\muxConfig;

use AlibabaCloud\Dara\Model;

class gif extends Model
{
    /**
     * @var string
     */
    public $ditherMode;

    /**
     * @var string
     */
    public $finalDelay;

    /**
     * @var string
     */
    public $isCustomPalette;

    /**
     * @var string
     */
    public $loop;
    protected $_name = [
        'ditherMode' => 'DitherMode',
        'finalDelay' => 'FinalDelay',
        'isCustomPalette' => 'IsCustomPalette',
        'loop' => 'Loop',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ditherMode) {
            $res['DitherMode'] = $this->ditherMode;
        }

        if (null !== $this->finalDelay) {
            $res['FinalDelay'] = $this->finalDelay;
        }

        if (null !== $this->isCustomPalette) {
            $res['IsCustomPalette'] = $this->isCustomPalette;
        }

        if (null !== $this->loop) {
            $res['Loop'] = $this->loop;
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
        if (isset($map['DitherMode'])) {
            $model->ditherMode = $map['DitherMode'];
        }

        if (isset($map['FinalDelay'])) {
            $model->finalDelay = $map['FinalDelay'];
        }

        if (isset($map['IsCustomPalette'])) {
            $model->isCustomPalette = $map['IsCustomPalette'];
        }

        if (isset($map['Loop'])) {
            $model->loop = $map['Loop'];
        }

        return $model;
    }
}
