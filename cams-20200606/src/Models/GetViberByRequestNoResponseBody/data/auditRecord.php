<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetViberByRequestNoResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetViberByRequestNoResponseBody\data\auditRecord\companyAddress;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetViberByRequestNoResponseBody\data\auditRecord\companyTel;

class auditRecord extends Model
{
    /**
     * @var string
     */
    public $ageLimit;

    /**
     * @var string
     */
    public $applyReason;

    /**
     * @var string
     */
    public $businessAccountName;

    /**
     * @var string
     */
    public $businessLicenseRegistrationNumber;

    /**
     * @var companyAddress[]
     */
    public $companyAddress;

    /**
     * @var string
     */
    public $companyEnglishName;

    /**
     * @var string
     */
    public $companyLegalName;

    /**
     * @var string
     */
    public $companyLegalPerson;

    /**
     * @var string
     */
    public $companyProfile;

    /**
     * @var string
     */
    public $companyRegisteredCountry;

    /**
     * @var companyTel[]
     */
    public $companyTel;

    /**
     * @var string
     */
    public $completeAddressOfHeadquarters;

    /**
     * @var string
     */
    public $contactMail;

    /**
     * @var string
     */
    public $enableAutoReply;

    /**
     * @var string
     */
    public $industryDescription;

    /**
     * @var string
     */
    public $industryInvolved;

    /**
     * @var string
     */
    public $letterGuarantee;

    /**
     * @var string[]
     */
    public $logo;

    /**
     * @var string[]
     */
    public $messageDestinationCountry;

    /**
     * @var string[]
     */
    public $messageDestinationInternationalCountry;

    /**
     * @var string
     */
    public $messageDialogueIntroduction;

    /**
     * @var string
     */
    public $messageEnableDate;

    /**
     * @var string
     */
    public $messageSessionName;

    /**
     * @var string
     */
    public $nowRecovery;

    /**
     * @var string
     */
    public $otherLetterGuarantee;

    /**
     * @var string
     */
    public $recoveryDate;

    /**
     * @var string
     */
    public $replyContent;

    /**
     * @var string
     */
    public $suspensionDate;

    /**
     * @var string
     */
    public $webAddress;
    protected $_name = [
        'ageLimit' => 'AgeLimit',
        'applyReason' => 'ApplyReason',
        'businessAccountName' => 'BusinessAccountName',
        'businessLicenseRegistrationNumber' => 'BusinessLicenseRegistrationNumber',
        'companyAddress' => 'CompanyAddress',
        'companyEnglishName' => 'CompanyEnglishName',
        'companyLegalName' => 'CompanyLegalName',
        'companyLegalPerson' => 'CompanyLegalPerson',
        'companyProfile' => 'CompanyProfile',
        'companyRegisteredCountry' => 'CompanyRegisteredCountry',
        'companyTel' => 'CompanyTel',
        'completeAddressOfHeadquarters' => 'CompleteAddressOfHeadquarters',
        'contactMail' => 'ContactMail',
        'enableAutoReply' => 'EnableAutoReply',
        'industryDescription' => 'IndustryDescription',
        'industryInvolved' => 'IndustryInvolved',
        'letterGuarantee' => 'LetterGuarantee',
        'logo' => 'Logo',
        'messageDestinationCountry' => 'MessageDestinationCountry',
        'messageDestinationInternationalCountry' => 'MessageDestinationInternationalCountry',
        'messageDialogueIntroduction' => 'MessageDialogueIntroduction',
        'messageEnableDate' => 'MessageEnableDate',
        'messageSessionName' => 'MessageSessionName',
        'nowRecovery' => 'NowRecovery',
        'otherLetterGuarantee' => 'OtherLetterGuarantee',
        'recoveryDate' => 'RecoveryDate',
        'replyContent' => 'ReplyContent',
        'suspensionDate' => 'SuspensionDate',
        'webAddress' => 'WebAddress',
    ];

    public function validate()
    {
        if (\is_array($this->companyAddress)) {
            Model::validateArray($this->companyAddress);
        }
        if (\is_array($this->companyTel)) {
            Model::validateArray($this->companyTel);
        }
        if (\is_array($this->logo)) {
            Model::validateArray($this->logo);
        }
        if (\is_array($this->messageDestinationCountry)) {
            Model::validateArray($this->messageDestinationCountry);
        }
        if (\is_array($this->messageDestinationInternationalCountry)) {
            Model::validateArray($this->messageDestinationInternationalCountry);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ageLimit) {
            $res['AgeLimit'] = $this->ageLimit;
        }

        if (null !== $this->applyReason) {
            $res['ApplyReason'] = $this->applyReason;
        }

        if (null !== $this->businessAccountName) {
            $res['BusinessAccountName'] = $this->businessAccountName;
        }

        if (null !== $this->businessLicenseRegistrationNumber) {
            $res['BusinessLicenseRegistrationNumber'] = $this->businessLicenseRegistrationNumber;
        }

        if (null !== $this->companyAddress) {
            if (\is_array($this->companyAddress)) {
                $res['CompanyAddress'] = [];
                $n1 = 0;
                foreach ($this->companyAddress as $item1) {
                    $res['CompanyAddress'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->companyEnglishName) {
            $res['CompanyEnglishName'] = $this->companyEnglishName;
        }

        if (null !== $this->companyLegalName) {
            $res['CompanyLegalName'] = $this->companyLegalName;
        }

        if (null !== $this->companyLegalPerson) {
            $res['CompanyLegalPerson'] = $this->companyLegalPerson;
        }

        if (null !== $this->companyProfile) {
            $res['CompanyProfile'] = $this->companyProfile;
        }

        if (null !== $this->companyRegisteredCountry) {
            $res['CompanyRegisteredCountry'] = $this->companyRegisteredCountry;
        }

        if (null !== $this->companyTel) {
            if (\is_array($this->companyTel)) {
                $res['CompanyTel'] = [];
                $n1 = 0;
                foreach ($this->companyTel as $item1) {
                    $res['CompanyTel'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->completeAddressOfHeadquarters) {
            $res['CompleteAddressOfHeadquarters'] = $this->completeAddressOfHeadquarters;
        }

        if (null !== $this->contactMail) {
            $res['ContactMail'] = $this->contactMail;
        }

        if (null !== $this->enableAutoReply) {
            $res['EnableAutoReply'] = $this->enableAutoReply;
        }

        if (null !== $this->industryDescription) {
            $res['IndustryDescription'] = $this->industryDescription;
        }

        if (null !== $this->industryInvolved) {
            $res['IndustryInvolved'] = $this->industryInvolved;
        }

        if (null !== $this->letterGuarantee) {
            $res['LetterGuarantee'] = $this->letterGuarantee;
        }

        if (null !== $this->logo) {
            if (\is_array($this->logo)) {
                $res['Logo'] = [];
                $n1 = 0;
                foreach ($this->logo as $item1) {
                    $res['Logo'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->messageDestinationCountry) {
            if (\is_array($this->messageDestinationCountry)) {
                $res['MessageDestinationCountry'] = [];
                $n1 = 0;
                foreach ($this->messageDestinationCountry as $item1) {
                    $res['MessageDestinationCountry'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->messageDestinationInternationalCountry) {
            if (\is_array($this->messageDestinationInternationalCountry)) {
                $res['MessageDestinationInternationalCountry'] = [];
                $n1 = 0;
                foreach ($this->messageDestinationInternationalCountry as $item1) {
                    $res['MessageDestinationInternationalCountry'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->messageDialogueIntroduction) {
            $res['MessageDialogueIntroduction'] = $this->messageDialogueIntroduction;
        }

        if (null !== $this->messageEnableDate) {
            $res['MessageEnableDate'] = $this->messageEnableDate;
        }

        if (null !== $this->messageSessionName) {
            $res['MessageSessionName'] = $this->messageSessionName;
        }

        if (null !== $this->nowRecovery) {
            $res['NowRecovery'] = $this->nowRecovery;
        }

        if (null !== $this->otherLetterGuarantee) {
            $res['OtherLetterGuarantee'] = $this->otherLetterGuarantee;
        }

        if (null !== $this->recoveryDate) {
            $res['RecoveryDate'] = $this->recoveryDate;
        }

        if (null !== $this->replyContent) {
            $res['ReplyContent'] = $this->replyContent;
        }

        if (null !== $this->suspensionDate) {
            $res['SuspensionDate'] = $this->suspensionDate;
        }

        if (null !== $this->webAddress) {
            $res['WebAddress'] = $this->webAddress;
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
        if (isset($map['AgeLimit'])) {
            $model->ageLimit = $map['AgeLimit'];
        }

        if (isset($map['ApplyReason'])) {
            $model->applyReason = $map['ApplyReason'];
        }

        if (isset($map['BusinessAccountName'])) {
            $model->businessAccountName = $map['BusinessAccountName'];
        }

        if (isset($map['BusinessLicenseRegistrationNumber'])) {
            $model->businessLicenseRegistrationNumber = $map['BusinessLicenseRegistrationNumber'];
        }

        if (isset($map['CompanyAddress'])) {
            if (!empty($map['CompanyAddress'])) {
                $model->companyAddress = [];
                $n1 = 0;
                foreach ($map['CompanyAddress'] as $item1) {
                    $model->companyAddress[$n1] = companyAddress::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CompanyEnglishName'])) {
            $model->companyEnglishName = $map['CompanyEnglishName'];
        }

        if (isset($map['CompanyLegalName'])) {
            $model->companyLegalName = $map['CompanyLegalName'];
        }

        if (isset($map['CompanyLegalPerson'])) {
            $model->companyLegalPerson = $map['CompanyLegalPerson'];
        }

        if (isset($map['CompanyProfile'])) {
            $model->companyProfile = $map['CompanyProfile'];
        }

        if (isset($map['CompanyRegisteredCountry'])) {
            $model->companyRegisteredCountry = $map['CompanyRegisteredCountry'];
        }

        if (isset($map['CompanyTel'])) {
            if (!empty($map['CompanyTel'])) {
                $model->companyTel = [];
                $n1 = 0;
                foreach ($map['CompanyTel'] as $item1) {
                    $model->companyTel[$n1] = companyTel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CompleteAddressOfHeadquarters'])) {
            $model->completeAddressOfHeadquarters = $map['CompleteAddressOfHeadquarters'];
        }

        if (isset($map['ContactMail'])) {
            $model->contactMail = $map['ContactMail'];
        }

        if (isset($map['EnableAutoReply'])) {
            $model->enableAutoReply = $map['EnableAutoReply'];
        }

        if (isset($map['IndustryDescription'])) {
            $model->industryDescription = $map['IndustryDescription'];
        }

        if (isset($map['IndustryInvolved'])) {
            $model->industryInvolved = $map['IndustryInvolved'];
        }

        if (isset($map['LetterGuarantee'])) {
            $model->letterGuarantee = $map['LetterGuarantee'];
        }

        if (isset($map['Logo'])) {
            if (!empty($map['Logo'])) {
                $model->logo = [];
                $n1 = 0;
                foreach ($map['Logo'] as $item1) {
                    $model->logo[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MessageDestinationCountry'])) {
            if (!empty($map['MessageDestinationCountry'])) {
                $model->messageDestinationCountry = [];
                $n1 = 0;
                foreach ($map['MessageDestinationCountry'] as $item1) {
                    $model->messageDestinationCountry[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MessageDestinationInternationalCountry'])) {
            if (!empty($map['MessageDestinationInternationalCountry'])) {
                $model->messageDestinationInternationalCountry = [];
                $n1 = 0;
                foreach ($map['MessageDestinationInternationalCountry'] as $item1) {
                    $model->messageDestinationInternationalCountry[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MessageDialogueIntroduction'])) {
            $model->messageDialogueIntroduction = $map['MessageDialogueIntroduction'];
        }

        if (isset($map['MessageEnableDate'])) {
            $model->messageEnableDate = $map['MessageEnableDate'];
        }

        if (isset($map['MessageSessionName'])) {
            $model->messageSessionName = $map['MessageSessionName'];
        }

        if (isset($map['NowRecovery'])) {
            $model->nowRecovery = $map['NowRecovery'];
        }

        if (isset($map['OtherLetterGuarantee'])) {
            $model->otherLetterGuarantee = $map['OtherLetterGuarantee'];
        }

        if (isset($map['RecoveryDate'])) {
            $model->recoveryDate = $map['RecoveryDate'];
        }

        if (isset($map['ReplyContent'])) {
            $model->replyContent = $map['ReplyContent'];
        }

        if (isset($map['SuspensionDate'])) {
            $model->suspensionDate = $map['SuspensionDate'];
        }

        if (isset($map['WebAddress'])) {
            $model->webAddress = $map['WebAddress'];
        }

        return $model;
    }
}
