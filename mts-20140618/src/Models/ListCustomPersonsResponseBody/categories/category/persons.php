<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomPersonsResponseBody\categories\category;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomPersonsResponseBody\categories\category\persons\person;

class persons extends Model
{
    /**
     * @var person[]
     */
    public $person;
    protected $_name = [
        'person' => 'Person',
    ];

    public function validate()
    {
        if (\is_array($this->person)) {
            Model::validateArray($this->person);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->person) {
            if (\is_array($this->person)) {
                $res['Person'] = [];
                $n1 = 0;
                foreach ($this->person as $item1) {
                    $res['Person'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Person'])) {
            if (!empty($map['Person'])) {
                $model->person = [];
                $n1 = 0;
                foreach ($map['Person'] as $item1) {
                    $model->person[$n1++] = person::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
