<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySendDetailsResponseBody\smsSendDetailDTOs;

use AlibabaCloud\Tea\Model;

class smsSendDetailDTO extends Model
{
    /**
     * @description The content of the message.
     *
     * @example 【Aliyun】This is a test message.
     *
     * @var string
     */
    public $content;

    /**
     * @description The status code returned by the carrier.
     *
     *   If the message is delivered, "DELIVERED" is returned.
     *   For information about the error codes that may be returned if the message is not delivered, see [error codes](https://help.aliyun.com/document_detail/101347.html).
     *
     * @example DELIVERED
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The extended field.
     *
     * @example 123
     *
     * @var string
     */
    public $outId;

    /**
     * @description The mobile numbers of the recipients.
     *
     * @example 1390000****
     *
     * @var string
     */
    public $phoneNum;

    /**
     * @description The date and time when the message was received.
     *
     * @example 2019-01-08 16:44:13
     *
     * @var string
     */
    public $receiveDate;

    /**
     * @description The date and time when the message was sent.
     *
     * @example 2019-01-08 16:44:10
     *
     * @var string
     */
    public $sendDate;

    /**
     * @description The delivery status of the message. Valid values:
     *
     *   **1**: The message has not received a delivery receipt yet.
     *   **2**: The message failed to be delivered.
     *   **3**: The message was delivered.
     *
     * @example 3
     *
     * @var int
     */
    public $sendStatus;

    /**
     * @description The ID of the message template.
     *
     * @example SMS_12231****
     *
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'content'      => 'Content',
        'errCode'      => 'ErrCode',
        'outId'        => 'OutId',
        'phoneNum'     => 'PhoneNum',
        'receiveDate'  => 'ReceiveDate',
        'sendDate'     => 'SendDate',
        'sendStatus'   => 'SendStatus',
        'templateCode' => 'TemplateCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->phoneNum) {
            $res['PhoneNum'] = $this->phoneNum;
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
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return smsSendDetailDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['PhoneNum'])) {
            $model->phoneNum = $map['PhoneNum'];
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
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        return $model;
    }
}
