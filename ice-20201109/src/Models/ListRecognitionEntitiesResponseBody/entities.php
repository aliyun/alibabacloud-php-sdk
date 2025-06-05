<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListRecognitionEntitiesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListRecognitionEntitiesResponseBody\entities\entity;

class entities extends Model
{
    /**
     * @var entity[]
     */
    public $entity;
    protected $_name = [
        'entity' => 'Entity',
    ];

    public function validate()
    {
        if (\is_array($this->entity)) {
            Model::validateArray($this->entity);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entity) {
            if (\is_array($this->entity)) {
                $res['Entity'] = [];
                $n1 = 0;
                foreach ($this->entity as $item1) {
                    $res['Entity'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Entity'])) {
            if (!empty($map['Entity'])) {
                $model->entity = [];
                $n1 = 0;
                foreach ($map['Entity'] as $item1) {
                    $model->entity[$n1++] = entity::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
