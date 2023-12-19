<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeClientsResponseBody\clients;

use AlibabaCloud\Tea\Model;

class client extends Model
{
    /**
     * @description The alert settings. Valid value: INHERITED, which indicates that the backup client sends alert notifications in the same way as the backup vault.
     *
     * @example INHERITED
     *
     * @var string
     */
    public $alertSetting;

    /**
     * @description The ID of the backup client.
     *
     * @example c-00062uu******2fgj
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The name of the backup client.
     *
     * @example client-20211224-101226
     *
     * @var string
     */
    public $clientName;

    /**
     * @description The type of the backup client. Valid value:**ECS_AGENT**, which indicates an SAP HANA backup client.
     *
     * @example ECS_AGENT
     *
     * @var string
     */
    public $clientType;

    /**
     * @description The version number of the backup client.
     *
     * @example 1.11.16
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @description The ID of the SAP HANA instance.
     *
     * @example cl-0008c48frr******ncpk
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The time when the backup client was created.
     *
     * @example 1554347313
     *
     * @var int
     */
    public $createdTime;

    /**
     * @description The ID of the instance.
     *
     * @example i-wz9b6wya******n8yo
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the ECS instance.
     *
     * @example swh-hbr
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The maximum version number of the backup client.
     *
     * @example 1.11.23
     *
     * @var string
     */
    public $maxVersion;

    /**
     * @description The network type. Valid values:
     *
     *   **CLASSIC**: classic network
     *   **VPC**: virtual private cloud (VPC)
     *
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The status of the backup client. Valid values:
     *
     *   **REGISTERED**: The backup client is registered.
     *   **ACTIVATED**: The backup client is enabled.
     *   **DEACTIVATED**: The backup client fails to be enabled.
     *   **INSTALLING**: The backup client is being installed.
     *   **INSTALL_FAILED**: The backup client fails to be installed.
     *   **NOT_INSTALLED**: The backup client is not installed.
     *   **UPGRADING**: The backup client is being upgraded.
     *   **UPGRADE_FAILED**: The backup client fails to be upgraded.
     *   **UNINSTALLING**: The backup client is being uninstalled.
     *   **UNINSTALL_FAILED**: The backup client fails to be uninstalled.
     *   **STOPPED**: The backup client is out of service.
     *   **UNKNOWN**: The backup client is disconnected.
     *
     * @example ACTIVATED
     *
     * @var string
     */
    public $status;

    /**
     * @description The status information.
     *
     * @example HANA_NOT_SUPPORT
     *
     * @var string
     */
    public $statusMessage;

    /**
     * @description The time when the backup client was updated. This value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1554347313
     *
     * @var int
     */
    public $updatedTime;

    /**
     * @description Indicates whether data is transmitted over HTTPS. Valid values:
     *
     *   true: Data is transmitted over HTTPS.
     *   false: Data is transmitted over HTTP.
     *
     * @example false
     *
     * @var bool
     */
    public $useHttps;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-00029mx6o******n85lg
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'alertSetting'  => 'AlertSetting',
        'clientId'      => 'ClientId',
        'clientName'    => 'ClientName',
        'clientType'    => 'ClientType',
        'clientVersion' => 'ClientVersion',
        'clusterId'     => 'ClusterId',
        'createdTime'   => 'CreatedTime',
        'instanceId'    => 'InstanceId',
        'instanceName'  => 'InstanceName',
        'maxVersion'    => 'MaxVersion',
        'networkType'   => 'NetworkType',
        'status'        => 'Status',
        'statusMessage' => 'StatusMessage',
        'updatedTime'   => 'UpdatedTime',
        'useHttps'      => 'UseHttps',
        'vaultId'       => 'VaultId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertSetting) {
            $res['AlertSetting'] = $this->alertSetting;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientName) {
            $res['ClientName'] = $this->clientName;
        }
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->maxVersion) {
            $res['MaxVersion'] = $this->maxVersion;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }
        if (null !== $this->useHttps) {
            $res['UseHttps'] = $this->useHttps;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return client
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertSetting'])) {
            $model->alertSetting = $map['AlertSetting'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientName'])) {
            $model->clientName = $map['ClientName'];
        }
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['MaxVersion'])) {
            $model->maxVersion = $map['MaxVersion'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }
        if (isset($map['UseHttps'])) {
            $model->useHttps = $map['UseHttps'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
