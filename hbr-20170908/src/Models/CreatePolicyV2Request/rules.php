<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyV2Request;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyV2Request\rules\dataSourceFilters;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyV2Request\rules\retentionRules;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyV2Request\rules\tagFilters;

class rules extends Model
{
    /**
     * @var string
     */
    public $backupType;
    /**
     * @var dataSourceFilters[]
     */
    public $dataSourceFilters;
    /**
     * @var bool
     */
    public $immutable;
    /**
     * @var int
     */
    public $keepLatestSnapshots;
    /**
     * @var string
     */
    public $replicationRegionId;
    /**
     * @var int
     */
    public $retention;
    /**
     * @var retentionRules[]
     */
    public $retentionRules;
    /**
     * @var string
     */
    public $ruleType;
    /**
     * @var string
     */
    public $schedule;
    /**
     * @var tagFilters[]
     */
    public $tagFilters;
    /**
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'backupType'          => 'BackupType',
        'dataSourceFilters'   => 'DataSourceFilters',
        'immutable'           => 'Immutable',
        'keepLatestSnapshots' => 'KeepLatestSnapshots',
        'replicationRegionId' => 'ReplicationRegionId',
        'retention'           => 'Retention',
        'retentionRules'      => 'RetentionRules',
        'ruleType'            => 'RuleType',
        'schedule'            => 'Schedule',
        'tagFilters'          => 'TagFilters',
        'vaultId'             => 'VaultId',
    ];

    public function validate()
    {
        if (\is_array($this->dataSourceFilters)) {
            Model::validateArray($this->dataSourceFilters);
        }
        if (\is_array($this->retentionRules)) {
            Model::validateArray($this->retentionRules);
        }
        if (\is_array($this->tagFilters)) {
            Model::validateArray($this->tagFilters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }

        if (null !== $this->dataSourceFilters) {
            if (\is_array($this->dataSourceFilters)) {
                $res['DataSourceFilters'] = [];
                $n1                       = 0;
                foreach ($this->dataSourceFilters as $item1) {
                    $res['DataSourceFilters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->immutable) {
            $res['Immutable'] = $this->immutable;
        }

        if (null !== $this->keepLatestSnapshots) {
            $res['KeepLatestSnapshots'] = $this->keepLatestSnapshots;
        }

        if (null !== $this->replicationRegionId) {
            $res['ReplicationRegionId'] = $this->replicationRegionId;
        }

        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }

        if (null !== $this->retentionRules) {
            if (\is_array($this->retentionRules)) {
                $res['RetentionRules'] = [];
                $n1                    = 0;
                foreach ($this->retentionRules as $item1) {
                    $res['RetentionRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        if (null !== $this->schedule) {
            $res['Schedule'] = $this->schedule;
        }

        if (null !== $this->tagFilters) {
            if (\is_array($this->tagFilters)) {
                $res['TagFilters'] = [];
                $n1                = 0;
                foreach ($this->tagFilters as $item1) {
                    $res['TagFilters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['DataSourceFilters'])) {
            if (!empty($map['DataSourceFilters'])) {
                $model->dataSourceFilters = [];
                $n1                       = 0;
                foreach ($map['DataSourceFilters'] as $item1) {
                    $model->dataSourceFilters[$n1++] = dataSourceFilters::fromMap($item1);
                }
            }
        }

        if (isset($map['Immutable'])) {
            $model->immutable = $map['Immutable'];
        }

        if (isset($map['KeepLatestSnapshots'])) {
            $model->keepLatestSnapshots = $map['KeepLatestSnapshots'];
        }

        if (isset($map['ReplicationRegionId'])) {
            $model->replicationRegionId = $map['ReplicationRegionId'];
        }

        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }

        if (isset($map['RetentionRules'])) {
            if (!empty($map['RetentionRules'])) {
                $model->retentionRules = [];
                $n1                    = 0;
                foreach ($map['RetentionRules'] as $item1) {
                    $model->retentionRules[$n1++] = retentionRules::fromMap($item1);
                }
            }
        }

        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        if (isset($map['Schedule'])) {
            $model->schedule = $map['Schedule'];
        }

        if (isset($map['TagFilters'])) {
            if (!empty($map['TagFilters'])) {
                $model->tagFilters = [];
                $n1                = 0;
                foreach ($map['TagFilters'] as $item1) {
                    $model->tagFilters[$n1++] = tagFilters::fromMap($item1);
                }
            }
        }

        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
