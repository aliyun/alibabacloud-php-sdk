<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstanceStatusResponseBody;

use AlibabaCloud\Tea\Model;

class instanceStatuses extends Model
{
    /**
     * @description The ID of the simple application server.
     *
     * @example a9a6474b935d41bcb531250bb5d****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The status of the simple application server. Valid values:
     *
     *   Pending
     *   Starting
     *   Running
     *   Stopping
     *   Stopped
     *   Resetting
     *   Upgrading
     *   Disabled
     *
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceStatuses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
