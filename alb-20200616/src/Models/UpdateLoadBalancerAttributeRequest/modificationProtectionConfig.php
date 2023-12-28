<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateLoadBalancerAttributeRequest;

use AlibabaCloud\Tea\Model;

class modificationProtectionConfig extends Model
{
    /**
     * @description It must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (\_), and hyphens (-). It must start with a letter.
     *
     * This parameter takes effect only when **ModificationProtectionStatus** is set to **ConsoleProtection**.
     * @example test
     *
     * @var string
     */
    public $reason;

    /**
     * @description The status of the configuration read-only mode. Valid values:
     *
     *   **NonProtection**: disables the configuration read-only mode. In this case, you cannot specify **ModificationProtectionReason**. If you specify **ModificationProtectionReason**, the value of the parameter is cleared.
     *   **ConsoleProtection**: enables the configuration read-only mode. In this case, you can specify **ModificationProtectionReason**.
     *
     * > If you set this parameter to **ConsoleProtection**, you cannot use the ALB console to modify instance configurations. However, you can call API operations to modify instance configurations.
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
