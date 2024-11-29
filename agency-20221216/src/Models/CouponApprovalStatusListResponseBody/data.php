<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\CouponApprovalStatusListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example test@test.aliyunid.com
     *
     * @var string
     */
    public $issuerAccount;

    /**
     * @example 5432738203821334
     *
     * @var string
     */
    public $issuerUid;

    /**
     * @var string
     */
    public $note;

    /**
     * @example S00000101-100040
     *
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @example 2
     *
     * @var int
     */
    public $templateStatus;

    /**
     * @example 2024-02-02 09:46:59
     *
     * @var string
     */
    public $timeOfRequest;
    protected $_name = [
        'issuerAccount'  => 'IssuerAccount',
        'issuerUid'      => 'IssuerUid',
        'note'           => 'Note',
        'templateId'     => 'TemplateId',
        'templateName'   => 'TemplateName',
        'templateStatus' => 'TemplateStatus',
        'timeOfRequest'  => 'TimeOfRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->issuerAccount) {
            $res['IssuerAccount'] = $this->issuerAccount;
        }
        if (null !== $this->issuerUid) {
            $res['IssuerUid'] = $this->issuerUid;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateStatus) {
            $res['TemplateStatus'] = $this->templateStatus;
        }
        if (null !== $this->timeOfRequest) {
            $res['TimeOfRequest'] = $this->timeOfRequest;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IssuerAccount'])) {
            $model->issuerAccount = $map['IssuerAccount'];
        }
        if (isset($map['IssuerUid'])) {
            $model->issuerUid = $map['IssuerUid'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateStatus'])) {
            $model->templateStatus = $map['TemplateStatus'];
        }
        if (isset($map['TimeOfRequest'])) {
            $model->timeOfRequest = $map['TimeOfRequest'];
        }

        return $model;
    }
}
