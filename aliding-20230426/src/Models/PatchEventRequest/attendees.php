<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventRequest;

use AlibabaCloud\Dara\Model;

class attendees extends Model
{
    /**
     * @var string
     */
    public $id;
    /**
     * @var bool
     */
    public $isOptional;
    protected $_name = [
        'id'         => 'id',
        'isOptional' => 'isOptional',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->isOptional) {
            $res['isOptional'] = $this->isOptional;
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['isOptional'])) {
            $model->isOptional = $map['isOptional'];
        }

        return $model;
    }
}
