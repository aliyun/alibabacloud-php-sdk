<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCloudMonitorAgentStatusesResponseBody;

use AlibabaCloud\Tea\Model;

class instanceStatusList extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoInstall;

    /**
     * @example c854dc6f07e74953830bb5808d0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'autoInstall' => 'AutoInstall',
        'instanceId'  => 'InstanceId',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoInstall) {
            $res['AutoInstall'] = $this->autoInstall;
        }
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
     * @return instanceStatusList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoInstall'])) {
            $model->autoInstall = $map['AutoInstall'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
