<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcOperationRecruitmentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $benefitList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $education;

    /**
     * @example 2019-03-12
     *
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $entName;

    /**
     * @var string
     */
    public $experience;

    /**
     * @example https://jobs.zhaopin.com/CZ446399310J00101222109.htm
     *
     * @var string
     */
    public $pageUrl;

    /**
     * @example 2019-02-12
     *
     * @var string
     */
    public $publishDate;

    /**
     * @var string
     */
    public $recruitingAddress;

    /**
     * @var string
     */
    public $recruitingName;

    /**
     * @example 3500.0-7000.0
     *
     * @var string
     */
    public $salary;

    /**
     * @example 2019-02-12
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'benefitList'       => 'BenefitList',
        'description'       => 'Description',
        'education'         => 'Education',
        'endDate'           => 'EndDate',
        'entName'           => 'EntName',
        'experience'        => 'Experience',
        'pageUrl'           => 'PageUrl',
        'publishDate'       => 'PublishDate',
        'recruitingAddress' => 'RecruitingAddress',
        'recruitingName'    => 'RecruitingName',
        'salary'            => 'Salary',
        'startDate'         => 'StartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->benefitList) {
            $res['BenefitList'] = $this->benefitList;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->education) {
            $res['Education'] = $this->education;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->experience) {
            $res['Experience'] = $this->experience;
        }
        if (null !== $this->pageUrl) {
            $res['PageUrl'] = $this->pageUrl;
        }
        if (null !== $this->publishDate) {
            $res['PublishDate'] = $this->publishDate;
        }
        if (null !== $this->recruitingAddress) {
            $res['RecruitingAddress'] = $this->recruitingAddress;
        }
        if (null !== $this->recruitingName) {
            $res['RecruitingName'] = $this->recruitingName;
        }
        if (null !== $this->salary) {
            $res['Salary'] = $this->salary;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
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
        if (isset($map['BenefitList'])) {
            $model->benefitList = $map['BenefitList'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Education'])) {
            $model->education = $map['Education'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['Experience'])) {
            $model->experience = $map['Experience'];
        }
        if (isset($map['PageUrl'])) {
            $model->pageUrl = $map['PageUrl'];
        }
        if (isset($map['PublishDate'])) {
            $model->publishDate = $map['PublishDate'];
        }
        if (isset($map['RecruitingAddress'])) {
            $model->recruitingAddress = $map['RecruitingAddress'];
        }
        if (isset($map['RecruitingName'])) {
            $model->recruitingName = $map['RecruitingName'];
        }
        if (isset($map['Salary'])) {
            $model->salary = $map['Salary'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
