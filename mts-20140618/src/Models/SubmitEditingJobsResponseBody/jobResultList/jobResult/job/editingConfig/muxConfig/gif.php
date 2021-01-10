<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\muxConfig;

use AlibabaCloud\Tea\Model;

class gif extends Model
{
    /**
     * @var string
     */
    public $loop;

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
    public $ditherMode;
    protected $_name = [
        'loop'            => 'Loop',
        'finalDelay'      => 'FinalDelay',
        'isCustomPalette' => 'IsCustomPalette',
        'ditherMode'      => 'DitherMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loop) {
            $res['Loop'] = $this->loop;
        }
        if (null !== $this->finalDelay) {
            $res['FinalDelay'] = $this->finalDelay;
        }
        if (null !== $this->isCustomPalette) {
            $res['IsCustomPalette'] = $this->isCustomPalette;
        }
        if (null !== $this->ditherMode) {
            $res['DitherMode'] = $this->ditherMode;
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
        if (isset($map['Loop'])) {
            $model->loop = $map['Loop'];
        }
        if (isset($map['FinalDelay'])) {
            $model->finalDelay = $map['FinalDelay'];
        }
        if (isset($map['IsCustomPalette'])) {
            $model->isCustomPalette = $map['IsCustomPalette'];
        }
        if (isset($map['DitherMode'])) {
            $model->ditherMode = $map['DitherMode'];
        }

        return $model;
    }
}
