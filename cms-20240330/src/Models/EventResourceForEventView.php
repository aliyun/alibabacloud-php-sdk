<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\EventResourceForEventView\entity;

class EventResourceForEventView extends Model
{
    /**
     * @var entity
     */
    public $entity;

    /**
     * @var mixed[]
     */
    public $tags;
    protected $_name = [
        'entity' => 'entity',
        'tags' => 'tags',
    ];

    public function validate()
    {
        if (null !== $this->entity) {
            $this->entity->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entity) {
            $res['entity'] = null !== $this->entity ? $this->entity->toArray($noStream) : $this->entity;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['tags'][$key1] = $value1;
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
        if (isset($map['entity'])) {
            $model->entity = entity::fromMap($map['entity']);
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                foreach ($map['tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
