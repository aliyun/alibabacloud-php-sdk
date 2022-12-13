<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentDetailEscalationPlansResponseBody\data\convergenceEscalationPlan;

use AlibabaCloud\Tea\Model;

class serviceGroupList extends Model
{
    /**
     * @example 1231
     *
     * @var int
     */
    public $id;

    /**
     * @example 服务组A
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'id'   => 'id',
        'name' => 'name',
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
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceGroupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
