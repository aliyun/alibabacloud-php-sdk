<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\UpdateTargetListByBatchRequest;

use AlibabaCloud\Dara\Model;

class operationList extends Model
{
    /**
     * @var string
     */
    public $groupId;
    /**
     * @var string
     */
    public $operation;
    /**
     * @var string
     */
    public $uuid;
    /**
     * @var string
     */
    public $vpcInstanceId;
    protected $_name = [
        'groupId'       => 'GroupId',
        'operation'     => 'Operation',
        'uuid'          => 'Uuid',
        'vpcInstanceId' => 'VpcInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        if (null !== $this->vpcInstanceId) {
            $res['VpcInstanceId'] = $this->vpcInstanceId;
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        if (isset($map['VpcInstanceId'])) {
            $model->vpcInstanceId = $map['VpcInstanceId'];
        }

        return $model;
    }
}
