<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventRequest;

use AlibabaCloud\Tea\Model;

class attendees extends Model
{
    /**
     * @example 7845
     *
     * @var string
     */
    public $id;

    /**
     * @example true
     *
     * @var bool
     */
    public $isOptional;
    protected $_name = [
        'id'         => 'id',
        'isOptional' => 'isOptional',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return attendees
     */
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
