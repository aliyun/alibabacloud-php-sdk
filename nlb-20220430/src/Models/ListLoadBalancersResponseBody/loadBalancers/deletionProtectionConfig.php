<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\ListLoadBalancersResponseBody\loadBalancers;

use AlibabaCloud\Tea\Model;

class deletionProtectionConfig extends Model
{
    /**
     * @description Indicates whether deletion protection is enabled. Valid values:
     *
     *   **true**: enabled
     *   **false**: disabled
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The time when deletion protection was enabled. The time is displayed in UTC in `yyyy-MM-ddTHH:mm:ssZ` format.
     *
     * @example 2022-12-01T17:22Z
     *
     * @var string
     */
    public $enabledTime;

    /**
     * @description The reason why the deletion protection feature is enabled or disabled. The reason must be 2 to 128 characters in length and can contain letters, digits, periods (.), underscores (_), and hyphens (-). The reason must start with a letter.
     *
     * @example The instance is running
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
