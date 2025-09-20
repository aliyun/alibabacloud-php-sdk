<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetImage\animations;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetImage\snapshots;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetImage\sprites;

class TargetImage extends Model
{
    /**
     * @var animations[]
     */
    public $animations;

    /**
     * @var snapshots[]
     */
    public $snapshots;

    /**
     * @var sprites[]
     */
    public $sprites;
    protected $_name = [
        'animations' => 'Animations',
        'snapshots' => 'Snapshots',
        'sprites' => 'Sprites',
    ];

    public function validate()
    {
        if (\is_array($this->animations)) {
            Model::validateArray($this->animations);
        }
        if (\is_array($this->snapshots)) {
            Model::validateArray($this->snapshots);
        }
        if (\is_array($this->sprites)) {
            Model::validateArray($this->sprites);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->animations) {
            if (\is_array($this->animations)) {
                $res['Animations'] = [];
                $n1 = 0;
                foreach ($this->animations as $item1) {
                    $res['Animations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->snapshots) {
            if (\is_array($this->snapshots)) {
                $res['Snapshots'] = [];
                $n1 = 0;
                foreach ($this->snapshots as $item1) {
                    $res['Snapshots'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sprites) {
            if (\is_array($this->sprites)) {
                $res['Sprites'] = [];
                $n1 = 0;
                foreach ($this->sprites as $item1) {
                    $res['Sprites'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Animations'])) {
            if (!empty($map['Animations'])) {
                $model->animations = [];
                $n1 = 0;
                foreach ($map['Animations'] as $item1) {
                    $model->animations[$n1] = animations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Snapshots'])) {
            if (!empty($map['Snapshots'])) {
                $model->snapshots = [];
                $n1 = 0;
                foreach ($map['Snapshots'] as $item1) {
                    $model->snapshots[$n1] = snapshots::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Sprites'])) {
            if (!empty($map['Sprites'])) {
                $model->sprites = [];
                $n1 = 0;
                foreach ($map['Sprites'] as $item1) {
                    $model->sprites[$n1] = sprites::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
