<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\CreateLoadBalancerRequest;

use AlibabaCloud\Tea\Model;

class modificationProtectionConfig extends Model
{
    /**
     * @description The reason why the configuration read-only mode is enabled. The value must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (\_), and hyphens (-). The value must start with a letter.
     *
     * >  This parameter takes effect only if the **Status** parameter is set to **ConsoleProtection**.
     * @example Service guarantee period
     *
     * @var string
     */
    public $reason;

    /**
     * @description Specifies whether to enable the configuration read-only mode. Valid values:
     *
     *   **NonProtection**: does not enable the configuration read-only mode. You cannot set the **Reason** parameter. If the **Reason** parameter is set, the value is cleared.
     *   **ConsoleProtection**: enables the configuration read-only mode. You can set the **Reason** parameter.
     *
     * >  If you set this parameter to **ConsoleProtection**, you cannot use the NLB console to modify instance configurations. However, you can call API operations to modify instance configurations.
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
