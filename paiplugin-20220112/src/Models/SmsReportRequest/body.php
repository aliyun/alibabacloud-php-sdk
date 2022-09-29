<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\SmsReportRequest;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $errCode;

    /**
     * @var string
     */
    public $errMsg;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $outId;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $reportTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sendTime;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var string
     */
    public $smsSize;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'bizId'        => 'biz_id',
        'errCode'      => 'err_code',
        'errMsg'       => 'err_msg',
        'messageId'    => 'message_id',
        'outId'        => 'out_id',
        'phoneNumber'  => 'phone_number',
        'reportTime'   => 'report_time',
        'requestId'    => 'request_id',
        'sendTime'     => 'send_time',
        'signName'     => 'sign_name',
        'smsSize'      => 'sms_size',
        'success'      => 'success',
        'templateCode' => 'template_code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['biz_id'] = $this->bizId;
        }
        if (null !== $this->errCode) {
            $res['err_code'] = $this->errCode;
        }
        if (null !== $this->errMsg) {
            $res['err_msg'] = $this->errMsg;
        }
        if (null !== $this->messageId) {
            $res['message_id'] = $this->messageId;
        }
        if (null !== $this->outId) {
            $res['out_id'] = $this->outId;
        }
        if (null !== $this->phoneNumber) {
            $res['phone_number'] = $this->phoneNumber;
        }
        if (null !== $this->reportTime) {
            $res['report_time'] = $this->reportTime;
        }
        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }
        if (null !== $this->sendTime) {
            $res['send_time'] = $this->sendTime;
        }
        if (null !== $this->signName) {
            $res['sign_name'] = $this->signName;
        }
        if (null !== $this->smsSize) {
            $res['sms_size'] = $this->smsSize;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->templateCode) {
            $res['template_code'] = $this->templateCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['biz_id'])) {
            $model->bizId = $map['biz_id'];
        }
        if (isset($map['err_code'])) {
            $model->errCode = $map['err_code'];
        }
        if (isset($map['err_msg'])) {
            $model->errMsg = $map['err_msg'];
        }
        if (isset($map['message_id'])) {
            $model->messageId = $map['message_id'];
        }
        if (isset($map['out_id'])) {
            $model->outId = $map['out_id'];
        }
        if (isset($map['phone_number'])) {
            $model->phoneNumber = $map['phone_number'];
        }
        if (isset($map['report_time'])) {
            $model->reportTime = $map['report_time'];
        }
        if (isset($map['request_id'])) {
            $model->requestId = $map['request_id'];
        }
        if (isset($map['send_time'])) {
            $model->sendTime = $map['send_time'];
        }
        if (isset($map['sign_name'])) {
            $model->signName = $map['sign_name'];
        }
        if (isset($map['sms_size'])) {
            $model->smsSize = $map['sms_size'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['template_code'])) {
            $model->templateCode = $map['template_code'];
        }

        return $model;
    }
}
