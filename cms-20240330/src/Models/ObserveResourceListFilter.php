<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ObserveResourceListFilter extends Model
{
    /**
     * @var string[]
     */
    public $contains;
    protected $_name = [
        'contains' => 'contains',
    ];

    public function validate()
    {
        if (\is_array($this->contains)) {
            Model::validateArray($this->contains);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contains) {
            if (\is_array($this->contains)) {
                $res['contains'] = [];
                $n1 = 0;
                foreach ($this->contains as $item1) {
                    $res['contains'][$n1] = $item1;
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
        if (isset($map['contains'])) {
            if (!empty($map['contains'])) {
                $model->contains = [];
                $n1 = 0;
                foreach ($map['contains'] as $item1) {
                    $model->contains[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
