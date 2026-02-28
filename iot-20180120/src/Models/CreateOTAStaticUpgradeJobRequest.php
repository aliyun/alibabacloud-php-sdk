<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateOTAStaticUpgradeJobRequest\tag;

class CreateOTAStaticUpgradeJobRequest extends Model
{
    /**
     * @var string
     */
    public $dnListFileUrl;

    /**
     * @var string
     */
    public $downloadProtocol;

    /**
     * @var string
     */
    public $firmwareId;

    /**
     * @var string
     */
    public $grayPercent;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var int
     */
    public $maximumPerMinute;

    /**
     * @var bool
     */
    public $multiModuleMode;

    /**
     * @var bool
     */
    public $needConfirm;

    /**
     * @var bool
     */
    public $needPush;

    /**
     * @var int
     */
    public $overwriteMode;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var int
     */
    public $retryCount;

    /**
     * @var int
     */
    public $retryInterval;

    /**
     * @var int
     */
    public $scheduleFinishTime;

    /**
     * @var int
     */
    public $scheduleTime;

    /**
     * @var string[]
     */
    public $srcVersion;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string[]
     */
    public $targetDeviceName;

    /**
     * @var string
     */
    public $targetSelection;

    /**
     * @var int
     */
    public $timeoutInMinutes;
    protected $_name = [
        'dnListFileUrl' => 'DnListFileUrl',
        'downloadProtocol' => 'DownloadProtocol',
        'firmwareId' => 'FirmwareId',
        'grayPercent' => 'GrayPercent',
        'groupId' => 'GroupId',
        'groupType' => 'GroupType',
        'iotInstanceId' => 'IotInstanceId',
        'maximumPerMinute' => 'MaximumPerMinute',
        'multiModuleMode' => 'MultiModuleMode',
        'needConfirm' => 'NeedConfirm',
        'needPush' => 'NeedPush',
        'overwriteMode' => 'OverwriteMode',
        'productKey' => 'ProductKey',
        'retryCount' => 'RetryCount',
        'retryInterval' => 'RetryInterval',
        'scheduleFinishTime' => 'ScheduleFinishTime',
        'scheduleTime' => 'ScheduleTime',
        'srcVersion' => 'SrcVersion',
        'tag' => 'Tag',
        'targetDeviceName' => 'TargetDeviceName',
        'targetSelection' => 'TargetSelection',
        'timeoutInMinutes' => 'TimeoutInMinutes',
    ];

    public function validate()
    {
        if (\is_array($this->srcVersion)) {
            Model::validateArray($this->srcVersion);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        if (\is_array($this->targetDeviceName)) {
            Model::validateArray($this->targetDeviceName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dnListFileUrl) {
            $res['DnListFileUrl'] = $this->dnListFileUrl;
        }

        if (null !== $this->downloadProtocol) {
            $res['DownloadProtocol'] = $this->downloadProtocol;
        }

        if (null !== $this->firmwareId) {
            $res['FirmwareId'] = $this->firmwareId;
        }

        if (null !== $this->grayPercent) {
            $res['GrayPercent'] = $this->grayPercent;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }

        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        if (null !== $this->maximumPerMinute) {
            $res['MaximumPerMinute'] = $this->maximumPerMinute;
        }

        if (null !== $this->multiModuleMode) {
            $res['MultiModuleMode'] = $this->multiModuleMode;
        }

        if (null !== $this->needConfirm) {
            $res['NeedConfirm'] = $this->needConfirm;
        }

        if (null !== $this->needPush) {
            $res['NeedPush'] = $this->needPush;
        }

        if (null !== $this->overwriteMode) {
            $res['OverwriteMode'] = $this->overwriteMode;
        }

        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        if (null !== $this->retryCount) {
            $res['RetryCount'] = $this->retryCount;
        }

        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
        }

        if (null !== $this->scheduleFinishTime) {
            $res['ScheduleFinishTime'] = $this->scheduleFinishTime;
        }

        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }

        if (null !== $this->srcVersion) {
            if (\is_array($this->srcVersion)) {
                $res['SrcVersion'] = [];
                $n1 = 0;
                foreach ($this->srcVersion as $item1) {
                    $res['SrcVersion'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targetDeviceName) {
            if (\is_array($this->targetDeviceName)) {
                $res['TargetDeviceName'] = [];
                $n1 = 0;
                foreach ($this->targetDeviceName as $item1) {
                    $res['TargetDeviceName'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targetSelection) {
            $res['TargetSelection'] = $this->targetSelection;
        }

        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
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
        if (isset($map['DnListFileUrl'])) {
            $model->dnListFileUrl = $map['DnListFileUrl'];
        }

        if (isset($map['DownloadProtocol'])) {
            $model->downloadProtocol = $map['DownloadProtocol'];
        }

        if (isset($map['FirmwareId'])) {
            $model->firmwareId = $map['FirmwareId'];
        }

        if (isset($map['GrayPercent'])) {
            $model->grayPercent = $map['GrayPercent'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }

        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        if (isset($map['MaximumPerMinute'])) {
            $model->maximumPerMinute = $map['MaximumPerMinute'];
        }

        if (isset($map['MultiModuleMode'])) {
            $model->multiModuleMode = $map['MultiModuleMode'];
        }

        if (isset($map['NeedConfirm'])) {
            $model->needConfirm = $map['NeedConfirm'];
        }

        if (isset($map['NeedPush'])) {
            $model->needPush = $map['NeedPush'];
        }

        if (isset($map['OverwriteMode'])) {
            $model->overwriteMode = $map['OverwriteMode'];
        }

        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        if (isset($map['RetryCount'])) {
            $model->retryCount = $map['RetryCount'];
        }

        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
        }

        if (isset($map['ScheduleFinishTime'])) {
            $model->scheduleFinishTime = $map['ScheduleFinishTime'];
        }

        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }

        if (isset($map['SrcVersion'])) {
            if (!empty($map['SrcVersion'])) {
                $model->srcVersion = [];
                $n1 = 0;
                foreach ($map['SrcVersion'] as $item1) {
                    $model->srcVersion[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TargetDeviceName'])) {
            if (!empty($map['TargetDeviceName'])) {
                $model->targetDeviceName = [];
                $n1 = 0;
                foreach ($map['TargetDeviceName'] as $item1) {
                    $model->targetDeviceName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TargetSelection'])) {
            $model->targetSelection = $map['TargetSelection'];
        }

        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }

        return $model;
    }
}
