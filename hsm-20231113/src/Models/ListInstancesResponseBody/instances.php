<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models\ListInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The ID of the HSM.
     *
     * @example hsm-cn-vj30bil8****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The HSM status. Valid values:
     *
     *   PENDING: The HSM is disabled.
     *   ACTIVE: The HSM is enabled.
     *   EXPIRED: The HSM expired.
     *   INVALID: The HSM is invalid.
     *   FAILURE: The HSM failed to be created.
     *   RESET: The HSM is being reset.
     *   PAUSED: The HSM is paused.
     *   MODIFYING: The HSM is being modified.
     *
     * @example ACTIVE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'instanceId' => 'InstanceId',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
