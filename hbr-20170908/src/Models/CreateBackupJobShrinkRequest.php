<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class CreateBackupJobShrinkRequest extends Model
{
    /**
     * @description The backup type. Valid values:
     *
     *   **COMPLETE**: full backup
     *   **INCREMENTAL**: incremental backup
     *
     * @example INCREMENTAL
     *
     * @var string
     */
    public $backupType;

    /**
     * @description The ID of the cluster.
     *
     * @example cl-00068btz******oku
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the cluster. This parameter is required only if you set the **SourceType** parameter to **CONTAINER**.
     *
     * @example cc-000xxxxxxxxxxxxxxi00
     *
     * @var string
     */
    public $containerClusterId;

    /**
     * @description The cluster resources. This parameter is required only if you set the **SourceType** parameter to **CONTAINER**.
     *
     * @example [{\"resourceType\":\"PV\",\"backupMethod\":\"FILE\",\"resourceId\":\"674dac6d-74cd-47e9-a675-09e2f10d2c45\",\"resourceInfo\":\"{\\\"pv_name\\\":\\\"nas-650dac6d-74cd-47e9-a675-09e2f10d2c45\\\",\\\"pv_size\\\":\\\"8Gi\\\",\\\"storage_class\\\":\\\"alibabacloud-cnfs-nas\\\",\\\"pvc_name\\\":\\\"data-postgresql-default-0\\\",\\\"namespace\\\":\\\"database\\\"}\",\"host\":\"cn-huhehaote.192.168.13.133\",\"hostPrefix\":\"6f5e758e-8d35-4584-b9ce-8333adfc7547/volumes/kubernetes.io~csi/nas-670dac6d-74cd-47e9-a675-09e2f10d2c45/mount\",\"pvPath\":\"/\"}]
     *
     * @var string
     */
    public $containerResources;

    /**
     * @description The name of the RAM role that is created within the source Alibaba Cloud account and assigned to the current Alibaba Cloud account to authorize the current Alibaba Cloud account to back up data across Alibaba Cloud accounts.
     *
     * @example BackupRole
     *
     * @var string
     */
    public $crossAccountRoleName;

    /**
     * @description Specifies whether data is backed up within the same Alibaba Cloud account or across Alibaba Cloud accounts. Valid values:
     *
     *   SELF_ACCOUNT: Data is backed up within the same Alibaba Cloud account.
     *   CROSS_ACCOUNT: Data is backed up across Alibaba Cloud accounts.
     *
     * @example SELF_ACCOUNT
     *
     * @var string
     */
    public $crossAccountType;

    /**
     * @description The ID of the source Alibaba Cloud account that authorizes the current Alibaba Cloud account to back up data across Alibaba Cloud accounts.
     *
     * @example 158975xxxxxx4625
     *
     * @var int
     */
    public $crossAccountUserId;

    /**
     * @var string
     */
    public $detailShrink;

    /**
     * @description This parameter is required only if you set the **SourceType** parameter to **ECS_FILE**. This parameter specifies the paths to the files that are excluded from the backup job. The value must be 1 to 255 characters in length.
     *
     * @example ["/var", "/proc"]
     *
     * @var string
     */
    public $exclude;

    /**
     * @description This parameter is required only if you set the **SourceType** parameter to **ECS_FILE**. This parameter specifies the paths to the files that you want to back up. The value must be 1 to 255 characters in length.
     *
     * @example ["/home/alice/*.pdf", "/home/bob/*.txt"]
     *
     * @var string
     */
    public $include;

    /**
     * @description This parameter specifies whether to initiate the request by using Container Service for Kubernetes (ACK). Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $initiatedByAck;

    /**
     * @description This parameter is required only if you set the **SourceType** parameter to **UDM_ECS**. This parameter specifies the ID of the ECS instance.
     *
     * @example i-bp1xxxxxxxxxxxxxxysm
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the backup job.
     *
     * @example k8s-backup-infra-20220131150046-hbr
     *
     * @var string
     */
    public $jobName;

    /**
     * @description This parameter is required only if you set the **SourceType** parameter to **ECS_FILE**. This parameter specifies whether to use Windows Volume Shadow Copy Service (VSS) to define a source path.
     *
     *   This parameter is available only for Windows ECS instances.
     *   If data changes occur in the backup source, the source data must be the same as the data to be backed up before you can set this parameter to `["UseVSS":true]`.
     *   If you use VSS, you cannot back up data from multiple directories.
     *
     * @example {"UseVSS":false}
     *
     * @var string
     */
    public $options;

    /**
     * @description The retention period of the backup data. Unit: days.
     *
     * @example 15
     *
     * @var int
     */
    public $retention;

    /**
     * @description The type of the data source. Valid values:
     *
     *   **ECS_FILE**: Elastic Compute Service (ECS) files
     *   **UDM_ECS**: ECS instances
     *   **CONTAINER**: containers
     *
     * @example CONTAINER
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description This parameter is required only if you set the **SourceType** parameter to **ECS_FILE**. This parameter specifies the throttling rules. Format: `{start}|{end}|{bandwidth}`. Separate multiple throttling rules with vertical bars (|). A specified time range cannot overlap with another time range.
     *
     *   **start**: the start hour.
     *   **end**: the end hour.
     *   **bandwidth**: the bandwidth. Unit: KB/s.
     *
     * @example 0:24:NaN
     *
     * @var string
     */
    public $speedLimit;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-000xxxxxxxxxxxxxxy1v
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'backupType'           => 'BackupType',
        'clusterId'            => 'ClusterId',
        'containerClusterId'   => 'ContainerClusterId',
        'containerResources'   => 'ContainerResources',
        'crossAccountRoleName' => 'CrossAccountRoleName',
        'crossAccountType'     => 'CrossAccountType',
        'crossAccountUserId'   => 'CrossAccountUserId',
        'detailShrink'         => 'Detail',
        'exclude'              => 'Exclude',
        'include'              => 'Include',
        'initiatedByAck'       => 'InitiatedByAck',
        'instanceId'           => 'InstanceId',
        'jobName'              => 'JobName',
        'options'              => 'Options',
        'retention'            => 'Retention',
        'sourceType'           => 'SourceType',
        'speedLimit'           => 'SpeedLimit',
        'vaultId'              => 'VaultId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->containerClusterId) {
            $res['ContainerClusterId'] = $this->containerClusterId;
        }
        if (null !== $this->containerResources) {
            $res['ContainerResources'] = $this->containerResources;
        }
        if (null !== $this->crossAccountRoleName) {
            $res['CrossAccountRoleName'] = $this->crossAccountRoleName;
        }
        if (null !== $this->crossAccountType) {
            $res['CrossAccountType'] = $this->crossAccountType;
        }
        if (null !== $this->crossAccountUserId) {
            $res['CrossAccountUserId'] = $this->crossAccountUserId;
        }
        if (null !== $this->detailShrink) {
            $res['Detail'] = $this->detailShrink;
        }
        if (null !== $this->exclude) {
            $res['Exclude'] = $this->exclude;
        }
        if (null !== $this->include) {
            $res['Include'] = $this->include;
        }
        if (null !== $this->initiatedByAck) {
            $res['InitiatedByAck'] = $this->initiatedByAck;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->speedLimit) {
            $res['SpeedLimit'] = $this->speedLimit;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBackupJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ContainerClusterId'])) {
            $model->containerClusterId = $map['ContainerClusterId'];
        }
        if (isset($map['ContainerResources'])) {
            $model->containerResources = $map['ContainerResources'];
        }
        if (isset($map['CrossAccountRoleName'])) {
            $model->crossAccountRoleName = $map['CrossAccountRoleName'];
        }
        if (isset($map['CrossAccountType'])) {
            $model->crossAccountType = $map['CrossAccountType'];
        }
        if (isset($map['CrossAccountUserId'])) {
            $model->crossAccountUserId = $map['CrossAccountUserId'];
        }
        if (isset($map['Detail'])) {
            $model->detailShrink = $map['Detail'];
        }
        if (isset($map['Exclude'])) {
            $model->exclude = $map['Exclude'];
        }
        if (isset($map['Include'])) {
            $model->include = $map['Include'];
        }
        if (isset($map['InitiatedByAck'])) {
            $model->initiatedByAck = $map['InitiatedByAck'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['SpeedLimit'])) {
            $model->speedLimit = $map['SpeedLimit'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
