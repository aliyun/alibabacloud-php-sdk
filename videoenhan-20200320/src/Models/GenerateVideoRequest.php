<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\GenerateVideoRequest\fileList;

class GenerateVideoRequest extends Model
{
    /**
     * @var float
     */
    public $duration;

    /**
     * @var bool
     */
    public $durationAdaption;

    /**
     * @var fileList[]
     */
    public $fileList;

    /**
     * @var int
     */
    public $height;

    /**
     * @var bool
     */
    public $mute;

    /**
     * @var bool
     */
    public $puzzleEffect;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var bool
     */
    public $smartEffect;

    /**
     * @var string
     */
    public $style;

    /**
     * @var string
     */
    public $transitionStyle;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'duration' => 'Duration',
        'durationAdaption' => 'DurationAdaption',
        'fileList' => 'FileList',
        'height' => 'Height',
        'mute' => 'Mute',
        'puzzleEffect' => 'PuzzleEffect',
        'scene' => 'Scene',
        'smartEffect' => 'SmartEffect',
        'style' => 'Style',
        'transitionStyle' => 'TransitionStyle',
        'width' => 'Width',
    ];

    public function validate()
    {
        if (\is_array($this->fileList)) {
            Model::validateArray($this->fileList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->durationAdaption) {
            $res['DurationAdaption'] = $this->durationAdaption;
        }

        if (null !== $this->fileList) {
            if (\is_array($this->fileList)) {
                $res['FileList'] = [];
                $n1 = 0;
                foreach ($this->fileList as $item1) {
                    $res['FileList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['FileList'] as $item1) {
                    $model->fileList[$n1] = fileList::fromMap($item1);
                    ++$n1;
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
