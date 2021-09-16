<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListLetterSendJobResponseBody;

use AlibabaCloud\Tea\Model;

class letterJobList extends Model
{
    /**
     * @var string
     */
    public $ccAddress;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $sendTime;

    /**
     * @var string
     */
    public $toAddress;

    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $detectionId;

    /**
     * @var string
     */
    public $bccAddress;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $modifyTime;
    protected $_name = [
        'ccAddress'   => 'CcAddress',
        'createTime'  => 'CreateTime',
        'userId'      => 'UserId',
        'sendTime'    => 'SendTime',
        'toAddress'   => 'ToAddress',
        'body'        => 'Body',
        'detectionId' => 'DetectionId',
        'bccAddress'  => 'BccAddress',
        'jobId'       => 'JobId',
        'title'       => 'Title',
        'templateId'  => 'TemplateId',
        'modifyTime'  => 'ModifyTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ccAddress) {
            $res['CcAddress'] = $this->ccAddress;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->sendTime) {
            $res['SendTime'] = $this->sendTime;
        }
        if (null !== $this->toAddress) {
            $res['ToAddress'] = $this->toAddress;
        }
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->detectionId) {
            $res['DetectionId'] = $this->detectionId;
        }
        if (null !== $this->bccAddress) {
            $res['BccAddress'] = $this->bccAddress;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return letterJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CcAddress'])) {
            $model->ccAddress = $map['CcAddress'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['SendTime'])) {
            $model->sendTime = $map['SendTime'];
        }
        if (isset($map['ToAddress'])) {
            $model->toAddress = $map['ToAddress'];
        }
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['DetectionId'])) {
            $model->detectionId = $map['DetectionId'];
        }
        if (isset($map['BccAddress'])) {
            $model->bccAddress = $map['BccAddress'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        return $model;
    }
}
