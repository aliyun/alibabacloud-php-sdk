<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckFreezeResultResponseBody;

use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckFreezeResultResponseBody\items\labelDetails;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example tmp
     *
     * @var string
     */
    public $bucket;

    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example audio
     *
     * @var string
     */
    public $contentType;

    /**
     * @example audio_media_detection
     *
     * @var string
     */
    public $copyFrom;

    /**
     * @var string
     */
    public $feedback;

    /**
     * @var bool
     */
    public $freeze;

    /**
     * @example FREEZED
     *
     * @var string
     */
    public $freezeStatus;

    /**
     * @example ACL
     *
     * @var string
     */
    public $freezeType;

    /**
     * @example http://www.aliyuncs.com/test.jpg
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @example true
     *
     * @var bool
     */
    public $isCopy;

    /**
     * @example dhT20X2310
     *
     * @var string
     */
    public $jobName;

    /**
     * @var labelDetails[]
     */
    public $labelDetails;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var string[]
     */
    public $labels2;

    /**
     * @var string
     */
    public $manualFreezeAction;

    /**
     * @var string
     */
    public $manualOperateTime;

    /**
     * @var string
     */
    public $manualOperator;

    /**
     * @example 54416c9b159df4a60ae03c04ccb94cb5
     *
     * @var string
     */
    public $md5;

    /**
     * @example success
     *
     * @var string
     */
    public $msg;

    /**
     * @example 1713014531569_958.png.jpeg
     *
     * @var string
     */
    public $object;

    /**
     * @example F0A594BB-FA7A-580F-AE9E-A4188E092823
     *
     * @var string
     */
    public $requestId;

    /**
     * @example high
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @example low
     *
     * @var string
     */
    public $riskLevel0;

    /**
     * @example none
     *
     * @var string
     */
    public $riskLevel2;

    /**
     * @example {}
     *
     * @var string
     */
    public $scanResult;

    /**
     * @example audio_media_detection_01
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $sysDisposalStatus;

    /**
     * @example P_BT3FHS
     *
     * @var string
     */
    public $taskId;

    /**
     * @example http://www.aliyuncs.com/test.mp3
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'bucket' => 'Bucket',
        'code' => 'Code',
        'contentType' => 'ContentType',
        'copyFrom' => 'CopyFrom',
        'feedback' => 'Feedback',
        'freeze' => 'Freeze',
        'freezeStatus' => 'FreezeStatus',
        'freezeType' => 'FreezeType',
        'imageUrl' => 'ImageUrl',
        'isCopy' => 'IsCopy',
        'jobName' => 'JobName',
        'labelDetails' => 'LabelDetails',
        'labels' => 'Labels',
        'labels2' => 'Labels2',
        'manualFreezeAction' => 'ManualFreezeAction',
        'manualOperateTime' => 'ManualOperateTime',
        'manualOperator' => 'ManualOperator',
        'md5' => 'Md5',
        'msg' => 'Msg',
        'object' => 'Object',
        'requestId' => 'RequestId',
        'riskLevel' => 'RiskLevel',
        'riskLevel0' => 'RiskLevel0',
        'riskLevel2' => 'RiskLevel2',
        'scanResult' => 'ScanResult',
        'serviceCode' => 'ServiceCode',
        'serviceName' => 'ServiceName',
        'sysDisposalStatus' => 'SysDisposalStatus',
        'taskId' => 'TaskId',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->copyFrom) {
            $res['CopyFrom'] = $this->copyFrom;
        }
        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
        }
        if (null !== $this->freeze) {
            $res['Freeze'] = $this->freeze;
        }
        if (null !== $this->freezeStatus) {
            $res['FreezeStatus'] = $this->freezeStatus;
        }
        if (null !== $this->freezeType) {
            $res['FreezeType'] = $this->freezeType;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->isCopy) {
            $res['IsCopy'] = $this->isCopy;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->labelDetails) {
            $res['LabelDetails'] = [];
            if (null !== $this->labelDetails && \is_array($this->labelDetails)) {
                $n = 0;
                foreach ($this->labelDetails as $item) {
                    $res['LabelDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->labels2) {
            $res['Labels2'] = $this->labels2;
        }
        if (null !== $this->manualFreezeAction) {
            $res['ManualFreezeAction'] = $this->manualFreezeAction;
        }
        if (null !== $this->manualOperateTime) {
            $res['ManualOperateTime'] = $this->manualOperateTime;
        }
        if (null !== $this->manualOperator) {
            $res['ManualOperator'] = $this->manualOperator;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->object) {
            $res['Object'] = $this->object;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->riskLevel0) {
            $res['RiskLevel0'] = $this->riskLevel0;
        }
        if (null !== $this->riskLevel2) {
            $res['RiskLevel2'] = $this->riskLevel2;
        }
        if (null !== $this->scanResult) {
            $res['ScanResult'] = $this->scanResult;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->sysDisposalStatus) {
            $res['SysDisposalStatus'] = $this->sysDisposalStatus;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['CopyFrom'])) {
            $model->copyFrom = $map['CopyFrom'];
        }
        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }
        if (isset($map['Freeze'])) {
            $model->freeze = $map['Freeze'];
        }
        if (isset($map['FreezeStatus'])) {
            $model->freezeStatus = $map['FreezeStatus'];
        }
        if (isset($map['FreezeType'])) {
            $model->freezeType = $map['FreezeType'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['IsCopy'])) {
            $model->isCopy = $map['IsCopy'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['LabelDetails'])) {
            if (!empty($map['LabelDetails'])) {
                $model->labelDetails = [];
                $n = 0;
                foreach ($map['LabelDetails'] as $item) {
                    $model->labelDetails[$n++] = null !== $item ? labelDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = $map['Labels'];
            }
        }
        if (isset($map['Labels2'])) {
            if (!empty($map['Labels2'])) {
                $model->labels2 = $map['Labels2'];
            }
        }
        if (isset($map['ManualFreezeAction'])) {
            $model->manualFreezeAction = $map['ManualFreezeAction'];
        }
        if (isset($map['ManualOperateTime'])) {
            $model->manualOperateTime = $map['ManualOperateTime'];
        }
        if (isset($map['ManualOperator'])) {
            $model->manualOperator = $map['ManualOperator'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['Object'])) {
            $model->object = $map['Object'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['RiskLevel0'])) {
            $model->riskLevel0 = $map['RiskLevel0'];
        }
        if (isset($map['RiskLevel2'])) {
            $model->riskLevel2 = $map['RiskLevel2'];
        }
        if (isset($map['ScanResult'])) {
            $model->scanResult = $map['ScanResult'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['SysDisposalStatus'])) {
            $model->sysDisposalStatus = $map['SysDisposalStatus'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
