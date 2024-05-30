<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\SDK\Videoenhan\V20200320\Models\GenerateVideoAdvanceRequest\fileList;
use AlibabaCloud\Tea\Model;

class GenerateVideoAdvanceRequest extends Model
{
    /**
     * @example 10
     *
     * @var float
     */
    public $duration;

    /**
     * @example true
     *
     * @var bool
     */
    public $durationAdaption;

    /**
     * @description 1
     *
     * This parameter is required.
     * @var fileList[]
     */
    public $fileList;

    /**
     * @example 640
     *
     * @var int
     */
    public $height;

    /**
     * @example true
     *
     * @var bool
     */
    public $mute;

    /**
     * @example true
     *
     * @var bool
     */
    public $puzzleEffect;

    /**
     * @example costume
     *
     * @var string
     */
    public $scene;

    /**
     * @example true
     *
     * @var bool
     */
    public $smartEffect;

    /**
     * @example fast
     *
     * @var string
     */
    public $style;

    /**
     * @example brush
     *
     * @var string
     */
    public $transitionStyle;

    /**
     * @example 640
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'duration'         => 'Duration',
        'durationAdaption' => 'DurationAdaption',
        'fileList'         => 'FileList',
        'height'           => 'Height',
        'mute'             => 'Mute',
        'puzzleEffect'     => 'PuzzleEffect',
        'scene'            => 'Scene',
        'smartEffect'      => 'SmartEffect',
        'style'            => 'Style',
        'transitionStyle'  => 'TransitionStyle',
        'width'            => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->durationAdaption) {
            $res['DurationAdaption'] = $this->durationAdaption;
        }
        if (null !== $this->fileList) {
            $res['FileList'] = [];
            if (null !== $this->fileList && \is_array($this->fileList)) {
                $n = 0;
                foreach ($this->fileList as $item) {
                    $res['FileList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->mute) {
            $res['Mute'] = $this->mute;
        }
        if (null !== $this->puzzleEffect) {
            $res['PuzzleEffect'] = $this->puzzleEffect;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->smartEffect) {
            $res['SmartEffect'] = $this->smartEffect;
        }
        if (null !== $this->style) {
            $res['Style'] = $this->style;
        }
        if (null !== $this->transitionStyle) {
            $res['TransitionStyle'] = $this->transitionStyle;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateVideoAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['DurationAdaption'])) {
            $model->durationAdaption = $map['DurationAdaption'];
        }
        if (isset($map['FileList'])) {
            if (!empty($map['FileList'])) {
                $model->fileList = [];
                $n               = 0;
                foreach ($map['FileList'] as $item) {
                    $model->fileList[$n++] = null !== $item ? fileList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Mute'])) {
            $model->mute = $map['Mute'];
        }
        if (isset($map['PuzzleEffect'])) {
            $model->puzzleEffect = $map['PuzzleEffect'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['SmartEffect'])) {
            $model->smartEffect = $map['SmartEffect'];
        }
        if (isset($map['Style'])) {
            $model->style = $map['Style'];
        }
        if (isset($map['TransitionStyle'])) {
            $model->transitionStyle = $map['TransitionStyle'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
