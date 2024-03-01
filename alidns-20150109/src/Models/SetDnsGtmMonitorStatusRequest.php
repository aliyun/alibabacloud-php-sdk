<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class SetDnsGtmMonitorStatusRequest extends Model
{
    /**
     * @description The language of the values for specific response parameters. Default value: en. Valid values: en, zh, and ja.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the health check task.
     *
     * @example MonitorConfigId1
     *
     * @var string
     */
    public $monitorConfigId;

    /**
     * @description Specifies whether to enable the health check feature. Valid values:
     *
     *   OPEN: enables the health check feature.
     *   CLOSE: disables the health check feature.
     *
     * @example open
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'lang'            => 'Lang',
        'monitorConfigId' => 'MonitorConfigId',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->monitorConfigId) {
            $res['MonitorConfigId'] = $this->monitorConfigId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDnsGtmMonitorStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MonitorConfigId'])) {
            $model->monitorConfigId = $map['MonitorConfigId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
