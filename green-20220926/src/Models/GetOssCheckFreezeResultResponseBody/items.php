<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckFreezeResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckFreezeResultResponseBody\items\labelDetails;

class items extends Model
{
    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $contentType;

    /**
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
     * @var string
     */
    public $freezeStatus;

    /**
     * @var string
     */
    public $freezeType;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var bool
     */
    public $isCopy;

    /**
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
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var string
     */
    public $object;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $riskLevel0;

    /**
     * @var string
     */
    public $riskLevel2;

    /**
     * @var string
     */
    public $scanResult;

    /**
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
     * @var string
     */
    public $taskId;

    /**
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

    public function validate()
    {
        if (\is_array($this->labelDetails)) {
            Model::validateArray($this->labelDetails);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->labels2)) {
            Model::validateArray($this->labels2);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->labelDetails)) {
                $res['LabelDetails'] = [];
                $n1 = 0;
                foreach ($this->labelDetails as $item1) {
                    $res['LabelDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->labels2) {
            if (\is_array($this->labels2)) {
                $res['Labels2'] = [];
                $n1 = 0;
                foreach ($this->labels2 as $item1) {
                    $res['Labels2'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['LabelDetails'] as $item1) {
                    $model->labelDetails[$n1] = labelDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Labels2'])) {
            if (!empty($map['Labels2'])) {
                $model->labels2 = [];
                $n1 = 0;
                foreach ($map['Labels2'] as $item1) {
                    $model->labels2[$n1] = $item1;
                    ++$n1;
                }
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
