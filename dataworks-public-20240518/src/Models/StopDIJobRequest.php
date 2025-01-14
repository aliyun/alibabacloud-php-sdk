<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class StopDIJobRequest extends Model
{
    /**
     * @description This parameter is deprecated and is replaced by the Id parameter.
     *
     * @example 11668
     *
     * @deprecated
     *
     * @var int
     */
    public $DIJobId;

    /**
     * @description The ID of the synchronization task.
     *
     * @example 11668
     *
     * @var int
     */
    public $id;

    /**
     * @description The instance ID.
     *
     * @example 1234
     *
     * @var int
     */
    public $instanceId;
    protected $_name = [
        'DIJobId'    => 'DIJobId',
        'id'         => 'Id',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopDIJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DIJobId'])) {
            $model->DIJobId = $map['DIJobId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
