<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetCardSmsDetailsResponseBody\cardSendDetailDTO;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @description 发送错误码
     *
     * @example Success
     *
     * @var string
     */
    public $errCode;

    /**
     * @description 客户传输outId
     *
     * @example 12345678
     *
     * @var string
     */
    public $outId;

    /**
     * @description 接收短信手机号
     *
     * @example 156****9080
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description 接收时间
     *
     * @example 2024-09-27 11:26:35
     *
     * @var string
     */
    public $receiveDate;

    /**
     * @description 接收短信类型
     *
     * @example CARD_SMS
     *
     * @var string
     */
    public $receiveType;

    /**
     * @description 渲染时间
     *
     * @example 2024-09-27 12:13:39
     *
     * @var string
     */
    public $renderDate;

    /**
     * @description 解析状态.。0：未解析；1：解析成功；3：未解析
     *
     * @example 1
     *
     * @var int
     */
    public $renderStatus;

    /**
     * @description 短信发送时间
     *
     * @example 2024-09-27 11:26:32
     *
     * @var string
     */
    public $sendDate;

    /**
     * @description 发送状态 1：发送中；2：发送失败；3：发送成功；4：寻址失败
     *
     * @example 3
     *
     * @var int
     */
    public $sendStatus;

    /**
     * @description 短信内容。只有文本短信有值
     *
     * @example 您收到一条短信消息
     *
     * @var string
     */
    public $smsContent;

    /**
     * @description 模板code
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
