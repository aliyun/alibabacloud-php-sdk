<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QueryStandarTemplateCollectionsNewResponseBody\list_;

use AlibabaCloud\Dara\Model;

class fcPartnerTemplateDTO extends Model
{
    /**
     * @var int
     */
    public $businessType;

    /**
     * @var int
     */
    public $fcTag;

    /**
     * @var string
     */
    public $i18n;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $isDeleted;

    /**
     * @var int
     */
    public $mcBusinessType;

    /**
     * @var int
     */
    public $mcCategory;

    /**
     * @var string
     */
    public $mcSignature;

    /**
     * @var int
     */
    public $messageTypeId;

    /**
     * @var string
     */
    public $opNick;

    /**
     * @var int
     */
    public $partnerId;

    /**
     * @var int
     */
    public $qualificationId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $signTemplateId;

    /**
     * @var int
     */
    public $signType;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var int
     */
    public $speedLevel;

    /**
     * @var int
     */
    public $state;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $templateContent;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateParamRule;

    /**
     * @var int
     */
    public $templateSenderType;

    /**
     * @var int
     */
    public $templateType;

    /**
     * @var int
     */
    public $totalCountLimit;

    /**
     * @var int
     */
    public $voiceType;
    protected $_name = [
        'businessType' => 'BusinessType',
        'fcTag' => 'FcTag',
        'i18n' => 'I18n',
        'id' => 'Id',
        'isDeleted' => 'IsDeleted',
        'mcBusinessType' => 'McBusinessType',
        'mcCategory' => 'McCategory',
        'mcSignature' => 'McSignature',
        'messageTypeId' => 'MessageTypeId',
        'opNick' => 'OpNick',
        'partnerId' => 'PartnerId',
        'qualificationId' => 'QualificationId',
        'remark' => 'Remark',
        'signTemplateId' => 'SignTemplateId',
        'signType' => 'SignType',
        'sourceId' => 'SourceId',
        'speedLevel' => 'SpeedLevel',
        'state' => 'State',
        'templateCode' => 'TemplateCode',
        'templateContent' => 'TemplateContent',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
        'templateParamRule' => 'TemplateParamRule',
        'templateSenderType' => 'TemplateSenderType',
        'templateType' => 'TemplateType',
        'totalCountLimit' => 'TotalCountLimit',
        'voiceType' => 'VoiceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->fcTag) {
            $res['FcTag'] = $this->fcTag;
        }

        if (null !== $this->i18n) {
            $res['I18n'] = $this->i18n;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isDeleted) {
            $res['IsDeleted'] = $this->isDeleted;
        }

        if (null !== $this->mcBusinessType) {
            $res['McBusinessType'] = $this->mcBusinessType;
        }

        if (null !== $this->mcCategory) {
            $res['McCategory'] = $this->mcCategory;
        }

        if (null !== $this->mcSignature) {
            $res['McSignature'] = $this->mcSignature;
        }

        if (null !== $this->messageTypeId) {
            $res['MessageTypeId'] = $this->messageTypeId;
        }

        if (null !== $this->opNick) {
            $res['OpNick'] = $this->opNick;
        }

        if (null !== $this->partnerId) {
            $res['PartnerId'] = $this->partnerId;
        }

        if (null !== $this->qualificationId) {
            $res['QualificationId'] = $this->qualificationId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->signTemplateId) {
            $res['SignTemplateId'] = $this->signTemplateId;
        }

        if (null !== $this->signType) {
            $res['SignType'] = $this->signType;
        }

        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }

        if (null !== $this->speedLevel) {
            $res['SpeedLevel'] = $this->speedLevel;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        if (null !== $this->templateContent) {
            $res['TemplateContent'] = $this->templateContent;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->templateParamRule) {
            $res['TemplateParamRule'] = $this->templateParamRule;
        }

        if (null !== $this->templateSenderType) {
            $res['TemplateSenderType'] = $this->templateSenderType;
        }

        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        if (null !== $this->totalCountLimit) {
            $res['TotalCountLimit'] = $this->totalCountLimit;
        }

        if (null !== $this->voiceType) {
            $res['VoiceType'] = $this->voiceType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['FcTag'])) {
            $model->fcTag = $map['FcTag'];
        }

        if (isset($map['I18n'])) {
            $model->i18n = $map['I18n'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsDeleted'])) {
            $model->isDeleted = $map['IsDeleted'];
        }

        if (isset($map['McBusinessType'])) {
            $model->mcBusinessType = $map['McBusinessType'];
        }

        if (isset($map['McCategory'])) {
            $model->mcCategory = $map['McCategory'];
        }

        if (isset($map['McSignature'])) {
            $model->mcSignature = $map['McSignature'];
        }

        if (isset($map['MessageTypeId'])) {
            $model->messageTypeId = $map['MessageTypeId'];
        }

        if (isset($map['OpNick'])) {
            $model->opNick = $map['OpNick'];
        }

        if (isset($map['PartnerId'])) {
            $model->partnerId = $map['PartnerId'];
        }

        if (isset($map['QualificationId'])) {
            $model->qualificationId = $map['QualificationId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['SignTemplateId'])) {
            $model->signTemplateId = $map['SignTemplateId'];
        }

        if (isset($map['SignType'])) {
            $model->signType = $map['SignType'];
        }

        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        if (isset($map['SpeedLevel'])) {
            $model->speedLevel = $map['SpeedLevel'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        if (isset($map['TemplateContent'])) {
            $model->templateContent = $map['TemplateContent'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['TemplateParamRule'])) {
            $model->templateParamRule = $map['TemplateParamRule'];
        }

        if (isset($map['TemplateSenderType'])) {
            $model->templateSenderType = $map['TemplateSenderType'];
        }

        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        if (isset($map['TotalCountLimit'])) {
            $model->totalCountLimit = $map['TotalCountLimit'];
        }

        if (isset($map['VoiceType'])) {
            $model->voiceType = $map['VoiceType'];
        }

        return $model;
    }
}
