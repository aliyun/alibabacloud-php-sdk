<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ModifyDesktopGroupRequest extends Model
{
    /**
     * @var int
     */
    public $allowAutoSetup;

    /**
     * @var int
     */
    public $allowBufferCount;

    /**
     * @var int
     */
    public $bindAmount;

    /**
     * @var int
     */
    public $buyDesktopsCount;

    /**
     * @var string
     */
    public $classify;

    /**
     * @var string
     */
    public $comments;

    /**
     * @var int
     */
    public $connectDuration;

    /**
     * @var string
     */
    public $desktopGroupId;

    /**
     * @var string
     */
    public $desktopGroupName;

    /**
     * @var bool
     */
    public $disableSessionConfig;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var int
     */
    public $idleDisconnectDuration;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var int
     */
    public $keepDuration;

    /**
     * @var int
     */
    public $loadPolicy;

    /**
     * @var int
     */
    public $maxDesktopsCount;

    /**
     * @var int
     */
    public $minDesktopsCount;

    /**
     * @var string
     */
    public $ownBundleId;

    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string[]
     */
    public $policyGroupIds;

    /**
     * @var bool
     */
    public $profileFollowSwitch;

    /**
     * @var float
     */
    public $ratioThreshold;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resetType;

    /**
     * @var string
     */
    public $scaleStrategyId;

    /**
     * @var int
     */
    public $stopDuration;
    protected $_name = [
        'allowAutoSetup' => 'AllowAutoSetup',
        'allowBufferCount' => 'AllowBufferCount',
        'bindAmount' => 'BindAmount',
        'buyDesktopsCount' => 'BuyDesktopsCount',
        'classify' => 'Classify',
        'comments' => 'Comments',
        'connectDuration' => 'ConnectDuration',
        'desktopGroupId' => 'DesktopGroupId',
        'desktopGroupName' => 'DesktopGroupName',
        'disableSessionConfig' => 'DisableSessionConfig',
        'fileSystemId' => 'FileSystemId',
        'idleDisconnectDuration' => 'IdleDisconnectDuration',
        'imageId' => 'ImageId',
        'keepDuration' => 'KeepDuration',
        'loadPolicy' => 'LoadPolicy',
        'maxDesktopsCount' => 'MaxDesktopsCount',
        'minDesktopsCount' => 'MinDesktopsCount',
        'ownBundleId' => 'OwnBundleId',
        'policyGroupId' => 'PolicyGroupId',
        'policyGroupIds' => 'PolicyGroupIds',
        'profileFollowSwitch' => 'ProfileFollowSwitch',
        'ratioThreshold' => 'RatioThreshold',
        'regionId' => 'RegionId',
        'resetType' => 'ResetType',
        'scaleStrategyId' => 'ScaleStrategyId',
        'stopDuration' => 'StopDuration',
    ];

    public function validate()
    {
        if (\is_array($this->policyGroupIds)) {
            Model::validateArray($this->policyGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowAutoSetup) {
            $res['AllowAutoSetup'] = $this->allowAutoSetup;
        }

        if (null !== $this->allowBufferCount) {
            $res['AllowBufferCount'] = $this->allowBufferCount;
        }

        if (null !== $this->bindAmount) {
            $res['BindAmount'] = $this->bindAmount;
        }

        if (null !== $this->buyDesktopsCount) {
            $res['BuyDesktopsCount'] = $this->buyDesktopsCount;
        }

        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }

        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }

        if (null !== $this->connectDuration) {
            $res['ConnectDuration'] = $this->connectDuration;
        }

        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }

        if (null !== $this->desktopGroupName) {
            $res['DesktopGroupName'] = $this->desktopGroupName;
        }

        if (null !== $this->disableSessionConfig) {
            $res['DisableSessionConfig'] = $this->disableSessionConfig;
        }

        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->idleDisconnectDuration) {
            $res['IdleDisconnectDuration'] = $this->idleDisconnectDuration;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->keepDuration) {
            $res['KeepDuration'] = $this->keepDuration;
        }

        if (null !== $this->loadPolicy) {
            $res['LoadPolicy'] = $this->loadPolicy;
        }

        if (null !== $this->maxDesktopsCount) {
            $res['MaxDesktopsCount'] = $this->maxDesktopsCount;
        }

        if (null !== $this->minDesktopsCount) {
            $res['MinDesktopsCount'] = $this->minDesktopsCount;
        }

        if (null !== $this->ownBundleId) {
            $res['OwnBundleId'] = $this->ownBundleId;
        }

        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }

        if (null !== $this->policyGroupIds) {
            if (\is_array($this->policyGroupIds)) {
                $res['PolicyGroupIds'] = [];
                $n1 = 0;
                foreach ($this->policyGroupIds as $item1) {
                    $res['PolicyGroupIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->profileFollowSwitch) {
            $res['ProfileFollowSwitch'] = $this->profileFollowSwitch;
        }

        if (null !== $this->ratioThreshold) {
            $res['RatioThreshold'] = $this->ratioThreshold;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resetType) {
            $res['ResetType'] = $this->resetType;
        }

        if (null !== $this->scaleStrategyId) {
            $res['ScaleStrategyId'] = $this->scaleStrategyId;
        }

        if (null !== $this->stopDuration) {
            $res['StopDuration'] = $this->stopDuration;
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
        if (isset($map['AllowAutoSetup'])) {
            $model->allowAutoSetup = $map['AllowAutoSetup'];
        }

        if (isset($map['AllowBufferCount'])) {
            $model->allowBufferCount = $map['AllowBufferCount'];
        }

        if (isset($map['BindAmount'])) {
            $model->bindAmount = $map['BindAmount'];
        }

        if (isset($map['BuyDesktopsCount'])) {
            $model->buyDesktopsCount = $map['BuyDesktopsCount'];
        }

        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }

        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }

        if (isset($map['ConnectDuration'])) {
            $model->connectDuration = $map['ConnectDuration'];
        }

        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }

        if (isset($map['DesktopGroupName'])) {
            $model->desktopGroupName = $map['DesktopGroupName'];
        }

        if (isset($map['DisableSessionConfig'])) {
            $model->disableSessionConfig = $map['DisableSessionConfig'];
        }

        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['IdleDisconnectDuration'])) {
            $model->idleDisconnectDuration = $map['IdleDisconnectDuration'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['KeepDuration'])) {
            $model->keepDuration = $map['KeepDuration'];
        }

        if (isset($map['LoadPolicy'])) {
            $model->loadPolicy = $map['LoadPolicy'];
        }

        if (isset($map['MaxDesktopsCount'])) {
            $model->maxDesktopsCount = $map['MaxDesktopsCount'];
        }

        if (isset($map['MinDesktopsCount'])) {
            $model->minDesktopsCount = $map['MinDesktopsCount'];
        }

        if (isset($map['OwnBundleId'])) {
            $model->ownBundleId = $map['OwnBundleId'];
        }

        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }

        if (isset($map['PolicyGroupIds'])) {
            if (!empty($map['PolicyGroupIds'])) {
                $model->policyGroupIds = [];
                $n1 = 0;
                foreach ($map['PolicyGroupIds'] as $item1) {
                    $model->policyGroupIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ProfileFollowSwitch'])) {
            $model->profileFollowSwitch = $map['ProfileFollowSwitch'];
        }

        if (isset($map['RatioThreshold'])) {
            $model->ratioThreshold = $map['RatioThreshold'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResetType'])) {
            $model->resetType = $map['ResetType'];
        }

        if (isset($map['ScaleStrategyId'])) {
            $model->scaleStrategyId = $map['ScaleStrategyId'];
        }

        if (isset($map['StopDuration'])) {
            $model->stopDuration = $map['StopDuration'];
        }

        return $model;
    }
}
