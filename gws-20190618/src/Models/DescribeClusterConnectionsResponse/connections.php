<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gws\V20190618\Models\DescribeClusterConnectionsResponse;

use AlibabaCloud\Tea\Model;

class connections extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $clientName;

    /**
     * @var string
     */
    public $logonTime;

    /**
     * @var string
     */
    public $logoffTime;

    /**
     * @var string
     */
    public $logoffStatus;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'hostName'     => 'HostName',
        'clientName'   => 'ClientName',
        'logonTime'    => 'LogonTime',
        'logoffTime'   => 'LogoffTime',
        'logoffStatus' => 'LogoffStatus',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('instanceName', $this->instanceName, true);
        Model::validateRequired('hostName', $this->hostName, true);
        Model::validateRequired('clientName', $this->clientName, true);
        Model::validateRequired('logonTime', $this->logonTime, true);
        Model::validateRequired('logoffTime', $this->logoffTime, true);
        Model::validateRequired('logoffStatus', $this->logoffStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->clientName) {
            $res['ClientName'] = $this->clientName;
        }
        if (null !== $this->logonTime) {
            $res['LogonTime'] = $this->logonTime;
        }
        if (null !== $this->logoffTime) {
            $res['LogoffTime'] = $this->logoffTime;
        }
        if (null !== $this->logoffStatus) {
            $res['LogoffStatus'] = $this->logoffStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['ClientName'])) {
            $model->clientName = $map['ClientName'];
        }
        if (isset($map['LogonTime'])) {
            $model->logonTime = $map['LogonTime'];
        }
        if (isset($map['LogoffTime'])) {
            $model->logoffTime = $map['LogoffTime'];
        }
        if (isset($map['LogoffStatus'])) {
            $model->logoffStatus = $map['LogoffStatus'];
        }

        return $model;
    }
}
