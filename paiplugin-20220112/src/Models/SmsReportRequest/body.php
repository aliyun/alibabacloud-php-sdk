<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\SmsReportRequest;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description 发送回执ID，即发送流水号。
     *
     * @var string
     */
    public $bizId;

    /**
     * @description 状态报告编码。
     *
     * @var string
     */
    public $errCode;

    /**
     * @description 状态报告说明。
     *
     * @var string
     */
    public $errMsg;

    /**
     * @description 短信Id。调用发送接口SendMessage发送短信时，返回值中的Id字段。可使用短信Id在接口ListMessages查询具体的发送状态。
     *
     * @var string
     */
    public $messageId;

    /**
     * @description 外部拓展字段。
     *
     * @var string
     */
    public $outId;

    /**
     * @description 手机号码。
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description 状态报告时间。
     *
     * @var string
     */
    public $reportTime;

    /**
     * @description 短信批处理Id。调用发送接口SendMessage发送短信时，返回值中的RequestId字段。可使用短信批处理Id在接口ListMessages查询具体的发送状态。
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 发送时间。
     *
     * @var string
     */
    public $sendTime;

    /**
     * @description 签名。
     *
     * @var string
     */
    public $signName;

    /**
     * @description 短信长度。短信长度不超过70个字，按照一条短信计费；超过70个字，即为长短信，按照67字/条拆分成多条计费。
     *
     * @var string
     */
    public $smsSize;

    /**
     * @description 是否接收成功。
     * - false : 接收失败。
     * @var bool
     */
    public $success;

    /**
     * @description 模板号。
     *
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
