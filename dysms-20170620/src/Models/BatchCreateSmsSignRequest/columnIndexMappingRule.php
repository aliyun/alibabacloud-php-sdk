<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\BatchCreateSmsSignRequest;

use AlibabaCloud\Dara\Model;

class columnIndexMappingRule extends Model
{
    /**
     * @var int
     */
    public $adminIdentifiedNumber;

    /**
     * @var int
     */
    public $adminName;

    /**
     * @var int
     */
    public $companyName;

    /**
     * @var int
     */
    public $legalPersonIdentifiedNumber;

    /**
     * @var int
     */
    public $legalPersonName;

    /**
     * @var int
     */
    public $organizationCode;

    /**
     * @var int
     */
    public $remark;

    /**
     * @var int
     */
    public $sceneDescription;

    /**
     * @var int
     */
    public $signatureName;

    /**
     * @var int
     */
    public $signatureSource;

    /**
     * @var int
     */
    public $templateContent;
    protected $_name = [
        'adminIdentifiedNumber' => 'AdminIdentifiedNumber',
        'adminName' => 'AdminName',
        'companyName' => 'CompanyName',
        'legalPersonIdentifiedNumber' => 'LegalPersonIdentifiedNumber',
        'legalPersonName' => 'LegalPersonName',
        'organizationCode' => 'OrganizationCode',
        'remark' => 'Remark',
        'sceneDescription' => 'SceneDescription',
        'signatureName' => 'SignatureName',
        'signatureSource' => 'SignatureSource',
        'templateContent' => 'TemplateContent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adminIdentifiedNumber) {
            $res['AdminIdentifiedNumber'] = $this->adminIdentifiedNumber;
        }

        if (null !== $this->adminName) {
            $res['AdminName'] = $this->adminName;
        }

        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }

        if (null !== $this->legalPersonIdentifiedNumber) {
            $res['LegalPersonIdentifiedNumber'] = $this->legalPersonIdentifiedNumber;
        }

        if (null !== $this->legalPersonName) {
            $res['LegalPersonName'] = $this->legalPersonName;
        }

        if (null !== $this->organizationCode) {
            $res['OrganizationCode'] = $this->organizationCode;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->sceneDescription) {
            $res['SceneDescription'] = $this->sceneDescription;
        }

        if (null !== $this->signatureName) {
            $res['SignatureName'] = $this->signatureName;
        }

        if (null !== $this->signatureSource) {
            $res['SignatureSource'] = $this->signatureSource;
        }

        if (null !== $this->templateContent) {
            $res['TemplateContent'] = $this->templateContent;
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
        if (isset($map['AdminIdentifiedNumber'])) {
            $model->adminIdentifiedNumber = $map['AdminIdentifiedNumber'];
        }

        if (isset($map['AdminName'])) {
            $model->adminName = $map['AdminName'];
        }

        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }

        if (isset($map['LegalPersonIdentifiedNumber'])) {
            $model->legalPersonIdentifiedNumber = $map['LegalPersonIdentifiedNumber'];
        }

        if (isset($map['LegalPersonName'])) {
            $model->legalPersonName = $map['LegalPersonName'];
        }

        if (isset($map['OrganizationCode'])) {
            $model->organizationCode = $map['OrganizationCode'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['SceneDescription'])) {
            $model->sceneDescription = $map['SceneDescription'];
        }

        if (isset($map['SignatureName'])) {
            $model->signatureName = $map['SignatureName'];
        }

        if (isset($map['SignatureSource'])) {
            $model->signatureSource = $map['SignatureSource'];
        }

        if (isset($map['TemplateContent'])) {
            $model->templateContent = $map['TemplateContent'];
        }

        return $model;
    }
}
