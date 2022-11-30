<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListVoiceTtsResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $auditBy;

    /**
     * @var string
     */
    public $auditRemark;

    /**
     * @var string
     */
    public $auditTs;

    /**
     * @var string
     */
    public $commitTs;

    /**
     * @var string
     */
    public $countryId;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $qualificationId;

    /**
     * @var int
     */
    public $speed;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateText;

    /**
     * @var string
     */
    public $updateTs;

    /**
     * @var string
     */
    public $userUuid;
    protected $_name = [
        'auditBy'         => 'AuditBy',
        'auditRemark'     => 'AuditRemark',
        'auditTs'         => 'AuditTs',
        'commitTs'        => 'CommitTs',
        'countryId'       => 'CountryId',
        'language'        => 'Language',
        'qualificationId' => 'QualificationId',
        'speed'           => 'Speed',
        'status'          => 'Status',
        'templateId'      => 'TemplateId',
        'templateName'    => 'TemplateName',
        'templateText'    => 'TemplateText',
        'updateTs'        => 'UpdateTs',
        'userUuid'        => 'UserUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditBy) {
            $res['AuditBy'] = $this->auditBy;
        }
        if (null !== $this->auditRemark) {
            $res['AuditRemark'] = $this->auditRemark;
        }
        if (null !== $this->auditTs) {
            $res['AuditTs'] = $this->auditTs;
        }
        if (null !== $this->commitTs) {
            $res['CommitTs'] = $this->commitTs;
        }
        if (null !== $this->countryId) {
            $res['CountryId'] = $this->countryId;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->qualificationId) {
            $res['QualificationId'] = $this->qualificationId;
        }
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateText) {
            $res['TemplateText'] = $this->templateText;
        }
        if (null !== $this->updateTs) {
            $res['UpdateTs'] = $this->updateTs;
        }
        if (null !== $this->userUuid) {
            $res['UserUuid'] = $this->userUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditBy'])) {
            $model->auditBy = $map['AuditBy'];
        }
        if (isset($map['AuditRemark'])) {
            $model->auditRemark = $map['AuditRemark'];
        }
        if (isset($map['AuditTs'])) {
            $model->auditTs = $map['AuditTs'];
        }
        if (isset($map['CommitTs'])) {
            $model->commitTs = $map['CommitTs'];
        }
        if (isset($map['CountryId'])) {
            $model->countryId = $map['CountryId'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['QualificationId'])) {
            $model->qualificationId = $map['QualificationId'];
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateText'])) {
            $model->templateText = $map['TemplateText'];
        }
        if (isset($map['UpdateTs'])) {
            $model->updateTs = $map['UpdateTs'];
        }
        if (isset($map['UserUuid'])) {
            $model->userUuid = $map['UserUuid'];
        }

        return $model;
    }
}
