<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCastersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCastersResponseBody\casterList\caster;

class casterList extends Model
{
    /**
     * @var caster[]
     */
    public $caster;
    protected $_name = [
        'caster' => 'Caster',
    ];

    public function validate()
    {
        if (\is_array($this->caster)) {
            Model::validateArray($this->caster);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caster) {
            if (\is_array($this->caster)) {
                $res['Caster'] = [];
                $n1 = 0;
                foreach ($this->caster as $item1) {
                    $res['Caster'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Caster'])) {
            if (!empty($map['Caster'])) {
                $model->caster = [];
                $n1 = 0;
                foreach ($map['Caster'] as $item1) {
                    $model->caster[$n1] = caster::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
