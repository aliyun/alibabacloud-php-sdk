<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\hits\hit;

class hits extends Model
{
    /**
     * @var hit[]
     */
    public $hit;
    protected $_name = [
        'hit' => 'Hit',
    ];

    public function validate()
    {
        if (\is_array($this->hit)) {
            Model::validateArray($this->hit);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hit) {
            if (\is_array($this->hit)) {
                $res['Hit'] = [];
                $n1 = 0;
                foreach ($this->hit as $item1) {
                    $res['Hit'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Hit'])) {
            if (!empty($map['Hit'])) {
                $model->hit = [];
                $n1 = 0;
                foreach ($map['Hit'] as $item1) {
                    $model->hit[$n1] = hit::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
