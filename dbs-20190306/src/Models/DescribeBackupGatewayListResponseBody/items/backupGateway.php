<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupGatewayListResponseBody\items;

use AlibabaCloud\Tea\Model;

class backupGateway extends Model
{
    /**
     * @var int
     */
    public $backupGatewayCreateTime;

    /**
     * @var string
     */
    public $backupGatewayId;

    /**
     * @var string
     */
    public $backupGatewayStatus;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var int
     */
    public $lastHeartbeatTime;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $sourceEndpointHostname;

    /**
     * @var string
     */
    public $sourceEndpointInternetIP;

    /**
     * @var string
     */
    public $sourceEndpointIntranetIP;
    protected $_name = [
        'backupGatewayCreateTime'  => 'BackupGatewayCreateTime',
        'backupGatewayId'          => 'BackupGatewayId',
        'backupGatewayStatus'      => 'BackupGatewayStatus',
        'displayName'              => 'DisplayName',
        'identifier'               => 'Identifier',
        'lastHeartbeatTime'        => 'LastHeartbeatTime',
        'region'                   => 'Region',
        'sourceEndpointHostname'   => 'SourceEndpointHostname',
        'sourceEndpointInternetIP' => 'SourceEndpointInternetIP',
        'sourceEndpointIntranetIP' => 'SourceEndpointIntranetIP',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupGatewayCreateTime) {
            $res['BackupGatewayCreateTime'] = $this->backupGatewayCreateTime;
        }
        if (null !== $this->backupGatewayId) {
            $res['BackupGatewayId'] = $this->backupGatewayId;
        }
        if (null !== $this->backupGatewayStatus) {
            $res['BackupGatewayStatus'] = $this->backupGatewayStatus;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->lastHeartbeatTime) {
            $res['LastHeartbeatTime'] = $this->lastHeartbeatTime;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->sourceEndpointHostname) {
            $res['SourceEndpointHostname'] = $this->sourceEndpointHostname;
        }
        if (null !== $this->sourceEndpointInternetIP) {
            $res['SourceEndpointInternetIP'] = $this->sourceEndpointInternetIP;
        }
        if (null !== $this->sourceEndpointIntranetIP) {
            $res['SourceEndpointIntranetIP'] = $this->sourceEndpointIntranetIP;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupGateway
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupGatewayCreateTime'])) {
            $model->backupGatewayCreateTime = $map['BackupGatewayCreateTime'];
        }
        if (isset($map['BackupGatewayId'])) {
            $model->backupGatewayId = $map['BackupGatewayId'];
        }
        if (isset($map['BackupGatewayStatus'])) {
            $model->backupGatewayStatus = $map['BackupGatewayStatus'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['LastHeartbeatTime'])) {
            $model->lastHeartbeatTime = $map['LastHeartbeatTime'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SourceEndpointHostname'])) {
            $model->sourceEndpointHostname = $map['SourceEndpointHostname'];
        }
        if (isset($map['SourceEndpointInternetIP'])) {
            $model->sourceEndpointInternetIP = $map['SourceEndpointInternetIP'];
        }
        if (isset($map['SourceEndpointIntranetIP'])) {
            $model->sourceEndpointIntranetIP = $map['SourceEndpointIntranetIP'];
        }

        return $model;
    }
}
