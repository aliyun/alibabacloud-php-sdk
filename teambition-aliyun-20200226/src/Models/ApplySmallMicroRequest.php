<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models;

use AlibabaCloud\Tea\Model;

class ApplySmallMicroRequest extends Model
{
    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $orgName;

    /**
     * @var string
     */
    public $applicantName;

    /**
     * @var string
     */
    public $applicantTel;

    /**
     * @var string
     */
    public $applicantEmail;

    /**
     * @var string
     */
    public $applicantPosition;

    /**
     * @var string
     */
    public $developScale;

    /**
     * @var string
     */
    public $developLanguage;

    /**
     * @var string
     */
    public $businessModel;

    /**
     * @var string
     */
    public $solution;

    /**
     * @var string
     */
    public $forHelp;
    protected $_name = [
        'orgId'             => 'OrgId',
        'type'              => 'Type',
        'orgName'           => 'OrgName',
        'applicantName'     => 'ApplicantName',
        'applicantTel'      => 'ApplicantTel',
        'applicantEmail'    => 'ApplicantEmail',
        'applicantPosition' => 'ApplicantPosition',
        'developScale'      => 'DevelopScale',
        'developLanguage'   => 'DevelopLanguage',
        'businessModel'     => 'BusinessModel',
        'solution'          => 'Solution',
        'forHelp'           => 'ForHelp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }
        if (null !== $this->applicantName) {
            $res['ApplicantName'] = $this->applicantName;
        }
        if (null !== $this->applicantTel) {
            $res['ApplicantTel'] = $this->applicantTel;
        }
        if (null !== $this->applicantEmail) {
            $res['ApplicantEmail'] = $this->applicantEmail;
        }
        if (null !== $this->applicantPosition) {
            $res['ApplicantPosition'] = $this->applicantPosition;
        }
        if (null !== $this->developScale) {
            $res['DevelopScale'] = $this->developScale;
        }
        if (null !== $this->developLanguage) {
            $res['DevelopLanguage'] = $this->developLanguage;
        }
        if (null !== $this->businessModel) {
            $res['BusinessModel'] = $this->businessModel;
        }
        if (null !== $this->solution) {
            $res['Solution'] = $this->solution;
        }
        if (null !== $this->forHelp) {
            $res['ForHelp'] = $this->forHelp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplySmallMicroRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }
        if (isset($map['ApplicantName'])) {
            $model->applicantName = $map['ApplicantName'];
        }
        if (isset($map['ApplicantTel'])) {
            $model->applicantTel = $map['ApplicantTel'];
        }
        if (isset($map['ApplicantEmail'])) {
            $model->applicantEmail = $map['ApplicantEmail'];
        }
        if (isset($map['ApplicantPosition'])) {
            $model->applicantPosition = $map['ApplicantPosition'];
        }
        if (isset($map['DevelopScale'])) {
            $model->developScale = $map['DevelopScale'];
        }
        if (isset($map['DevelopLanguage'])) {
            $model->developLanguage = $map['DevelopLanguage'];
        }
        if (isset($map['BusinessModel'])) {
            $model->businessModel = $map['BusinessModel'];
        }
        if (isset($map['Solution'])) {
            $model->solution = $map['Solution'];
        }
        if (isset($map['ForHelp'])) {
            $model->forHelp = $map['ForHelp'];
        }

        return $model;
    }
}
