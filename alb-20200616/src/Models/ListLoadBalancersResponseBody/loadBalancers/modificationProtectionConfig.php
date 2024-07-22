<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListLoadBalancersResponseBody\loadBalancers;

use AlibabaCloud\Tea\Model;

class modificationProtectionConfig extends Model
{
    /**
     * @description The reason why the configuration read-only mode is enabled.
     *
     * The reason must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (_), and hyphens (-).
     *
     * This parameter is available only if the **ModificationProtectionStatus** parameter is set to **ConsoleProtection**.
     * @example Test Reason
     *
     * @var string
     */
    public $reason;

    /**
     * @description Indicates whether the configuration read-only mode is enabled for the ALB instance. Valid values:
     *
     *   **NonProtection**: Modification protection is disabled. In this case, you cannot set the ModificationProtectionReason parameter. If the ModificationProtectionReason parameter is specified, the value is cleared.
     *   **ConsoleProtection**: Modification protection is enabled. In this case, you can set the ModificationProtectionReason parameter.
     *
     * >  If the value is **ConsoleProtection**, modification protection is enabled. You cannot modify the configurations of the ALB instance in the ALB console. However, you can call API operations to modify the configurations of the ALB instance.
     * @example ConsoleProtection
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'reason' => 'Reason',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modificationProtectionConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
