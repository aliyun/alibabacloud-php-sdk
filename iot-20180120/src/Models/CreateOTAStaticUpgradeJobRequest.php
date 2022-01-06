<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\CreateOTAStaticUpgradeJobRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateOTAStaticUpgradeJobRequest extends Model
{
    /**
     * @var string
     */
    public $dnListFileUrl;

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
    public $iotInstanceId;

    /**
     * @var int
     */
    public $maximumPerMinute;

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
        'dnListFileUrl'      => 'DnListFileUrl',
        'firmwareId'         => 'FirmwareId',
        'grayPercent'        => 'GrayPercent',
        'iotInstanceId'      => 'IotInstanceId',
        'maximumPerMinute'   => 'MaximumPerMinute',
        'needConfirm'        => 'NeedConfirm',
        'needPush'           => 'NeedPush',
        'overwriteMode'      => 'OverwriteMode',
        'productKey'         => 'ProductKey',
        'retryCount'         => 'RetryCount',
        'retryInterval'      => 'RetryInterval',
        'scheduleFinishTime' => 'ScheduleFinishTime',
        'scheduleTime'       => 'ScheduleTime',
        'srcVersion'         => 'SrcVersion',
        'tag'                => 'Tag',
        'targetDeviceName'   => 'TargetDeviceName',
        'targetSelection'    => 'TargetSelection',
        'timeoutInMinutes'   => 'TimeoutInMinutes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnListFileUrl) {
            $res['DnListFileUrl'] = $this->dnListFileUrl;
        }
        if (null !== $this->firmwareId) {
            $res['FirmwareId'] = $this->firmwareId;
        }
        if (null !== $this->grayPercent) {
            $res['GrayPercent'] = $this->grayPercent;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->maximumPerMinute) {
            $res['MaximumPerMinute'] = $this->maximumPerMinute;
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
            $res['SrcVersion'] = $this->srcVersion;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->targetDeviceName) {
            $res['TargetDeviceName'] = $this->targetDeviceName;
        }
        if (null !== $this->targetSelection) {
            $res['TargetSelection'] = $this->targetSelection;
        }
        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOTAStaticUpgradeJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnListFileUrl'])) {
            $model->dnListFileUrl = $map['DnListFileUrl'];
        }
        if (isset($map['FirmwareId'])) {
            $model->firmwareId = $map['FirmwareId'];
        }
        if (isset($map['GrayPercent'])) {
            $model->grayPercent = $map['GrayPercent'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['MaximumPerMinute'])) {
            $model->maximumPerMinute = $map['MaximumPerMinute'];
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
                $model->srcVersion = $map['SrcVersion'];
            }
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TargetDeviceName'])) {
            if (!empty($map['TargetDeviceName'])) {
                $model->targetDeviceName = $map['TargetDeviceName'];
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
