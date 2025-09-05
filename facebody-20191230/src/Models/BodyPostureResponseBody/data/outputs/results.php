<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\BodyPostureResponseBody\data\outputs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BodyPostureResponseBody\data\outputs\results\bodies;

class results extends Model
{
    /**
     * @var bodies[]
     */
    public $bodies;
    protected $_name = [
        'bodies' => 'Bodies',
    ];

    public function validate()
    {
        if (\is_array($this->bodies)) {
            Model::validateArray($this->bodies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bodies) {
            if (\is_array($this->bodies)) {
                $res['Bodies'] = [];
                $n1 = 0;
                foreach ($this->bodies as $item1) {
                    $res['Bodies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Bodies'])) {
            if (!empty($map['Bodies'])) {
                $model->bodies = [];
                $n1 = 0;
                foreach ($map['Bodies'] as $item1) {
                    $model->bodies[$n1] = bodies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
