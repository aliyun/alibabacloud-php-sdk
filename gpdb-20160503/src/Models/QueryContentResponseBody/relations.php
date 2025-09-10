<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody;

use AlibabaCloud\Dara\Model;

class relations extends Model
{
    /**
     * @var relations\relations[]
     */
    public $relations;
    protected $_name = [
        'relations' => 'relations',
    ];

    public function validate()
    {
        if (\is_array($this->relations)) {
            Model::validateArray($this->relations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->relations) {
            if (\is_array($this->relations)) {
                $res['relations'] = [];
                $n1 = 0;
                foreach ($this->relations as $item1) {
                    $res['relations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['relations'])) {
            if (!empty($map['relations'])) {
                $model->relations = [];
                $n1 = 0;
                foreach ($map['relations'] as $item1) {
                    $model->relations[$n1] = relations\relations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
