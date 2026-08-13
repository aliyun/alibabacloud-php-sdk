<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateScheduledTaskRequest\taskDetail;

use AlibabaCloud\Dara\Model;

class relatedSemantics extends Model
{
    /**
     * @var string
     */
    public $attributes;

    /**
     * @var string
     */
    public $entity;
    protected $_name = [
        'attributes' => 'attributes',
        'entity' => 'entity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['attributes'] = $this->attributes;
        }

        if (null !== $this->entity) {
            $res['entity'] = $this->entity;
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
        if (isset($map['attributes'])) {
            $model->attributes = $map['attributes'];
        }

        if (isset($map['entity'])) {
            $model->entity = $map['entity'];
        }

        return $model;
    }
}
