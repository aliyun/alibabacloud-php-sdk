<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\UpdateTargetListByBatchRequest;

use AlibabaCloud\Tea\Model;

class operationList extends Model
{
    /**
     * @example 11883086
     *
     * @var string
     */
    public $groupId;

    /**
     * @example add
     *
     * @var string
     */
    public $operation;

    /**
     * @example de393767-6fe1-4a8d-837d-927a2b******
     *
     * @var string
     */
    public $uuid;

    /**
     * @example vpc-bp1ow0rm9t92iza******
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return operationList
     */
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
