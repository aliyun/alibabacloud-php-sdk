<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\ListLoadBalancersResponseBody\loadBalancers;

use AlibabaCloud\Tea\Model;

class modificationProtectionConfig extends Model
{
    /**
     * @description The time when the configuration read-only mode was enabled. The time is displayed in UTC in `yyyy-MM-ddTHH:mm:ssZ` format.
     *
     * @example 2022-12-01T17:22Z
     *
     * @var string
     */
    public $enabledTime;

    /**
     * @description The reason why the configuration read-only mode is enabled. The reason must be 2 to 128 characters in length and can contain letters, digits, periods (.), underscores (_), and hyphens (-). The reason must start with a letter.
     *
     * This parameter takes effect only if **Status** is set to **ConsoleProtection**.
     * @example Service guarantee period
     *
     * @var string
     */
    public $reason;

    /**
     * @description Indicates whether the configuration read-only mode is enabled. Valid values:
     *
     *   **NonProtection**: disabled. In this case, **Reason** is not returned. If **Reason** is set, the value is cleared.
     *   **ConsoleProtection**: enabled. In this case, **Reason** is returned.
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
