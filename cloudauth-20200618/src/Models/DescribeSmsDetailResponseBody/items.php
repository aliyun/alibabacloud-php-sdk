<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20200618\Models\DescribeSmsDetailResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $receiveDate;

    /**
     * @var string
     */
    public $sendDate;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $taskDate;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $outerOrderNo;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var int
     */
    public $smsSize;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var string
     */
    public $sendStatus;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'receiveDate'  => 'ReceiveDate',
        'sendDate'     => 'SendDate',
        'bizId'        => 'BizId',
        'taskDate'     => 'TaskDate',
        'templateCode' => 'TemplateCode',
        'outerOrderNo' => 'OuterOrderNo',
        'errorCode'    => 'ErrorCode',
        'mobile'       => 'Mobile',
        'smsSize'      => 'SmsSize',
        'content'      => 'Content',
        'signName'     => 'SignName',
        'sendStatus'   => 'SendStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->receiveDate) {
            $res['ReceiveDate'] = $this->receiveDate;
        }
        if (null !== $this->sendDate) {
            $res['SendDate'] = $this->sendDate;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->taskDate) {
            $res['TaskDate'] = $this->taskDate;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->outerOrderNo) {
            $res['OuterOrderNo'] = $this->outerOrderNo;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->smsSize) {
            $res['SmsSize'] = $this->smsSize;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }
        if (null !== $this->sendStatus) {
            $res['SendStatus'] = $this->sendStatus;
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
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ReceiveDate'])) {
            $model->receiveDate = $map['ReceiveDate'];
        }
        if (isset($map['SendDate'])) {
            $model->sendDate = $map['SendDate'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['TaskDate'])) {
            $model->taskDate = $map['TaskDate'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['OuterOrderNo'])) {
            $model->outerOrderNo = $map['OuterOrderNo'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['SmsSize'])) {
            $model->smsSize = $map['SmsSize'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }
        if (isset($map['SendStatus'])) {
            $model->sendStatus = $map['SendStatus'];
        }

        return $model;
    }
}
