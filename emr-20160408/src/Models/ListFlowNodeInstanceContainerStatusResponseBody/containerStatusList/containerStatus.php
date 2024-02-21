<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowNodeInstanceContainerStatusResponseBody\containerStatusList;

use AlibabaCloud\Tea\Model;

class containerStatus extends Model
{
    /**
     * @description Application ID。
     *
     * @example application_1542333181298_0016
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description Container ID。
     *
     * @example container_1542333181298_0016_01_000015
     *
     * @var string
     */
    public $containerId;

    /**
     * @example 192.168.xx.xx
     *
     * @var string
     */
    public $hostName;

    /**
     * @example KILLED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'containerId'   => 'ContainerId',
        'hostName'      => 'HostName',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
