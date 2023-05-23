<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models;

use AlibabaCloud\Tea\Model;

class ListMessagesRequest extends Model
{
    /**
     * @description 发送日期，格式为20220101。
     *
     * @example 20220101
     *
     * @var string
     */
    public $datetime;

    /**
     * @description 短信错误码过滤。
     *
     * @example DELIVERED
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description 关联人群Id过滤。
     *
     * @example 10ed87f5-3ca8-4a43-9d83-b30519be7241
     *
     * @var string
     */
    public $groupId;

    /**
     * @description 短信Id过滤，短信Id为SendMessage成功返回的Id。
     *
     * @example 0a54e195-03e2-40bd-869d-b71cb302783e
     *
     * @var string
     */
    public $messageId;

    /**
     * @description 分页数，从1开始，默认为1。
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 分页大小，默认为10。
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 手机号码过滤。
     *
     * @example 1234567890
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description 短信批处理Id过滤，短信批处理Id为SendMessage成功返回的RequestId。
     *
     * @example 62a72a20-8a9b-4060-a510-0c30a9340cba
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 关联触达计划Id过滤。
     *
     * @example 08d19262-bd76-48fd-80e8-6a225ac388c1
     *
     * @var string
     */
    public $scheduleId;

    /**
     * @description 签名名称过滤。
     *
     * @example PAI通知
     *
     * @var string
     */
    public $signature;

    /**
     * @description 签名Id过滤，同时只能指定签名名称或签名Id其中之一。
     *
     * @example 5480e3e7-f578-42d2-8ce8-217dec75f2e6
     *
     * @var string
     */
    public $signatureId;

    /**
     * @description 短信发送状态过滤。
     * - 2 : 发送失败。
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description 模板号过滤。
     *
     * @example SMS_123456
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description 模板Id过滤，同时只能指定模板Code或模板Id其中之一。
     *
     * @example b1fe24e2-6a1b-42c6-901e-bfb2e898b5f3
     *
     * @var string
     */
    public $templateId;

    /**
     * @description 模板类型过滤。
     * - 2 : 推广短信。
     * @example 2
     *
     * @var int
     */
    public $templateType;
    protected $_name = [
        'datetime'     => 'Datetime',
        'errorCode'    => 'ErrorCode',
        'groupId'      => 'GroupId',
        'messageId'    => 'MessageId',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'phoneNumber'  => 'PhoneNumber',
        'requestId'    => 'RequestId',
        'scheduleId'   => 'ScheduleId',
        'signature'    => 'Signature',
        'signatureId'  => 'SignatureId',
        'status'       => 'Status',
        'templateCode' => 'TemplateCode',
        'templateId'   => 'TemplateId',
        'templateType' => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datetime) {
            $res['Datetime'] = $this->datetime;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scheduleId) {
            $res['ScheduleId'] = $this->scheduleId;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->signatureId) {
            $res['SignatureId'] = $this->signatureId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMessagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Datetime'])) {
            $model->datetime = $map['Datetime'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScheduleId'])) {
            $model->scheduleId = $map['ScheduleId'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['SignatureId'])) {
            $model->signatureId = $map['SignatureId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
