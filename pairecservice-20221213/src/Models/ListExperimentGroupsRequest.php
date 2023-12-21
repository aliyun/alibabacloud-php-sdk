<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class ListExperimentGroupsRequest extends Model
{
    /**
     * @example pairec-cn-abcdefg1234
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 3
     *
     * @var string
     */
    public $layerId;

    /**
     * @example Online
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'layerId'    => 'LayerId',
        'status'     => 'Status',
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
        if (null !== $this->layerId) {
            $res['LayerId'] = $this->layerId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListExperimentGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LayerId'])) {
            $model->layerId = $map['LayerId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
