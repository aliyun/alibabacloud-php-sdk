<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateHighlightTaskRequest\edit;

use AlibabaCloud\Dara\Model;

class vfxEffects extends Model
{
    /**
     * @var string
     */
    public $vfxEffect;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'vfxEffect' => 'VfxEffect',
        'weight' => 'Weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vfxEffect) {
            $res['VfxEffect'] = $this->vfxEffect;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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
        if (isset($map['VfxEffect'])) {
            $model->vfxEffect = $map['VfxEffect'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
