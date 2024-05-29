<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyBlackholeStatusRequest extends Model
{
    /**
     * @description The action that you want to perform on the instance. Set the value to **undo**, which indicates that you want to deactivate blackhole filtering.
     *
     * This parameter is required.
     * @example undo
     *
     * @var string
     */
    public $blackholeStatus;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example ddoscoo-cn-mp91j1ao****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'blackholeStatus' => 'BlackholeStatus',
        'instanceId'      => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blackholeStatus) {
            $res['BlackholeStatus'] = $this->blackholeStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyBlackholeStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlackholeStatus'])) {
            $model->blackholeStatus = $map['BlackholeStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
