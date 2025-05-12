<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomPersonsResponseBody\categories\category\persons\person;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomPersonsResponseBody\categories\category\persons\person\faces\face;

class faces extends Model
{
    /**
     * @var face[]
     */
    public $face;
    protected $_name = [
        'face' => 'Face',
    ];

    public function validate()
    {
        if (\is_array($this->face)) {
            Model::validateArray($this->face);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->face) {
            if (\is_array($this->face)) {
                $res['Face'] = [];
                $n1 = 0;
                foreach ($this->face as $item1) {
                    $res['Face'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Face'])) {
            if (!empty($map['Face'])) {
                $model->face = [];
                $n1 = 0;
                foreach ($map['Face'] as $item1) {
                    $model->face[$n1++] = face::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
