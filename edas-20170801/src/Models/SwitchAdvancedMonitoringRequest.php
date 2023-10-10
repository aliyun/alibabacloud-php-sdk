<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class SwitchAdvancedMonitoringRequest extends Model
{
    /**
     * @description The ID of the application for which you want to query or configure the advanced application monitoring feature.
     *
     * @example 9e224bc6-a646-4484-****-e617b7e7****
     *
     * @var string
     */
    public $appId;

    /**
     * @description Specifies whether to enable the advanced application monitoring feature. Valid values:
     *
     *   true: enables the advanced application monitoring feature.
     *   false: disables the advanced application monitoring feature.
     *
     * If you call this operation to query the status of the advanced application monitoring feature, you do not need to specify this parameter.
     * @example true
     *
     * @var bool
     */
    public $enableAdvancedMonitoring;
    protected $_name = [
        'appId'                    => 'AppId',
        'enableAdvancedMonitoring' => 'EnableAdvancedMonitoring',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->enableAdvancedMonitoring) {
            $res['EnableAdvancedMonitoring'] = $this->enableAdvancedMonitoring;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwitchAdvancedMonitoringRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EnableAdvancedMonitoring'])) {
            $model->enableAdvancedMonitoring = $map['EnableAdvancedMonitoring'];
        }

        return $model;
    }
}
