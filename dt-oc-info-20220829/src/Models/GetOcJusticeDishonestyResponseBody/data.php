<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeDishonestyResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 160000.0
     *
     * @var string
     */
    public $amount;

    /**
     * @var string
     */
    public $caseNum;

    /**
     * @var string
     */
    public $court;

    /**
     * @var string
     */
    public $entName;

    /**
     * @var string
     */
    public $executeDepartment;

    /**
     * @var string
     */
    public $executionDesc;

    /**
     * @var string
     */
    public $executionStatus;

    /**
     * @example 2015-08-03
     *
     * @var string
     */
    public $filingDate;

    /**
     * @var string
     */
    public $finalDuty;

    /**
     * @var string
     */
    public $fromCaseNum;

    /**
     * @var string
     */
    public $legalName;

    /**
     * @var string
     */
    public $province;

    /**
     * @example 2015-11-11
     *
     * @var string
     */
    public $publishDate;

    /**
     * @example 914403006700460677
     *
     * @var string
     */
    public $socialCreditCode;
    protected $_name = [
        'amount'            => 'Amount',
        'caseNum'           => 'CaseNum',
        'court'             => 'Court',
        'entName'           => 'EntName',
        'executeDepartment' => 'ExecuteDepartment',
        'executionDesc'     => 'ExecutionDesc',
        'executionStatus'   => 'ExecutionStatus',
        'filingDate'        => 'FilingDate',
        'finalDuty'         => 'FinalDuty',
        'fromCaseNum'       => 'FromCaseNum',
        'legalName'         => 'LegalName',
        'province'          => 'Province',
        'publishDate'       => 'PublishDate',
        'socialCreditCode'  => 'SocialCreditCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->caseNum) {
            $res['CaseNum'] = $this->caseNum;
        }
        if (null !== $this->court) {
            $res['Court'] = $this->court;
        }
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->executeDepartment) {
            $res['ExecuteDepartment'] = $this->executeDepartment;
        }
        if (null !== $this->executionDesc) {
            $res['ExecutionDesc'] = $this->executionDesc;
        }
        if (null !== $this->executionStatus) {
            $res['ExecutionStatus'] = $this->executionStatus;
        }
        if (null !== $this->filingDate) {
            $res['FilingDate'] = $this->filingDate;
        }
        if (null !== $this->finalDuty) {
            $res['FinalDuty'] = $this->finalDuty;
        }
        if (null !== $this->fromCaseNum) {
            $res['FromCaseNum'] = $this->fromCaseNum;
        }
        if (null !== $this->legalName) {
            $res['LegalName'] = $this->legalName;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->publishDate) {
            $res['PublishDate'] = $this->publishDate;
        }
        if (null !== $this->socialCreditCode) {
            $res['SocialCreditCode'] = $this->socialCreditCode;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['CaseNum'])) {
            $model->caseNum = $map['CaseNum'];
        }
        if (isset($map['Court'])) {
            $model->court = $map['Court'];
        }
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['ExecuteDepartment'])) {
            $model->executeDepartment = $map['ExecuteDepartment'];
        }
        if (isset($map['ExecutionDesc'])) {
            $model->executionDesc = $map['ExecutionDesc'];
        }
        if (isset($map['ExecutionStatus'])) {
            $model->executionStatus = $map['ExecutionStatus'];
        }
        if (isset($map['FilingDate'])) {
            $model->filingDate = $map['FilingDate'];
        }
        if (isset($map['FinalDuty'])) {
            $model->finalDuty = $map['FinalDuty'];
        }
        if (isset($map['FromCaseNum'])) {
            $model->fromCaseNum = $map['FromCaseNum'];
        }
        if (isset($map['LegalName'])) {
            $model->legalName = $map['LegalName'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['PublishDate'])) {
            $model->publishDate = $map['PublishDate'];
        }
        if (isset($map['SocialCreditCode'])) {
            $model->socialCreditCode = $map['SocialCreditCode'];
        }

        return $model;
    }
}
