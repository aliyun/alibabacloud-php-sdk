<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\ListOssCheckResultResponseBody;

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
    public $freezeStatus;

    /**
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
     * @var string[]
     */
    public $labels;

    /**
     * @var string[]
     */
    public $labels2;

    /**
     * @example 54416c9b159df4a60ae03c04ccb94cb5
     *
     * @var string
     */
    public $md5;

    /**
     * @example OK
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
     * @example EP6TI7_au_Zo25ITvCbkocNuF801QOQX
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
        'freezeStatus' => 'FreezeStatus',
        'freezeType' => 'FreezeType',
        'imageUrl' => 'ImageUrl',
        'isCopy' => 'IsCopy',
        'jobName' => 'JobName',
        'labels' => 'Labels',
        'labels2' => 'Labels2',
        'md5' => 'Md5',
        'msg' => 'Msg',
        'object' => 'Object',
        'riskLevel' => 'RiskLevel',
        'riskLevel0' => 'RiskLevel0',
        'riskLevel2' => 'RiskLevel2',
        'scanResult' => 'ScanResult',
        'serviceCode' => 'ServiceCode',
        'serviceName' => 'ServiceName',
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
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->labels2) {
            $res['Labels2'] = $this->labels2;
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
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['Object'])) {
            $model->object = $map['Object'];
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
