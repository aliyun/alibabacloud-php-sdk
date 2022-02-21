<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models;

use AlibabaCloud\Tea\Model;

class SendMessageRequest extends Model
{
    /**
     * @description 人群ID，用于关联人群。
     *
     * @var string
     */
    public $groupId;

    /**
     * @description 外部拓展字段。
     *
     * @var string[]
     */
    public $outIds;

    /**
     * @description 手机号，每个手机号对应一个模板变量、上行拓展码和外部拓展字段。
     *
     * @var string[]
     */
    public $phoneNumbers;

    /**
     * @description 发送计划ID，用于关联发送计划。
     *
     * @var string
     */
    public $scheduleId;

    /**
     * @description 签名名称。
     *
     * @var string
     */
    public $signName;

    /**
     * @description 签名ID，同时只能指定签名名称或签名ID其中之一。
     *
     * @var string
     */
    public $signatureId;

    /**
     * @description 短信上行拓展码。
     *
     * @var string[]
     */
    public $smsUpExtendCodes;

    /**
     * @description 模板Code。
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description 模板ID，同时只能指定模板Code或模板ID其中之一。
     *
     * @var string
     */
    public $templateId;

    /**
     * @description 短信模板变量对应的实际值，JSON格式。支持传入多个参数，示例：{"name":"张三","number":"15038****76"}。
     *
     * @var string[]
     */
    public $templateParams;
    protected $_name = [
        'groupId'          => 'GroupId',
        'outIds'           => 'OutIds',
        'phoneNumbers'     => 'PhoneNumbers',
        'scheduleId'       => 'ScheduleId',
        'signName'         => 'SignName',
        'signatureId'      => 'SignatureId',
        'smsUpExtendCodes' => 'SmsUpExtendCodes',
        'templateCode'     => 'TemplateCode',
        'templateId'       => 'TemplateId',
        'templateParams'   => 'TemplateParams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->outIds) {
            $res['OutIds'] = $this->outIds;
        }
        if (null !== $this->phoneNumbers) {
            $res['PhoneNumbers'] = $this->phoneNumbers;
        }
        if (null !== $this->scheduleId) {
            $res['ScheduleId'] = $this->scheduleId;
        }
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }
        if (null !== $this->signatureId) {
            $res['SignatureId'] = $this->signatureId;
        }
        if (null !== $this->smsUpExtendCodes) {
            $res['SmsUpExtendCodes'] = $this->smsUpExtendCodes;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateParams) {
            $res['TemplateParams'] = $this->templateParams;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendMessageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['OutIds'])) {
            if (!empty($map['OutIds'])) {
                $model->outIds = $map['OutIds'];
            }
        }
        if (isset($map['PhoneNumbers'])) {
            if (!empty($map['PhoneNumbers'])) {
                $model->phoneNumbers = $map['PhoneNumbers'];
            }
        }
        if (isset($map['ScheduleId'])) {
            $model->scheduleId = $map['ScheduleId'];
        }
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }
        if (isset($map['SignatureId'])) {
            $model->signatureId = $map['SignatureId'];
        }
        if (isset($map['SmsUpExtendCodes'])) {
            if (!empty($map['SmsUpExtendCodes'])) {
                $model->smsUpExtendCodes = $map['SmsUpExtendCodes'];
            }
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateParams'])) {
            if (!empty($map['TemplateParams'])) {
                $model->templateParams = $map['TemplateParams'];
            }
        }

        return $model;
    }
}
