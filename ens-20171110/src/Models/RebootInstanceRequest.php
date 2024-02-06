<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class RebootInstanceRequest extends Model
{
    /**
     * @description Indicates whether to stop the instance forcibly before you reboot it. Default value: false. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var string
     */
    public $forceStop;

    /**
     * @description The ID of the instance that you want to reboot. You can specify only one instance ID.
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
     * @return RebootInstanceRequest
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
