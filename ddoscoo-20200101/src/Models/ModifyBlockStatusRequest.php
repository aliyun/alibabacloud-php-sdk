<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyBlockStatusRequest extends Model
{
    /**
     * @description The blocking period. Valid values: **15** to **43200**. Unit: minutes.
     *
     * > If you set **Status** to **do**, you must also specify this parameter.
     * @example 60
     *
     * @var int
     */
    public $duration;

    /**
     * @description The ID of the Anti-DDoS Pro instance to manage.
     *
     * > You can call the [DescribeInstanceIds](~~157459~~) operation to query the IDs of all instances.
     * @example ddoscoo-cn-mp91j1ao****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description An array consisting of the Internet service provider (ISP) lines from which traffic is blocked.
     *
     * @example ct
     *
     * @var string[]
     */
    public $lines;

    /**
     * @description Specifies the status of the Diversion from Origin Server policy. Valid values:
     *
     *   **do**: enables the policy.
     *   **undo**: disables the policy.
     *
     * @example do
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'duration'   => 'Duration',
        'instanceId' => 'InstanceId',
        'lines'      => 'Lines',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lines) {
            $res['Lines'] = $this->lines;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyBlockStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lines'])) {
            if (!empty($map['Lines'])) {
                $model->lines = $map['Lines'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
