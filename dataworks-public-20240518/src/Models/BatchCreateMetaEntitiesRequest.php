<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\BatchCreateMetaEntitiesRequest\entities;

class BatchCreateMetaEntitiesRequest extends Model
{
    /**
     * @var entities[]
     */
    public $entities;
    protected $_name = [
        'entities' => 'Entities',
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
                $res['Entities'] = [];
                $n1 = 0;
                foreach ($this->entities as $item1) {
                    $res['Entities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Entities'])) {
            if (!empty($map['Entities'])) {
                $model->entities = [];
                $n1 = 0;
                foreach ($map['Entities'] as $item1) {
                    $model->entities[$n1] = entities::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
