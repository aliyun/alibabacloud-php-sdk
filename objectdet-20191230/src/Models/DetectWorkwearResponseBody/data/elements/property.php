<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWorkwearResponseBody\data\elements;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWorkwearResponseBody\data\elements\property\probability;

class property extends Model
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var probability
     */
    public $probability;
    protected $_name = [
        'label' => 'Label',
        'probability' => 'Probability',
    ];

    public function validate()
    {
        if (null !== $this->probability) {
            $this->probability->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->probability) {
            $res['Probability'] = null !== $this->probability ? $this->probability->toArray($noStream) : $this->probability;
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
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['Probability'])) {
            $model->probability = probability::fromMap($map['Probability']);
        }

        return $model;
    }
}
