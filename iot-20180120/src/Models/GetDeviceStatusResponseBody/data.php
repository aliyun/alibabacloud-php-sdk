<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetDeviceStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The status of the device. Valid values:
     *
     *   **ONLINE**: The device is online.
     *   **OFFLINE**: The device is offline.
     *   **UNACTIVE**: The device is not activated.
     *   **DISABLE**: The device is disabled.
     *
     * @example ONLINE
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the device status changed.
     *
     * @example 1557062301656
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'status'    => 'Status',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
