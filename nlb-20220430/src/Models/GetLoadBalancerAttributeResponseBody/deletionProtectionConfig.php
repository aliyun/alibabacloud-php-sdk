<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\GetLoadBalancerAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class deletionProtectionConfig extends Model
{
    /**
     * @description Specifies whether to enable deletion protection. Valid values:
     *
     *   **true**: yes
     *   **false** (default): no
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The time when the deletion protection feature was enabled. The time follows the ISO 8601 standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2022-11-02T02:49:05Z
     *
     * @var string
     */
    public $enabledTime;

    /**
     * @description The reason why the deletion protection feature is enabled or disabled. The value must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (_), and hyphens (-). The value must start with a letter.
     *
     * @example create-by-mse-can-not-delete
     *
     * @var string
     */
    public $reason;
    protected $_name = [
        'enabled'     => 'Enabled',
        'enabledTime' => 'EnabledTime',
        'reason'      => 'Reason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->enabledTime) {
            $res['EnabledTime'] = $this->enabledTime;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deletionProtectionConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['EnabledTime'])) {
            $model->enabledTime = $map['EnabledTime'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
