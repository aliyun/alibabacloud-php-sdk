<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class CreateSoftwarelibDistributeTaskRequest extends Model
{
    /**
     * @var string[]
     */
    public $devTags;

    /**
     * @var string[]
     */
    public $deviceGroupIds;

    /**
     * @var string
     */
    public $executeMode;

    /**
     * @var string
     */
    public $executeParameters;

    /**
     * @var string
     */
    public $executePeriod;

    /**
     * @var string
     */
    public $expireMode;

    /**
     * @var string
     */
    public $gmtExpired;

    /**
     * @var string
     */
    public $matchMode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $retryTimes;

    /**
     * @var string
     */
    public $runAsAccount;

    /**
     * @var string
     */
    public $softwareId;

    /**
     * @var string
     */
    public $softwareName;

    /**
     * @var string
     */
    public $supportOs;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $timeout;

    /**
     * @var string[]
     */
    public $userGroupIds;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'devTags' => 'DevTags',
        'deviceGroupIds' => 'DeviceGroupIds',
        'executeMode' => 'ExecuteMode',
        'executeParameters' => 'ExecuteParameters',
        'executePeriod' => 'ExecutePeriod',
        'expireMode' => 'ExpireMode',
        'gmtExpired' => 'GmtExpired',
        'matchMode' => 'MatchMode',
        'name' => 'Name',
        'retryTimes' => 'RetryTimes',
        'runAsAccount' => 'RunAsAccount',
        'softwareId' => 'SoftwareId',
        'softwareName' => 'SoftwareName',
        'supportOs' => 'SupportOs',
        'taskType' => 'TaskType',
        'timeout' => 'Timeout',
        'userGroupIds' => 'UserGroupIds',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
        if (\is_array($this->devTags)) {
            Model::validateArray($this->devTags);
        }
        if (\is_array($this->deviceGroupIds)) {
            Model::validateArray($this->deviceGroupIds);
        }
        if (\is_array($this->userGroupIds)) {
            Model::validateArray($this->userGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->devTags) {
            if (\is_array($this->devTags)) {
                $res['DevTags'] = [];
                $n1 = 0;
                foreach ($this->devTags as $item1) {
                    $res['DevTags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->deviceGroupIds) {
            if (\is_array($this->deviceGroupIds)) {
                $res['DeviceGroupIds'] = [];
                $n1 = 0;
                foreach ($this->deviceGroupIds as $item1) {
                    $res['DeviceGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->executeMode) {
            $res['ExecuteMode'] = $this->executeMode;
        }

        if (null !== $this->executeParameters) {
            $res['ExecuteParameters'] = $this->executeParameters;
        }

        if (null !== $this->executePeriod) {
            $res['ExecutePeriod'] = $this->executePeriod;
        }

        if (null !== $this->expireMode) {
            $res['ExpireMode'] = $this->expireMode;
        }

        if (null !== $this->gmtExpired) {
            $res['GmtExpired'] = $this->gmtExpired;
        }

        if (null !== $this->matchMode) {
            $res['MatchMode'] = $this->matchMode;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->retryTimes) {
            $res['RetryTimes'] = $this->retryTimes;
        }

        if (null !== $this->runAsAccount) {
            $res['RunAsAccount'] = $this->runAsAccount;
        }

        if (null !== $this->softwareId) {
            $res['SoftwareId'] = $this->softwareId;
        }

        if (null !== $this->softwareName) {
            $res['SoftwareName'] = $this->softwareName;
        }

        if (null !== $this->supportOs) {
            $res['SupportOs'] = $this->supportOs;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        if (null !== $this->userGroupIds) {
            if (\is_array($this->userGroupIds)) {
                $res['UserGroupIds'] = [];
                $n1 = 0;
                foreach ($this->userGroupIds as $item1) {
                    $res['UserGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
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
        if (isset($map['DevTags'])) {
            if (!empty($map['DevTags'])) {
                $model->devTags = [];
                $n1 = 0;
                foreach ($map['DevTags'] as $item1) {
                    $model->devTags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DeviceGroupIds'])) {
            if (!empty($map['DeviceGroupIds'])) {
                $model->deviceGroupIds = [];
                $n1 = 0;
                foreach ($map['DeviceGroupIds'] as $item1) {
                    $model->deviceGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ExecuteMode'])) {
            $model->executeMode = $map['ExecuteMode'];
        }

        if (isset($map['ExecuteParameters'])) {
            $model->executeParameters = $map['ExecuteParameters'];
        }

        if (isset($map['ExecutePeriod'])) {
            $model->executePeriod = $map['ExecutePeriod'];
        }

        if (isset($map['ExpireMode'])) {
            $model->expireMode = $map['ExpireMode'];
        }

        if (isset($map['GmtExpired'])) {
            $model->gmtExpired = $map['GmtExpired'];
        }

        if (isset($map['MatchMode'])) {
            $model->matchMode = $map['MatchMode'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RetryTimes'])) {
            $model->retryTimes = $map['RetryTimes'];
        }

        if (isset($map['RunAsAccount'])) {
            $model->runAsAccount = $map['RunAsAccount'];
        }

        if (isset($map['SoftwareId'])) {
            $model->softwareId = $map['SoftwareId'];
        }

        if (isset($map['SoftwareName'])) {
            $model->softwareName = $map['SoftwareName'];
        }

        if (isset($map['SupportOs'])) {
            $model->supportOs = $map['SupportOs'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['UserGroupIds'])) {
            if (!empty($map['UserGroupIds'])) {
                $model->userGroupIds = [];
                $n1 = 0;
                foreach ($map['UserGroupIds'] as $item1) {
                    $model->userGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
