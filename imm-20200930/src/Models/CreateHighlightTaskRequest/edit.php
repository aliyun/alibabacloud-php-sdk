<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateHighlightTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateHighlightTaskRequest\edit\backgroundMusics;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateHighlightTaskRequest\edit\transitions;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateHighlightTaskRequest\edit\vfxEffects;

class edit extends Model
{
    /**
     * @var string
     */
    public $backgroundMusicMode;

    /**
     * @var backgroundMusics[]
     */
    public $backgroundMusics;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $transitionMode;

    /**
     * @var transitions[]
     */
    public $transitions;

    /**
     * @var string
     */
    public $vfxEffectMode;

    /**
     * @var vfxEffects[]
     */
    public $vfxEffects;
    protected $_name = [
        'backgroundMusicMode' => 'BackgroundMusicMode',
        'backgroundMusics' => 'BackgroundMusics',
        'mode' => 'Mode',
        'transitionMode' => 'TransitionMode',
        'transitions' => 'Transitions',
        'vfxEffectMode' => 'VfxEffectMode',
        'vfxEffects' => 'VfxEffects',
    ];

    public function validate()
    {
        if (\is_array($this->backgroundMusics)) {
            Model::validateArray($this->backgroundMusics);
        }
        if (\is_array($this->transitions)) {
            Model::validateArray($this->transitions);
        }
        if (\is_array($this->vfxEffects)) {
            Model::validateArray($this->vfxEffects);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backgroundMusicMode) {
            $res['BackgroundMusicMode'] = $this->backgroundMusicMode;
        }

        if (null !== $this->backgroundMusics) {
            if (\is_array($this->backgroundMusics)) {
                $res['BackgroundMusics'] = [];
                $n1 = 0;
                foreach ($this->backgroundMusics as $item1) {
                    $res['BackgroundMusics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->transitionMode) {
            $res['TransitionMode'] = $this->transitionMode;
        }

        if (null !== $this->transitions) {
            if (\is_array($this->transitions)) {
                $res['Transitions'] = [];
                $n1 = 0;
                foreach ($this->transitions as $item1) {
                    $res['Transitions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vfxEffectMode) {
            $res['VfxEffectMode'] = $this->vfxEffectMode;
        }

        if (null !== $this->vfxEffects) {
            if (\is_array($this->vfxEffects)) {
                $res['VfxEffects'] = [];
                $n1 = 0;
                foreach ($this->vfxEffects as $item1) {
                    $res['VfxEffects'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['BackgroundMusicMode'])) {
            $model->backgroundMusicMode = $map['BackgroundMusicMode'];
        }

        if (isset($map['BackgroundMusics'])) {
            if (!empty($map['BackgroundMusics'])) {
                $model->backgroundMusics = [];
                $n1 = 0;
                foreach ($map['BackgroundMusics'] as $item1) {
                    $model->backgroundMusics[$n1] = backgroundMusics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['TransitionMode'])) {
            $model->transitionMode = $map['TransitionMode'];
        }

        if (isset($map['Transitions'])) {
            if (!empty($map['Transitions'])) {
                $model->transitions = [];
                $n1 = 0;
                foreach ($map['Transitions'] as $item1) {
                    $model->transitions[$n1] = transitions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VfxEffectMode'])) {
            $model->vfxEffectMode = $map['VfxEffectMode'];
        }

        if (isset($map['VfxEffects'])) {
            if (!empty($map['VfxEffects'])) {
                $model->vfxEffects = [];
                $n1 = 0;
                foreach ($map['VfxEffects'] as $item1) {
                    $model->vfxEffects[$n1] = vfxEffects::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
