<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeCSGClientsResponseBody;

use AlibabaCloud\Tea\Model;

class clients extends Model
{
    /**
     * @var string
     */
    public $clientDeletionCommand;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientInstallationCommand;

    /**
     * @var string
     */
    public $clientVersion;

    /**
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @var string
     */
    public $hostInstanceId;

    /**
     * @var int
     */
    public $lastHeartbeatTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $workDirectory;
    protected $_name = [
        'clientDeletionCommand'     => 'ClientDeletionCommand',
        'clientId'                  => 'ClientId',
        'clientInstallationCommand' => 'ClientInstallationCommand',
        'clientVersion'             => 'ClientVersion',
        'ecsInstanceId'             => 'EcsInstanceId',
        'hostInstanceId'            => 'HostInstanceId',
        'lastHeartbeatTime'         => 'LastHeartbeatTime',
        'status'                    => 'Status',
        'vpcId'                     => 'VpcId',
        'workDirectory'             => 'WorkDirectory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientDeletionCommand) {
            $res['ClientDeletionCommand'] = $this->clientDeletionCommand;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientInstallationCommand) {
            $res['ClientInstallationCommand'] = $this->clientInstallationCommand;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
        }
        if (null !== $this->hostInstanceId) {
            $res['HostInstanceId'] = $this->hostInstanceId;
        }
        if (null !== $this->lastHeartbeatTime) {
            $res['LastHeartbeatTime'] = $this->lastHeartbeatTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->workDirectory) {
            $res['WorkDirectory'] = $this->workDirectory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clients
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientDeletionCommand'])) {
            $model->clientDeletionCommand = $map['ClientDeletionCommand'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientInstallationCommand'])) {
            $model->clientInstallationCommand = $map['ClientInstallationCommand'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['EcsInstanceId'])) {
            $model->ecsInstanceId = $map['EcsInstanceId'];
        }
        if (isset($map['HostInstanceId'])) {
            $model->hostInstanceId = $map['HostInstanceId'];
        }
        if (isset($map['LastHeartbeatTime'])) {
            $model->lastHeartbeatTime = $map['LastHeartbeatTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['WorkDirectory'])) {
            $model->workDirectory = $map['WorkDirectory'];
        }

        return $model;
    }
}
