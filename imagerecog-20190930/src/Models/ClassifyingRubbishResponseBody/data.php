<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models\ClassifyingRubbishResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\ClassifyingRubbishResponseBody\data\elements;

class data extends Model
{
    /**
     * @var elements[]
     */
    public $elements;

    /**
     * @var bool
     */
    public $sensitive;
    protected $_name = [
        'elements' => 'Elements',
        'sensitive' => 'Sensitive',
    ];

    public function validate()
    {
        if (\is_array($this->elements)) {
            Model::validateArray($this->elements);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elements) {
            if (\is_array($this->elements)) {
                $res['Elements'] = [];
                $n1 = 0;
                foreach ($this->elements as $item1) {
                    $res['Elements'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sensitive) {
            $res['Sensitive'] = $this->sensitive;
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
        if (isset($map['Elements'])) {
            if (!empty($map['Elements'])) {
                $model->elements = [];
                $n1 = 0;
                foreach ($map['Elements'] as $item1) {
                    $model->elements[$n1] = elements::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Sensitive'])) {
            $model->sensitive = $map['Sensitive'];
        }

        return $model;
    }
}
