<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckTaskInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckTaskInfoResponseBody\config\scanServiceInfos;
use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckTaskInfoResponseBody\config\userFreezeConfig;

class config extends Model
{
    /**
     * @var int
     */
    public $callbackId;

    /**
     * @var bool
     */
    public $distinctHistoryTasks;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $executeDate;

    /**
     * @var string
     */
    public $executeTime;

    /**
     * @var bool
     */
    public $freeze;

    /**
     * @var bool
     */
    public $freezeHighRisk1;

    /**
     * @var bool
     */
    public $freezeHighRisk2;

    /**
     * @var bool
     */
    public $freezeMediumRisk1;

    /**
     * @var bool
     */
    public $freezeMediumRisk2;

    /**
     * @var string
     */
    public $freezeRestorePath;

    /**
     * @var string
     */
    public $freezeType;

    /**
     * @var string
     */
    public $prefixFilterType;

    /**
     * @var string[]
     */
    public $prefixFilters;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $referer;

    /**
     * @var int
     */
    public $scanLimit;

    /**
     * @var bool
     */
    public $scanNoFileType;

    /**
     * @var int
     */
    public $scanResourceType;

    /**
     * @var string[]
     */
    public $scanService;

    /**
     * @var scanServiceInfos[]
     */
    public $scanServiceInfos;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $taskCycle;

    /**
     * @var userFreezeConfig
     */
    public $userFreezeConfig;
    protected $_name = [
        'callbackId' => 'CallbackId',
        'distinctHistoryTasks' => 'DistinctHistoryTasks',
        'endTime' => 'EndTime',
        'executeDate' => 'ExecuteDate',
        'executeTime' => 'ExecuteTime',
        'freeze' => 'Freeze',
        'freezeHighRisk1' => 'FreezeHighRisk1',
        'freezeHighRisk2' => 'FreezeHighRisk2',
        'freezeMediumRisk1' => 'FreezeMediumRisk1',
        'freezeMediumRisk2' => 'FreezeMediumRisk2',
        'freezeRestorePath' => 'FreezeRestorePath',
        'freezeType' => 'FreezeType',
        'prefixFilterType' => 'PrefixFilterType',
        'prefixFilters' => 'PrefixFilters',
        'priority' => 'Priority',
        'referer' => 'Referer',
        'scanLimit' => 'ScanLimit',
        'scanNoFileType' => 'ScanNoFileType',
        'scanResourceType' => 'ScanResourceType',
        'scanService' => 'ScanService',
        'scanServiceInfos' => 'ScanServiceInfos',
        'startTime' => 'StartTime',
        'taskCycle' => 'TaskCycle',
        'userFreezeConfig' => 'UserFreezeConfig',
    ];

    public function validate()
    {
        if (\is_array($this->prefixFilters)) {
            Model::validateArray($this->prefixFilters);
        }
        if (\is_array($this->scanService)) {
            Model::validateArray($this->scanService);
        }
        if (\is_array($this->scanServiceInfos)) {
            Model::validateArray($this->scanServiceInfos);
        }
        if (null !== $this->userFreezeConfig) {
            $this->userFreezeConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callbackId) {
            $res['CallbackId'] = $this->callbackId;
        }

        if (null !== $this->distinctHistoryTasks) {
            $res['DistinctHistoryTasks'] = $this->distinctHistoryTasks;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->executeDate) {
            $res['ExecuteDate'] = $this->executeDate;
        }

        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }

        if (null !== $this->freeze) {
            $res['Freeze'] = $this->freeze;
        }

        if (null !== $this->freezeHighRisk1) {
            $res['FreezeHighRisk1'] = $this->freezeHighRisk1;
        }

        if (null !== $this->freezeHighRisk2) {
            $res['FreezeHighRisk2'] = $this->freezeHighRisk2;
        }

        if (null !== $this->freezeMediumRisk1) {
            $res['FreezeMediumRisk1'] = $this->freezeMediumRisk1;
        }

        if (null !== $this->freezeMediumRisk2) {
            $res['FreezeMediumRisk2'] = $this->freezeMediumRisk2;
        }

        if (null !== $this->freezeRestorePath) {
            $res['FreezeRestorePath'] = $this->freezeRestorePath;
        }

        if (null !== $this->freezeType) {
            $res['FreezeType'] = $this->freezeType;
        }

        if (null !== $this->prefixFilterType) {
            $res['PrefixFilterType'] = $this->prefixFilterType;
        }

        if (null !== $this->prefixFilters) {
            if (\is_array($this->prefixFilters)) {
                $res['PrefixFilters'] = [];
                $n1 = 0;
                foreach ($this->prefixFilters as $item1) {
                    $res['PrefixFilters'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->referer) {
            $res['Referer'] = $this->referer;
        }

        if (null !== $this->scanLimit) {
            $res['ScanLimit'] = $this->scanLimit;
        }

        if (null !== $this->scanNoFileType) {
            $res['ScanNoFileType'] = $this->scanNoFileType;
        }

        if (null !== $this->scanResourceType) {
            $res['ScanResourceType'] = $this->scanResourceType;
        }

        if (null !== $this->scanService) {
            if (\is_array($this->scanService)) {
                $res['ScanService'] = [];
                $n1 = 0;
                foreach ($this->scanService as $item1) {
                    $res['ScanService'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scanServiceInfos) {
            if (\is_array($this->scanServiceInfos)) {
                $res['ScanServiceInfos'] = [];
                $n1 = 0;
                foreach ($this->scanServiceInfos as $item1) {
                    $res['ScanServiceInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->taskCycle) {
            $res['TaskCycle'] = $this->taskCycle;
        }

        if (null !== $this->userFreezeConfig) {
            $res['UserFreezeConfig'] = null !== $this->userFreezeConfig ? $this->userFreezeConfig->toArray($noStream) : $this->userFreezeConfig;
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
        if (isset($map['CallbackId'])) {
            $model->callbackId = $map['CallbackId'];
        }

        if (isset($map['DistinctHistoryTasks'])) {
            $model->distinctHistoryTasks = $map['DistinctHistoryTasks'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ExecuteDate'])) {
            $model->executeDate = $map['ExecuteDate'];
        }

        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }

        if (isset($map['Freeze'])) {
            $model->freeze = $map['Freeze'];
        }

        if (isset($map['FreezeHighRisk1'])) {
            $model->freezeHighRisk1 = $map['FreezeHighRisk1'];
        }

        if (isset($map['FreezeHighRisk2'])) {
            $model->freezeHighRisk2 = $map['FreezeHighRisk2'];
        }

        if (isset($map['FreezeMediumRisk1'])) {
            $model->freezeMediumRisk1 = $map['FreezeMediumRisk1'];
        }

        if (isset($map['FreezeMediumRisk2'])) {
            $model->freezeMediumRisk2 = $map['FreezeMediumRisk2'];
        }

        if (isset($map['FreezeRestorePath'])) {
            $model->freezeRestorePath = $map['FreezeRestorePath'];
        }

        if (isset($map['FreezeType'])) {
            $model->freezeType = $map['FreezeType'];
        }

        if (isset($map['PrefixFilterType'])) {
            $model->prefixFilterType = $map['PrefixFilterType'];
        }

        if (isset($map['PrefixFilters'])) {
            if (!empty($map['PrefixFilters'])) {
                $model->prefixFilters = [];
                $n1 = 0;
                foreach ($map['PrefixFilters'] as $item1) {
                    $model->prefixFilters[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['Referer'])) {
            $model->referer = $map['Referer'];
        }

        if (isset($map['ScanLimit'])) {
            $model->scanLimit = $map['ScanLimit'];
        }

        if (isset($map['ScanNoFileType'])) {
            $model->scanNoFileType = $map['ScanNoFileType'];
        }

        if (isset($map['ScanResourceType'])) {
            $model->scanResourceType = $map['ScanResourceType'];
        }

        if (isset($map['ScanService'])) {
            if (!empty($map['ScanService'])) {
                $model->scanService = [];
                $n1 = 0;
                foreach ($map['ScanService'] as $item1) {
                    $model->scanService[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ScanServiceInfos'])) {
            if (!empty($map['ScanServiceInfos'])) {
                $model->scanServiceInfos = [];
                $n1 = 0;
                foreach ($map['ScanServiceInfos'] as $item1) {
                    $model->scanServiceInfos[$n1] = scanServiceInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TaskCycle'])) {
            $model->taskCycle = $map['TaskCycle'];
        }

        if (isset($map['UserFreezeConfig'])) {
            $model->userFreezeConfig = userFreezeConfig::fromMap($map['UserFreezeConfig']);
        }

        return $model;
    }
}
