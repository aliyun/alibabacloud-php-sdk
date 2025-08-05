<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateBackupPlanRequest\rule;

class CreateBackupPlanRequest extends Model
{
    /**
     * @var string
     */
    public $backupType;

    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $changeListPath;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $createTime;

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
    public $dataSourceId;

    /**
     * @var mixed[]
     */
    public $destDataSourceDetail;

    /**
     * @var string
     */
    public $destDataSourceId;

    /**
     * @var string
     */
    public $destSourceType;

    /**
     * @var mixed[]
     */
    public $detail;

    /**
     * @var bool
     */
    public $disabled;

    /**
     * @var string
     */
    public $exclude;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $include;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $keepLatestSnapshots;

    /**
     * @var string
     */
    public $options;

    /**
     * @var OtsDetail
     */
    public $otsDetail;

    /**
     * @var string[]
     */
    public $path;

    /**
     * @var string
     */
    public $planName;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var int
     */
    public $retention;

    /**
     * @var rule[]
     */
    public $rule;

    /**
     * @var string
     */
    public $schedule;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $speedLimit;

    /**
     * @var string
     */
    public $udmRegionId;

    /**
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'backupType' => 'BackupType',
        'bucket' => 'Bucket',
        'changeListPath' => 'ChangeListPath',
        'clusterId' => 'ClusterId',
        'createTime' => 'CreateTime',
        'crossAccountRoleName' => 'CrossAccountRoleName',
        'crossAccountType' => 'CrossAccountType',
        'crossAccountUserId' => 'CrossAccountUserId',
        'dataSourceId' => 'DataSourceId',
        'destDataSourceDetail' => 'DestDataSourceDetail',
        'destDataSourceId' => 'DestDataSourceId',
        'destSourceType' => 'DestSourceType',
        'detail' => 'Detail',
        'disabled' => 'Disabled',
        'exclude' => 'Exclude',
        'fileSystemId' => 'FileSystemId',
        'include' => 'Include',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'keepLatestSnapshots' => 'KeepLatestSnapshots',
        'options' => 'Options',
        'otsDetail' => 'OtsDetail',
        'path' => 'Path',
        'planName' => 'PlanName',
        'prefix' => 'Prefix',
        'retention' => 'Retention',
        'rule' => 'Rule',
        'schedule' => 'Schedule',
        'sourceType' => 'SourceType',
        'speedLimit' => 'SpeedLimit',
        'udmRegionId' => 'UdmRegionId',
        'vaultId' => 'VaultId',
    ];

    public function validate()
    {
        if (\is_array($this->destDataSourceDetail)) {
            Model::validateArray($this->destDataSourceDetail);
        }
        if (\is_array($this->detail)) {
            Model::validateArray($this->detail);
        }
        if (null !== $this->otsDetail) {
            $this->otsDetail->validate();
        }
        if (\is_array($this->path)) {
            Model::validateArray($this->path);
        }
        if (\is_array($this->rule)) {
            Model::validateArray($this->rule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }

        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }

        if (null !== $this->changeListPath) {
            $res['ChangeListPath'] = $this->changeListPath;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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

        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->destDataSourceDetail) {
            if (\is_array($this->destDataSourceDetail)) {
                $res['DestDataSourceDetail'] = [];
                foreach ($this->destDataSourceDetail as $key1 => $value1) {
                    $res['DestDataSourceDetail'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->destDataSourceId) {
            $res['DestDataSourceId'] = $this->destDataSourceId;
        }

        if (null !== $this->destSourceType) {
            $res['DestSourceType'] = $this->destSourceType;
        }

        if (null !== $this->detail) {
            if (\is_array($this->detail)) {
                $res['Detail'] = [];
                foreach ($this->detail as $key1 => $value1) {
                    $res['Detail'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }

        if (null !== $this->exclude) {
            $res['Exclude'] = $this->exclude;
        }

        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->include) {
            $res['Include'] = $this->include;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->keepLatestSnapshots) {
            $res['KeepLatestSnapshots'] = $this->keepLatestSnapshots;
        }

        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        if (null !== $this->otsDetail) {
            $res['OtsDetail'] = null !== $this->otsDetail ? $this->otsDetail->toArray($noStream) : $this->otsDetail;
        }

        if (null !== $this->path) {
            if (\is_array($this->path)) {
                $res['Path'] = [];
                $n1 = 0;
                foreach ($this->path as $item1) {
                    $res['Path'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
        }

        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }

        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }

        if (null !== $this->rule) {
            if (\is_array($this->rule)) {
                $res['Rule'] = [];
                $n1 = 0;
                foreach ($this->rule as $item1) {
                    $res['Rule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->schedule) {
            $res['Schedule'] = $this->schedule;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->speedLimit) {
            $res['SpeedLimit'] = $this->speedLimit;
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
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }

        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }

        if (isset($map['ChangeListPath'])) {
            $model->changeListPath = $map['ChangeListPath'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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

        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        if (isset($map['DestDataSourceDetail'])) {
            if (!empty($map['DestDataSourceDetail'])) {
                $model->destDataSourceDetail = [];
                foreach ($map['DestDataSourceDetail'] as $key1 => $value1) {
                    $model->destDataSourceDetail[$key1] = $value1;
                }
            }
        }

        if (isset($map['DestDataSourceId'])) {
            $model->destDataSourceId = $map['DestDataSourceId'];
        }

        if (isset($map['DestSourceType'])) {
            $model->destSourceType = $map['DestSourceType'];
        }

        if (isset($map['Detail'])) {
            if (!empty($map['Detail'])) {
                $model->detail = [];
                foreach ($map['Detail'] as $key1 => $value1) {
                    $model->detail[$key1] = $value1;
                }
            }
        }

        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }

        if (isset($map['Exclude'])) {
            $model->exclude = $map['Exclude'];
        }

        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['Include'])) {
            $model->include = $map['Include'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['KeepLatestSnapshots'])) {
            $model->keepLatestSnapshots = $map['KeepLatestSnapshots'];
        }

        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        if (isset($map['OtsDetail'])) {
            $model->otsDetail = OtsDetail::fromMap($map['OtsDetail']);
        }

        if (isset($map['Path'])) {
            if (!empty($map['Path'])) {
                $model->path = [];
                $n1 = 0;
                foreach ($map['Path'] as $item1) {
                    $model->path[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }

        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }

        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }

        if (isset($map['Rule'])) {
            if (!empty($map['Rule'])) {
                $model->rule = [];
                $n1 = 0;
                foreach ($map['Rule'] as $item1) {
                    $model->rule[$n1] = rule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Schedule'])) {
            $model->schedule = $map['Schedule'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['SpeedLimit'])) {
            $model->speedLimit = $map['SpeedLimit'];
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
