<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class GetSpaceModelSortRequest extends Model
{
    /**
     * @example instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example CMDB、SETUP
     *
     * @var string
     */
    public $operateType;

    /**
     * @example 园区
     *
     * @var string
     */
    public $spaceType;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'operateType' => 'OperateType',
        'spaceType'   => 'SpaceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->spaceType) {
            $res['SpaceType'] = $this->spaceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSpaceModelSortRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['SpaceType'])) {
            $model->spaceType = $map['SpaceType'];
        }

        return $model;
    }
}
