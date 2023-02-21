<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeLimitHighConsumeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $caseNum;

    /**
     * @var string
     */
    public $causeAction;

    /**
     * @var string
     */
    public $companyName;

    /**
     * @var string
     */
    public $court;

    /**
     * @var string
     */
    public $executionApplicant;

    /**
     * @example 2022-06-14
     *
     * @var string
     */
    public $filingDate;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 2022-10-27
     *
     * @var string
     */
    public $publishDate;
    protected $_name = [
        'caseNum'            => 'CaseNum',
        'causeAction'        => 'CauseAction',
        'companyName'        => 'CompanyName',
        'court'              => 'Court',
        'executionApplicant' => 'ExecutionApplicant',
        'filingDate'         => 'FilingDate',
        'name'               => 'Name',
        'publishDate'        => 'PublishDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caseNum) {
            $res['CaseNum'] = $this->caseNum;
        }
        if (null !== $this->causeAction) {
            $res['CauseAction'] = $this->causeAction;
        }
        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }
        if (null !== $this->court) {
            $res['Court'] = $this->court;
        }
        if (null !== $this->executionApplicant) {
            $res['ExecutionApplicant'] = $this->executionApplicant;
        }
        if (null !== $this->filingDate) {
            $res['FilingDate'] = $this->filingDate;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->publishDate) {
            $res['PublishDate'] = $this->publishDate;
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
        if (isset($map['CaseNum'])) {
            $model->caseNum = $map['CaseNum'];
        }
        if (isset($map['CauseAction'])) {
            $model->causeAction = $map['CauseAction'];
        }
        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }
        if (isset($map['Court'])) {
            $model->court = $map['Court'];
        }
        if (isset($map['ExecutionApplicant'])) {
            $model->executionApplicant = $map['ExecutionApplicant'];
        }
        if (isset($map['FilingDate'])) {
            $model->filingDate = $map['FilingDate'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PublishDate'])) {
            $model->publishDate = $map['PublishDate'];
        }

        return $model;
    }
}
