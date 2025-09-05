<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeActionResponseBody\data\elements;

use AlibabaCloud\Dara\Model;

class boxes extends Model
{
    /**
     * @var int[]
     */
    public $box;
    protected $_name = [
        'box' => 'Box',
    ];

    public function validate()
    {
        if (\is_array($this->box)) {
            Model::validateArray($this->box);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->box) {
            if (\is_array($this->box)) {
                $res['Box'] = [];
                $n1 = 0;
                foreach ($this->box as $item1) {
                    $res['Box'][$n1] = $item1;
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
        if (isset($map['Box'])) {
            if (!empty($map['Box'])) {
                $model->box = [];
                $n1 = 0;
                foreach ($map['Box'] as $item1) {
                    $model->box[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
