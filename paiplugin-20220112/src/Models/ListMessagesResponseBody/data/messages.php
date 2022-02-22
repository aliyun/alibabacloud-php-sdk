<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListMessagesResponseBody\data;

use AlibabaCloud\Tea\Model;

class messages extends Model
{
    /**
     * @description 错误码。
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description 关联人群Id。
     *
     * @var string
     */
    public $groupId;

    /**
     * @description 短信序列号。
     *
     * @var string
     */
    public $id;

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
     * @description 关联发送计划Id。
     *
     * @var string
     */
    public $scheduleId;

    /**
     * @description 签名名称。
     *
     * @var string
     */
    public $signature;

    /**
     * @description 短信发送状态
     * - 2 : 发送失败。
     * @var int
     */
    public $status;

    /**
     * @description 模板号。
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description 模板参数。
     *
     * @var string
     */
    public $templateParams;
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

        return $model;
    }
}
