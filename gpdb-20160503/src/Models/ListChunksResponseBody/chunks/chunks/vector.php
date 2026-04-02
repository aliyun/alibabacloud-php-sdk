<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListChunksResponseBody\chunks\chunks;

use AlibabaCloud\Dara\Model;

class vector extends Model
{
    /**
     * @var float[]
     */
    public $vector;
    protected $_name = [
        'vector' => 'vector',
    ];

    public function validate()
    {
        if (\is_array($this->vector)) {
            Model::validateArray($this->vector);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vector) {
            if (\is_array($this->vector)) {
                $res['vector'] = [];
                $n1 = 0;
                foreach ($this->vector as $item1) {
                    $res['vector'][$n1] = $item1;
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
        if (isset($map['vector'])) {
            if (!empty($map['vector'])) {
                $model->vector = [];
                $n1 = 0;
                foreach ($map['vector'] as $item1) {
                    $model->vector[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
