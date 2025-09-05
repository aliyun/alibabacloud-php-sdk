<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponseBody\data\outputs\results\hands;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponseBody\data\outputs\results\hands\keyPoints\positions;

class keyPoints extends Model
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var positions[]
     */
    public $positions;
    protected $_name = [
        'label' => 'Label',
        'positions' => 'Positions',
    ];

    public function validate()
    {
        if (\is_array($this->positions)) {
            Model::validateArray($this->positions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->positions) {
            if (\is_array($this->positions)) {
                $res['Positions'] = [];
                $n1 = 0;
                foreach ($this->positions as $item1) {
                    $res['Positions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['Positions'])) {
            if (!empty($map['Positions'])) {
                $model->positions = [];
                $n1 = 0;
                foreach ($map['Positions'] as $item1) {
                    $model->positions[$n1] = positions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
