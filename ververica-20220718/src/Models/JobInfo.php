<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class JobInfo extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var mixed[]
     */
    public $properties;
    protected $_name = [
        'id'         => 'id',
        'properties' => 'properties',
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
        if (null !== $this->properties) {
            $res['properties'] = $this->properties;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JobInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['properties'])) {
            $model->properties = $map['properties'];
        }

        return $model;
    }
}
