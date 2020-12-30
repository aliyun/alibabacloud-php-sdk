<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupGatewayListResponseBody\items;

use AlibabaCloud\Tea\Model;

class backupGateway extends Model
{
    /**
     * @var string
     */
    public $displayName;

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
    public $region;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $sourceEndpointInternetIP;

    /**
     * @var string
     */
    public $backupGatewayStatus;

    /**
     * @var string
     */
    public $sourceEndpointIntranetIP;

    /**
     * @var int
     */
    public $lastHeartbeatTime;

    /**
     * @var string
     */
    public $sourceEndpointHostname;
    protected $_name = [
        'displayName'              => 'DisplayName',
        'backupGatewayCreateTime'  => 'BackupGatewayCreateTime',
        'backupGatewayId'          => 'BackupGatewayId',
        'region'                   => 'Region',
        'identifier'               => 'Identifier',
        'sourceEndpointInternetIP' => 'SourceEndpointInternetIP',
        'backupGatewayStatus'      => 'BackupGatewayStatus',
        'sourceEndpointIntranetIP' => 'SourceEndpointIntranetIP',
        'lastHeartbeatTime'        => 'LastHeartbeatTime',
        'sourceEndpointHostname'   => 'SourceEndpointHostname',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->backupGatewayCreateTime) {
            $res['BackupGatewayCreateTime'] = $this->backupGatewayCreateTime;
        }
        if (null !== $this->backupGatewayId) {
            $res['BackupGatewayId'] = $this->backupGatewayId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->sourceEndpointInternetIP) {
            $res['SourceEndpointInternetIP'] = $this->sourceEndpointInternetIP;
        }
        if (null !== $this->backupGatewayStatus) {
            $res['BackupGatewayStatus'] = $this->backupGatewayStatus;
        }
        if (null !== $this->sourceEndpointIntranetIP) {
            $res['SourceEndpointIntranetIP'] = $this->sourceEndpointIntranetIP;
        }
        if (null !== $this->lastHeartbeatTime) {
            $res['LastHeartbeatTime'] = $this->lastHeartbeatTime;
        }
        if (null !== $this->sourceEndpointHostname) {
            $res['SourceEndpointHostname'] = $this->sourceEndpointHostname;
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['BackupGatewayCreateTime'])) {
            $model->backupGatewayCreateTime = $map['BackupGatewayCreateTime'];
        }
        if (isset($map['BackupGatewayId'])) {
            $model->backupGatewayId = $map['BackupGatewayId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['SourceEndpointInternetIP'])) {
            $model->sourceEndpointInternetIP = $map['SourceEndpointInternetIP'];
        }
        if (isset($map['BackupGatewayStatus'])) {
            $model->backupGatewayStatus = $map['BackupGatewayStatus'];
        }
        if (isset($map['SourceEndpointIntranetIP'])) {
            $model->sourceEndpointIntranetIP = $map['SourceEndpointIntranetIP'];
        }
        if (isset($map['LastHeartbeatTime'])) {
            $model->lastHeartbeatTime = $map['LastHeartbeatTime'];
        }
        if (isset($map['SourceEndpointHostname'])) {
            $model->sourceEndpointHostname = $map['SourceEndpointHostname'];
        }

        return $model;
    }
}
