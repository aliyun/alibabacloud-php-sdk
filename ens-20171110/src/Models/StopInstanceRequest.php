<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class StopInstanceRequest extends Model
{
    /**
     * @description Specifies whether to forcibly stop the servers.
     *
     *   **true**: forcibly stops the instance.
     *   **false**: normally stops the servers. This is the default value.
     *
     * @example true
     *
     * @var string
     */
    public $forceStop;

    /**
     * @description The ID of the instance that you want to stop. You can specify only one instance ID.
     *
     * @example i-instanceid****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'forceStop'  => 'ForceStop',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forceStop) {
            $res['ForceStop'] = $this->forceStop;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForceStop'])) {
            $model->forceStop = $map['ForceStop'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
