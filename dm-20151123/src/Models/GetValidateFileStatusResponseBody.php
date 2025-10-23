<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Dara\Model;

class GetValidateFileStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $catchAllNum;

    /**
     * @var string
     */
    public $completeTime;

    /**
     * @var string
     */
    public $doNotMailNum;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $invalidNum;

    /**
     * @var string
     */
    public $percentage;

    /**
     * @var string
     */
    public $processedNum;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $totalNum;

    /**
     * @var string
     */
    public $unknownNum;

    /**
     * @var string
     */
    public $uploadTime;

    /**
     * @var string
     */
    public $validNum;
    protected $_name = [
        'catchAllNum' => 'CatchAllNum',
        'completeTime' => 'CompleteTime',
        'doNotMailNum' => 'DoNotMailNum',
        'fileName' => 'FileName',
        'invalidNum' => 'InvalidNum',
        'percentage' => 'Percentage',
        'processedNum' => 'ProcessedNum',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'totalNum' => 'TotalNum',
        'unknownNum' => 'UnknownNum',
        'uploadTime' => 'UploadTime',
        'validNum' => 'ValidNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catchAllNum) {
            $res['CatchAllNum'] = $this->catchAllNum;
        }

        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }

        if (null !== $this->doNotMailNum) {
            $res['DoNotMailNum'] = $this->doNotMailNum;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->invalidNum) {
            $res['InvalidNum'] = $this->invalidNum;
        }

        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }

        if (null !== $this->processedNum) {
            $res['ProcessedNum'] = $this->processedNum;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }

        if (null !== $this->unknownNum) {
            $res['UnknownNum'] = $this->unknownNum;
        }

        if (null !== $this->uploadTime) {
            $res['UploadTime'] = $this->uploadTime;
        }

        if (null !== $this->validNum) {
            $res['ValidNum'] = $this->validNum;
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
        if (isset($map['CatchAllNum'])) {
            $model->catchAllNum = $map['CatchAllNum'];
        }

        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }

        if (isset($map['DoNotMailNum'])) {
            $model->doNotMailNum = $map['DoNotMailNum'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['InvalidNum'])) {
            $model->invalidNum = $map['InvalidNum'];
        }

        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }

        if (isset($map['ProcessedNum'])) {
            $model->processedNum = $map['ProcessedNum'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        if (isset($map['UnknownNum'])) {
            $model->unknownNum = $map['UnknownNum'];
        }

        if (isset($map['UploadTime'])) {
            $model->uploadTime = $map['UploadTime'];
        }

        if (isset($map['ValidNum'])) {
            $model->validNum = $map['ValidNum'];
        }

        return $model;
    }
}
