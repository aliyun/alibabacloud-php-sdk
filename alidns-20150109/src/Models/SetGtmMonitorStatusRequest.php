<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class SetGtmMonitorStatusRequest extends Model
{
    /**
     * @description The language used by the user.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The health check ID.
     *
     * @example abc1234
     *
     * @var string
     */
    public $monitorConfigId;

    /**
     * @description Specifies whether health check is enabled for the address pool. Valid values:
     *
     *   **OPEN**: Enabled
     *   **CLOSE**: Disabled
     *
     * @example OPEN
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
     * @return SetGtmMonitorStatusRequest
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
