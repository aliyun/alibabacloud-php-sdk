<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\GetLoadBalancerAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class modificationProtectionConfig extends Model
{
    /**
     * @description The time when the modification protection feature was enabled. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2022-12-02T02:49:05Z
     *
     * @var string
     */
    public $enabledTime;

    /**
     * @description The reason why the configuration read-only mode is enabled. The value must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (\_), and hyphens (-). The value must start with a letter.
     *
     * >  This parameter takes effect only if the **Status** parameter is set to **ConsoleProtection**.
     * @example create-by-mse-cannot-modify
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
        'enabledTime' => 'EnabledTime',
        'reason'      => 'Reason',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabledTime) {
            $res['EnabledTime'] = $this->enabledTime;
        }
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
        if (isset($map['EnabledTime'])) {
            $model->enabledTime = $map['EnabledTime'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
