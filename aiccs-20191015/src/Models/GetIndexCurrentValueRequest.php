<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class GetIndexCurrentValueRequest extends Model
{
    /**
     * @var string
     */
    public $depIds;

    /**
     * @var string
     */
    public $groupIds;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'depIds' => 'DepIds',
        'groupIds' => 'GroupIds',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->depIds) {
            $res['DepIds'] = $this->depIds;
        }

        if (null !== $this->groupIds) {
            $res['GroupIds'] = $this->groupIds;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['DepIds'])) {
            $model->depIds = $map['DepIds'];
        }

        if (isset($map['GroupIds'])) {
            $model->groupIds = $map['GroupIds'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
