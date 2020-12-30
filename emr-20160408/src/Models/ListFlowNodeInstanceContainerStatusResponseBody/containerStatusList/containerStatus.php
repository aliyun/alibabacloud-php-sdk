<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowNodeInstanceContainerStatusResponseBody\containerStatusList;

use AlibabaCloud\Tea\Model;

class containerStatus extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $containerId;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $applicationId;
    protected $_name = [
        'status'        => 'Status',
        'containerId'   => 'ContainerId',
        'hostName'      => 'HostName',
        'applicationId' => 'ApplicationId',
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
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        return $model;
    }
}
