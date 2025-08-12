<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateHybridMonitorTaskRequest\attachLabels;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateHybridMonitorTaskRequest\SLSProcessConfig;

class CreateHybridMonitorTaskRequest extends Model
{
    /**
     * @var attachLabels[]
     */
    public $attachLabels;

    /**
     * @var string[]
     */
    public $cloudAccessId;

    /**
     * @var string
     */
    public $collectInterval;

    /**
     * @var string
     */
    public $collectTargetType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var SLSProcessConfig
     */
    public $SLSProcessConfig;

    /**
     * @var string
     */
    public $targetUserId;

    /**
     * @var string
     */
    public $targetUserIdList;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $YARMConfig;
    protected $_name = [
        'attachLabels' => 'AttachLabels',
        'cloudAccessId' => 'CloudAccessId',
        'collectInterval' => 'CollectInterval',
        'collectTargetType' => 'CollectTargetType',
        'description' => 'Description',
        'groupId' => 'GroupId',
        'namespace' => 'Namespace',
        'regionId' => 'RegionId',
        'SLSProcessConfig' => 'SLSProcessConfig',
        'targetUserId' => 'TargetUserId',
        'targetUserIdList' => 'TargetUserIdList',
        'taskName' => 'TaskName',
        'taskType' => 'TaskType',
        'YARMConfig' => 'YARMConfig',
    ];

    public function validate()
    {
        if (\is_array($this->attachLabels)) {
            Model::validateArray($this->attachLabels);
        }
        if (\is_array($this->cloudAccessId)) {
            Model::validateArray($this->cloudAccessId);
        }
        if (null !== $this->SLSProcessConfig) {
            $this->SLSProcessConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachLabels) {
            if (\is_array($this->attachLabels)) {
                $res['AttachLabels'] = [];
                $n1 = 0;
                foreach ($this->attachLabels as $item1) {
                    $res['AttachLabels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cloudAccessId) {
            if (\is_array($this->cloudAccessId)) {
                $res['CloudAccessId'] = [];
                $n1 = 0;
                foreach ($this->cloudAccessId as $item1) {
                    $res['CloudAccessId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->collectInterval) {
            $res['CollectInterval'] = $this->collectInterval;
        }

        if (null !== $this->collectTargetType) {
            $res['CollectTargetType'] = $this->collectTargetType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->SLSProcessConfig) {
            $res['SLSProcessConfig'] = null !== $this->SLSProcessConfig ? $this->SLSProcessConfig->toArray($noStream) : $this->SLSProcessConfig;
        }

        if (null !== $this->targetUserId) {
            $res['TargetUserId'] = $this->targetUserId;
        }

        if (null !== $this->targetUserIdList) {
            $res['TargetUserIdList'] = $this->targetUserIdList;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->YARMConfig) {
            $res['YARMConfig'] = $this->YARMConfig;
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
        if (isset($map['AttachLabels'])) {
            if (!empty($map['AttachLabels'])) {
                $model->attachLabels = [];
                $n1 = 0;
                foreach ($map['AttachLabels'] as $item1) {
                    $model->attachLabels[$n1] = attachLabels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CloudAccessId'])) {
            if (!empty($map['CloudAccessId'])) {
                $model->cloudAccessId = [];
                $n1 = 0;
                foreach ($map['CloudAccessId'] as $item1) {
                    $model->cloudAccessId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CollectInterval'])) {
            $model->collectInterval = $map['CollectInterval'];
        }

        if (isset($map['CollectTargetType'])) {
            $model->collectTargetType = $map['CollectTargetType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SLSProcessConfig'])) {
            $model->SLSProcessConfig = SLSProcessConfig::fromMap($map['SLSProcessConfig']);
        }

        if (isset($map['TargetUserId'])) {
            $model->targetUserId = $map['TargetUserId'];
        }

        if (isset($map['TargetUserIdList'])) {
            $model->targetUserIdList = $map['TargetUserIdList'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['YARMConfig'])) {
            $model->YARMConfig = $map['YARMConfig'];
        }

        return $model;
    }
}
