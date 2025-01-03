<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetCardSmsDetailsResponseBody\cardSendDetailDTO;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @description Error code for sending
     *
     * @example Success
     *
     * @var string
     */
    public $errCode;

    /**
     * @description Customer-transmitted outId
     *
     * @example 12345678
     *
     * @var string
     */
    public $outId;

    /**
     * @description Phone number that received the SMS
     *
     * @example 156****9080
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description Receive date
     *
     * @example 2024-09-27 11:26:35
     *
     * @var string
     */
    public $receiveDate;

    /**
     * @description Receive SMS type
     *
     * @example CARD_SMS
     *
     * @var string
     */
    public $receiveType;

    /**
     * @description Render date
     *
     * @example 2024-09-27 12:13:39
     *
     * @var string
     */
    public $renderDate;

    /**
     * @description Render status. 0: Not rendered; 1: Rendered successfully; 3: Not rendered
     *
     * @example 1
     *
     * @var int
     */
    public $renderStatus;

    /**
     * @description Time when the SMS was sent
     *
     * @example 2024-09-27 11:26:32
     *
     * @var string
     */
    public $sendDate;

    /**
     * @description Sending status. 1: Sending; 2: Send failed; 3: Sent successfully; 4: Addressing failed
     *
     * @example 3
     *
     * @var int
     */
    public $sendStatus;

    /**
     * @description SMS content. Only applicable for text messages.
     *
     * @example 您收到一条短信消息
     *
     * @var string
     */
    public $smsContent;

    /**
     * @description Template code
     *
     * @example CARD_SMS_6***
     *
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'errCode'      => 'ErrCode',
        'outId'        => 'OutId',
        'phoneNumber'  => 'PhoneNumber',
        'receiveDate'  => 'ReceiveDate',
        'receiveType'  => 'ReceiveType',
        'renderDate'   => 'RenderDate',
        'renderStatus' => 'RenderStatus',
        'sendDate'     => 'SendDate',
        'sendStatus'   => 'SendStatus',
        'smsContent'   => 'SmsContent',
        'templateCode' => 'TemplateCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->receiveDate) {
            $res['ReceiveDate'] = $this->receiveDate;
        }
        if (null !== $this->receiveType) {
            $res['ReceiveType'] = $this->receiveType;
        }
        if (null !== $this->renderDate) {
            $res['RenderDate'] = $this->renderDate;
        }
        if (null !== $this->renderStatus) {
            $res['RenderStatus'] = $this->renderStatus;
        }
        if (null !== $this->sendDate) {
            $res['SendDate'] = $this->sendDate;
        }
        if (null !== $this->sendStatus) {
            $res['SendStatus'] = $this->sendStatus;
        }
        if (null !== $this->smsContent) {
            $res['SmsContent'] = $this->smsContent;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['ReceiveDate'])) {
            $model->receiveDate = $map['ReceiveDate'];
        }
        if (isset($map['ReceiveType'])) {
            $model->receiveType = $map['ReceiveType'];
        }
        if (isset($map['RenderDate'])) {
            $model->renderDate = $map['RenderDate'];
        }
        if (isset($map['RenderStatus'])) {
            $model->renderStatus = $map['RenderStatus'];
        }
        if (isset($map['SendDate'])) {
            $model->sendDate = $map['SendDate'];
        }
        if (isset($map['SendStatus'])) {
            $model->sendStatus = $map['SendStatus'];
        }
        if (isset($map['SmsContent'])) {
            $model->smsContent = $map['SmsContent'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        return $model;
    }
}
