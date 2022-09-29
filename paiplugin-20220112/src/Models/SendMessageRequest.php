<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models;

use AlibabaCloud\Tea\Model;

class SendMessageRequest extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string[]
     */
    public $outIds;

    /**
     * @var string[]
     */
    public $phoneNumbers;

    /**
     * @var string
     */
    public $scheduleId;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var string
     */
    public $signatureId;

    /**
     * @var string[]
     */
    public $smsUpExtendCodes;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $templateId;

    /**
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
