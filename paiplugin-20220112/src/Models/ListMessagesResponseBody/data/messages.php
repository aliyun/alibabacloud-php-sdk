<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListMessagesResponseBody\data;

use AlibabaCloud\Tea\Model;

class messages extends Model
{
    /**
     * @description 短信错误码。
     *
     * @example DELIVERED
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description 关联人群Id，未关联则为空。
     *
     * @example 51d20163-1b10-4af2-8a23-58ad52201f2f
     *
     * @var string
     */
    public $groupId;

    /**
     * @description 短信序列号。
     *
     * @example 92d05e19-751b-4346-a7c5-8808bb49b8a2
     *
     * @var string
     */
    public $id;

    /**
     * @description 外部拓展字段。
     *
     * @example 1234567890
     *
     * @var string
     */
    public $outId;

    /**
     * @description 手机号码。
     *
     * @example 1234567890
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description 关联触达计划Id，未关联则为空。
     *
     * @example 0604d49d-fd23-4515-bb26-9b537cbf1f6d
     *
     * @var string
     */
    public $scheduleId;

    /**
     * @description 签名名称。
     *
     * @example PAI通知
     *
     * @var string
     */
    public $signature;

    /**
     * @description 短信发送状态。
     * - 2 : 发送失败。
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description 模板号。
     *
     * @example SMS_123456
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description 模板参数。
     *
     * @example {}
     *
     * @var string
     */
    public $templateParams;

    /**
     * @description 模板类型。
     * - 2 : 推广短信。
     * @example 2
     *
     * @var int
     */
    public $templateType;
    protected $_name = [
        'errorCode'      => 'ErrorCode',
        'groupId'        => 'GroupId',
        'id'             => 'Id',
        'outId'          => 'OutId',
        'phoneNumber'    => 'PhoneNumber',
        'scheduleId'     => 'ScheduleId',
        'signature'      => 'Signature',
        'status'         => 'Status',
        'templateCode'   => 'TemplateCode',
        'templateParams' => 'TemplateParams',
        'templateType'   => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->scheduleId) {
            $res['ScheduleId'] = $this->scheduleId;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateParams) {
            $res['TemplateParams'] = $this->templateParams;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return messages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['ScheduleId'])) {
            $model->scheduleId = $map['ScheduleId'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateParams'])) {
            $model->templateParams = $map['TemplateParams'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
