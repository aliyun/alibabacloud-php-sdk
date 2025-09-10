<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class CreateRestoreJobRequest extends Model
{
    /**
     * @var string
     */
    public $crossAccountRoleName;

    /**
     * @var string
     */
    public $crossAccountType;

    /**
     * @var int
     */
    public $crossAccountUserId;

    /**
     * @var string
     */
    public $edition;

    /**
     * @var string
     */
    public $exclude;

    /**
     * @var mixed[]
     */
    public $failbackDetail;

    /**
     * @var string
     */
    public $include;

    /**
     * @var bool
     */
    public $initiatedByAck;

    /**
     * @var string
     */
    public $options;

    /**
     * @var OtsTableRestoreDetail
     */
    public $otsDetail;

    /**
     * @var string
     */
    public $restoreType;

    /**
     * @var string
     */
    public $snapshotHash;

    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $targetBucket;

    /**
     * @var string
     */
    public $targetContainer;

    /**
     * @var string
     */
    public $targetContainerClusterId;

    /**
     * @var int
     */
    public $targetCreateTime;

    /**
     * @var string
     */
    public $targetFileSystemId;

    /**
     * @var string
     */
    public $targetInstanceId;

    /**
     * @var string
     */
    public $targetInstanceName;

    /**
     * @var string
     */
    public $targetPath;

    /**
     * @var string
     */
    public $targetPrefix;

    /**
     * @var string
     */
    public $targetTableName;

    /**
     * @var int
     */
    public $targetTime;

    /**
     * @var mixed[]
     */
    public $udmDetail;

    /**
     * @var string
     */
    public $udmRegionId;

    /**
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'crossAccountRoleName' => 'CrossAccountRoleName',
        'crossAccountType' => 'CrossAccountType',
        'crossAccountUserId' => 'CrossAccountUserId',
        'edition' => 'Edition',
        'exclude' => 'Exclude',
        'failbackDetail' => 'FailbackDetail',
        'include' => 'Include',
        'initiatedByAck' => 'InitiatedByAck',
        'options' => 'Options',
        'otsDetail' => 'OtsDetail',
        'restoreType' => 'RestoreType',
        'snapshotHash' => 'SnapshotHash',
        'snapshotId' => 'SnapshotId',
        'sourceType' => 'SourceType',
        'targetBucket' => 'TargetBucket',
        'targetContainer' => 'TargetContainer',
        'targetContainerClusterId' => 'TargetContainerClusterId',
        'targetCreateTime' => 'TargetCreateTime',
        'targetFileSystemId' => 'TargetFileSystemId',
        'targetInstanceId' => 'TargetInstanceId',
        'targetInstanceName' => 'TargetInstanceName',
        'targetPath' => 'TargetPath',
        'targetPrefix' => 'TargetPrefix',
        'targetTableName' => 'TargetTableName',
        'targetTime' => 'TargetTime',
        'udmDetail' => 'UdmDetail',
        'udmRegionId' => 'UdmRegionId',
        'vaultId' => 'VaultId',
    ];

    public function validate()
    {
        if (\is_array($this->failbackDetail)) {
            Model::validateArray($this->failbackDetail);
        }
        if (null !== $this->otsDetail) {
            $this->otsDetail->validate();
        }
        if (\is_array($this->udmDetail)) {
            Model::validateArray($this->udmDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crossAccountRoleName) {
            $res['CrossAccountRoleName'] = $this->crossAccountRoleName;
        }

        if (null !== $this->crossAccountType) {
            $res['CrossAccountType'] = $this->crossAccountType;
        }

        if (null !== $this->crossAccountUserId) {
            $res['CrossAccountUserId'] = $this->crossAccountUserId;
        }

        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }

        if (null !== $this->exclude) {
            $res['Exclude'] = $this->exclude;
        }

        if (null !== $this->failbackDetail) {
            if (\is_array($this->failbackDetail)) {
                $res['FailbackDetail'] = [];
                foreach ($this->failbackDetail as $key1 => $value1) {
                    $res['FailbackDetail'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->include) {
            $res['Include'] = $this->include;
        }

        if (null !== $this->initiatedByAck) {
            $res['InitiatedByAck'] = $this->initiatedByAck;
        }

        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        if (null !== $this->otsDetail) {
            $res['OtsDetail'] = null !== $this->otsDetail ? $this->otsDetail->toArray($noStream) : $this->otsDetail;
        }

        if (null !== $this->restoreType) {
            $res['RestoreType'] = $this->restoreType;
        }

        if (null !== $this->snapshotHash) {
            $res['SnapshotHash'] = $this->snapshotHash;
        }

        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->targetBucket) {
            $res['TargetBucket'] = $this->targetBucket;
        }

        if (null !== $this->targetContainer) {
            $res['TargetContainer'] = $this->targetContainer;
        }

        if (null !== $this->targetContainerClusterId) {
            $res['TargetContainerClusterId'] = $this->targetContainerClusterId;
        }

        if (null !== $this->targetCreateTime) {
            $res['TargetCreateTime'] = $this->targetCreateTime;
        }

        if (null !== $this->targetFileSystemId) {
            $res['TargetFileSystemId'] = $this->targetFileSystemId;
        }

        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
        }

        if (null !== $this->targetInstanceName) {
            $res['TargetInstanceName'] = $this->targetInstanceName;
        }

        if (null !== $this->targetPath) {
            $res['TargetPath'] = $this->targetPath;
        }

        if (null !== $this->targetPrefix) {
            $res['TargetPrefix'] = $this->targetPrefix;
        }

        if (null !== $this->targetTableName) {
            $res['TargetTableName'] = $this->targetTableName;
        }

        if (null !== $this->targetTime) {
            $res['TargetTime'] = $this->targetTime;
        }

        if (null !== $this->udmDetail) {
            if (\is_array($this->udmDetail)) {
                $res['UdmDetail'] = [];
                foreach ($this->udmDetail as $key1 => $value1) {
                    $res['UdmDetail'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->udmRegionId) {
            $res['UdmRegionId'] = $this->udmRegionId;
        }

        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CrossAccountRoleName'])) {
            $model->crossAccountRoleName = $map['CrossAccountRoleName'];
        }

        if (isset($map['CrossAccountType'])) {
            $model->crossAccountType = $map['CrossAccountType'];
        }

        if (isset($map['CrossAccountUserId'])) {
            $model->crossAccountUserId = $map['CrossAccountUserId'];
        }

        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }

        if (isset($map['Exclude'])) {
            $model->exclude = $map['Exclude'];
        }

        if (isset($map['FailbackDetail'])) {
            if (!empty($map['FailbackDetail'])) {
                $model->failbackDetail = [];
                foreach ($map['FailbackDetail'] as $key1 => $value1) {
                    $model->failbackDetail[$key1] = $value1;
                }
            }
        }

        if (isset($map['Include'])) {
            $model->include = $map['Include'];
        }

        if (isset($map['InitiatedByAck'])) {
            $model->initiatedByAck = $map['InitiatedByAck'];
        }

        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        if (isset($map['OtsDetail'])) {
            $model->otsDetail = OtsTableRestoreDetail::fromMap($map['OtsDetail']);
        }

        if (isset($map['RestoreType'])) {
            $model->restoreType = $map['RestoreType'];
        }

        if (isset($map['SnapshotHash'])) {
            $model->snapshotHash = $map['SnapshotHash'];
        }

        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['TargetBucket'])) {
            $model->targetBucket = $map['TargetBucket'];
        }

        if (isset($map['TargetContainer'])) {
            $model->targetContainer = $map['TargetContainer'];
        }

        if (isset($map['TargetContainerClusterId'])) {
            $model->targetContainerClusterId = $map['TargetContainerClusterId'];
        }

        if (isset($map['TargetCreateTime'])) {
            $model->targetCreateTime = $map['TargetCreateTime'];
        }

        if (isset($map['TargetFileSystemId'])) {
            $model->targetFileSystemId = $map['TargetFileSystemId'];
        }

        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }

        if (isset($map['TargetInstanceName'])) {
            $model->targetInstanceName = $map['TargetInstanceName'];
        }

        if (isset($map['TargetPath'])) {
            $model->targetPath = $map['TargetPath'];
        }

        if (isset($map['TargetPrefix'])) {
            $model->targetPrefix = $map['TargetPrefix'];
        }

        if (isset($map['TargetTableName'])) {
            $model->targetTableName = $map['TargetTableName'];
        }

        if (isset($map['TargetTime'])) {
            $model->targetTime = $map['TargetTime'];
        }

        if (isset($map['UdmDetail'])) {
            if (!empty($map['UdmDetail'])) {
                $model->udmDetail = [];
                foreach ($map['UdmDetail'] as $key1 => $value1) {
                    $model->udmDetail[$key1] = $value1;
                }
            }
        }

        if (isset($map['UdmRegionId'])) {
            $model->udmRegionId = $map['UdmRegionId'];
        }

        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
