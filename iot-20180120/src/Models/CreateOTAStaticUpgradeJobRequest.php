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
    public $apiProduct;

    /**
     * @var string
     */
    public $apiRevision;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $firmwareId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $targetSelection;

    /**
     * @var string[]
     */
    public $srcVersion;

    /**
     * @var int
     */
    public $scheduleTime;

    /**
     * @var int
     */
    public $retryInterval;

    /**
     * @var int
     */
    public $retryCount;

    /**
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @var int
     */
    public $maximumPerMinute;

    /**
     * @var string
     */
    public $grayPercent;

    /**
     * @var string[]
     */
    public $targetDeviceName;

    /**
     * @var int
     */
    public $scheduleFinishTime;

    /**
     * @var int
     */
    public $overwriteMode;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $dnListFileUrl;
    protected $_name = [
        'apiProduct'         => 'ApiProduct',
        'apiRevision'        => 'ApiRevision',
        'iotInstanceId'      => 'IotInstanceId',
        'firmwareId'         => 'FirmwareId',
        'productKey'         => 'ProductKey',
        'targetSelection'    => 'TargetSelection',
        'srcVersion'         => 'SrcVersion',
        'scheduleTime'       => 'ScheduleTime',
        'retryInterval'      => 'RetryInterval',
        'retryCount'         => 'RetryCount',
        'timeoutInMinutes'   => 'TimeoutInMinutes',
        'maximumPerMinute'   => 'MaximumPerMinute',
        'grayPercent'        => 'GrayPercent',
        'targetDeviceName'   => 'TargetDeviceName',
        'scheduleFinishTime' => 'ScheduleFinishTime',
        'overwriteMode'      => 'OverwriteMode',
        'tag'                => 'Tag',
        'dnListFileUrl'      => 'DnListFileUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->apiRevision) {
            $res['ApiRevision'] = $this->apiRevision;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->firmwareId) {
            $res['FirmwareId'] = $this->firmwareId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->targetSelection) {
            $res['TargetSelection'] = $this->targetSelection;
        }
        if (null !== $this->srcVersion) {
            $res['SrcVersion'] = $this->srcVersion;
        }
        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
        }
        if (null !== $this->retryCount) {
            $res['RetryCount'] = $this->retryCount;
        }
        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
        }
        if (null !== $this->maximumPerMinute) {
            $res['MaximumPerMinute'] = $this->maximumPerMinute;
        }
        if (null !== $this->grayPercent) {
            $res['GrayPercent'] = $this->grayPercent;
        }
        if (null !== $this->targetDeviceName) {
            $res['TargetDeviceName'] = $this->targetDeviceName;
        }
        if (null !== $this->scheduleFinishTime) {
            $res['ScheduleFinishTime'] = $this->scheduleFinishTime;
        }
        if (null !== $this->overwriteMode) {
            $res['OverwriteMode'] = $this->overwriteMode;
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
        if (null !== $this->dnListFileUrl) {
            $res['DnListFileUrl'] = $this->dnListFileUrl;
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
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['FirmwareId'])) {
            $model->firmwareId = $map['FirmwareId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['TargetSelection'])) {
            $model->targetSelection = $map['TargetSelection'];
        }
        if (isset($map['SrcVersion'])) {
            if (!empty($map['SrcVersion'])) {
                $model->srcVersion = $map['SrcVersion'];
            }
        }
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }
        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
        }
        if (isset($map['RetryCount'])) {
            $model->retryCount = $map['RetryCount'];
        }
        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }
        if (isset($map['MaximumPerMinute'])) {
            $model->maximumPerMinute = $map['MaximumPerMinute'];
        }
        if (isset($map['GrayPercent'])) {
            $model->grayPercent = $map['GrayPercent'];
        }
        if (isset($map['TargetDeviceName'])) {
            if (!empty($map['TargetDeviceName'])) {
                $model->targetDeviceName = $map['TargetDeviceName'];
            }
        }
        if (isset($map['ScheduleFinishTime'])) {
            $model->scheduleFinishTime = $map['ScheduleFinishTime'];
        }
        if (isset($map['OverwriteMode'])) {
            $model->overwriteMode = $map['OverwriteMode'];
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
        if (isset($map['DnListFileUrl'])) {
            $model->dnListFileUrl = $map['DnListFileUrl'];
        }

        return $model;
    }
}
