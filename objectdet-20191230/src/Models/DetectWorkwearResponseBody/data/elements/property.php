<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWorkwearResponseBody\data\elements;

use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWorkwearResponseBody\data\elements\property\probability;
use AlibabaCloud\Tea\Model;

class property extends Model
{
    /**
     * @example hat
     *
     * @var string
     */
    public $label;

    /**
     * @var probability
     */
    public $probability;
    protected $_name = [
        'label'       => 'Label',
        'probability' => 'Probability',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->probability) {
            $res['Probability'] = null !== $this->probability ? $this->probability->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return property
     */
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
