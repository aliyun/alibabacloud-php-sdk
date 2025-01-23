<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdateBackupPlanShrinkRequest\rule;

class UpdateBackupPlanShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $changeListPath;
    /**
     * @var string
     */
    public $detailShrink;
    /**
     * @var string
     */
    public $exclude;
    /**
     * @var string
     */
    public $include;
    /**
     * @var int
     */
    public $keepLatestSnapshots;
    /**
     * @var string
     */
    public $options;
    /**
     * @var string
     */
    public $otsDetailShrink;
    /**
     * @var string[]
     */
    public $path;
    /**
     * @var string
     */
    public $planId;
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
     * @var bool
     */
    public $updatePaths;
    /**
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'changeListPath'      => 'ChangeListPath',
        'detailShrink'        => 'Detail',
        'exclude'             => 'Exclude',
        'include'             => 'Include',
        'keepLatestSnapshots' => 'KeepLatestSnapshots',
        'options'             => 'Options',
        'otsDetailShrink'     => 'OtsDetail',
        'path'                => 'Path',
        'planId'              => 'PlanId',
        'planName'            => 'PlanName',
        'prefix'              => 'Prefix',
        'retention'           => 'Retention',
        'rule'                => 'Rule',
        'schedule'            => 'Schedule',
        'sourceType'          => 'SourceType',
        'speedLimit'          => 'SpeedLimit',
        'updatePaths'         => 'UpdatePaths',
        'vaultId'             => 'VaultId',
    ];

    public function validate()
    {
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
        if (null !== $this->changeListPath) {
            $res['ChangeListPath'] = $this->changeListPath;
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

        if (null !== $this->keepLatestSnapshots) {
            $res['KeepLatestSnapshots'] = $this->keepLatestSnapshots;
        }

        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        if (null !== $this->otsDetailShrink) {
            $res['OtsDetail'] = $this->otsDetailShrink;
        }

        if (null !== $this->path) {
            if (\is_array($this->path)) {
                $res['Path'] = [];
                $n1          = 0;
                foreach ($this->path as $item1) {
                    $res['Path'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
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
                $n1          = 0;
                foreach ($this->rule as $item1) {
                    $res['Rule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->updatePaths) {
            $res['UpdatePaths'] = $this->updatePaths;
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
        if (isset($map['ChangeListPath'])) {
            $model->changeListPath = $map['ChangeListPath'];
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

        if (isset($map['KeepLatestSnapshots'])) {
            $model->keepLatestSnapshots = $map['KeepLatestSnapshots'];
        }

        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        if (isset($map['OtsDetail'])) {
            $model->otsDetailShrink = $map['OtsDetail'];
        }

        if (isset($map['Path'])) {
            if (!empty($map['Path'])) {
                $model->path = [];
                $n1          = 0;
                foreach ($map['Path'] as $item1) {
                    $model->path[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
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
                $n1          = 0;
                foreach ($map['Rule'] as $item1) {
                    $model->rule[$n1++] = rule::fromMap($item1);
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

        if (isset($map['UpdatePaths'])) {
            $model->updatePaths = $map['UpdatePaths'];
        }

        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
