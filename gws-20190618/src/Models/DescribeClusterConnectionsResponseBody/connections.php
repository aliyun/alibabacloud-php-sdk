<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gws\V20190618\Models\DescribeClusterConnectionsResponseBody;

use AlibabaCloud\Tea\Model;

class connections extends Model
{
    /**
     * @var string
     */
    public $logoffStatus;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $logonTime;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $logoffTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $clientName;
    protected $_name = [
        'logoffStatus' => 'LogoffStatus',
        'instanceName' => 'InstanceName',
        'logonTime'    => 'LogonTime',
        'hostName'     => 'HostName',
        'logoffTime'   => 'LogoffTime',
        'instanceId'   => 'InstanceId',
        'clientName'   => 'ClientName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logoffStatus) {
            $res['LogoffStatus'] = $this->logoffStatus;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->logonTime) {
            $res['LogonTime'] = $this->logonTime;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->logoffTime) {
            $res['LogoffTime'] = $this->logoffTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->clientName) {
            $res['ClientName'] = $this->clientName;
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
        if (isset($map['LogoffStatus'])) {
            $model->logoffStatus = $map['LogoffStatus'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['LogonTime'])) {
            $model->logonTime = $map['LogonTime'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['LogoffTime'])) {
            $model->logoffTime = $map['LogoffTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ClientName'])) {
            $model->clientName = $map['ClientName'];
        }

        return $model;
    }
}
