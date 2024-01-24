<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20200618\Models\DescribeSmsDetailResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example qwer^xxxxxxxx
     *
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $content;

    /**
     * @example DELIVERED
     *
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @example 1500000xxxx
     *
     * @var string
     */
    public $mobile;

    /**
     * @example qwertyuiopasdfghjklzxcvbnmqxxxx
     *
     * @var string
     */
    public $outerOrderNo;

    /**
     * @example 2021-04-28 12:00:00
     *
     * @var string
     */
    public $receiveDate;

    /**
     * @example 2021-04-28 12:00:00
     *
     * @var string
     */
    public $sendDate;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $sendStatus;

    /**
     * @var string
     */
    public $signName;

    /**
     * @example 1
     *
     * @var int
     */
    public $smsSize;

    /**
     * @example 2021-04-28 12:00:00
     *
     * @var string
     */
    public $taskDate;

    /**
     * @example SMS_0000
     *
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'bizId'        => 'BizId',
        'content'      => 'Content',
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'mobile'       => 'Mobile',
        'outerOrderNo' => 'OuterOrderNo',
        'receiveDate'  => 'ReceiveDate',
        'sendDate'     => 'SendDate',
        'sendStatus'   => 'SendStatus',
        'signName'     => 'SignName',
        'smsSize'      => 'SmsSize',
        'taskDate'     => 'TaskDate',
        'templateCode' => 'TemplateCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->outerOrderNo) {
            $res['OuterOrderNo'] = $this->outerOrderNo;
        }
        if (null !== $this->receiveDate) {
            $res['ReceiveDate'] = $this->receiveDate;
        }
        if (null !== $this->sendDate) {
            $res['SendDate'] = $this->sendDate;
        }
        if (null !== $this->sendStatus) {
            $res['SendStatus'] = $this->sendStatus;
        }
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }
        if (null !== $this->smsSize) {
            $res['SmsSize'] = $this->smsSize;
        }
        if (null !== $this->taskDate) {
            $res['TaskDate'] = $this->taskDate;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['OuterOrderNo'])) {
            $model->outerOrderNo = $map['OuterOrderNo'];
        }
        if (isset($map['ReceiveDate'])) {
            $model->receiveDate = $map['ReceiveDate'];
        }
        if (isset($map['SendDate'])) {
            $model->sendDate = $map['SendDate'];
        }
        if (isset($map['SendStatus'])) {
            $model->sendStatus = $map['SendStatus'];
        }
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }
        if (isset($map['SmsSize'])) {
            $model->smsSize = $map['SmsSize'];
        }
        if (isset($map['TaskDate'])) {
            $model->taskDate = $map['TaskDate'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        return $model;
    }
}
