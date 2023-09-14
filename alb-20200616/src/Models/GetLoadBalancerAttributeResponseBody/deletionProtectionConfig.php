<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class deletionProtectionConfig extends Model
{
    /**
     * @description Indicates whether the deletion protection feature is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The time when the deletion protection feature was enabled. The time follows the ISO 8601 standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2022-08-02T02:49:05Z
     *
     * @var string
     */
    public $enabledTime;
    protected $_name = [
        'enabled'     => 'Enabled',
        'enabledTime' => 'EnabledTime',
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

        return $model;
    }
}
