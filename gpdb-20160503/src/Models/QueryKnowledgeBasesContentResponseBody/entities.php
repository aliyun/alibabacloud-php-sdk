<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryKnowledgeBasesContentResponseBody;

use AlibabaCloud\Dara\Model;

class entities extends Model
{
    /**
     * @var entities\entities[]
     */
    public $entities;
    protected $_name = [
        'entities' => 'entities',
    ];

    public function validate()
    {
        if (\is_array($this->entities)) {
            Model::validateArray($this->entities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entities) {
            if (\is_array($this->entities)) {
                $res['entities'] = [];
                $n1 = 0;
                foreach ($this->entities as $item1) {
                    $res['entities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['entities'])) {
            if (!empty($map['entities'])) {
                $model->entities = [];
                $n1 = 0;
                foreach ($map['entities'] as $item1) {
                    $model->entities[$n1] = entities\entities::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
