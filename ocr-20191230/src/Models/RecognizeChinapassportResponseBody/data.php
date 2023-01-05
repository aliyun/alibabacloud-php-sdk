<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeChinapassportResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $authority;

    /**
     * @example 19880820
     *
     * @var string
     */
    public $birthDate;

    /**
     * @example 880820
     *
     * @var string
     */
    public $birthDay;

    /**
     * @var string
     */
    public $birthPlace;

    /**
     * @var string
     */
    public $birthPlaceRaw;

    /**
     * @example CHN
     *
     * @var string
     */
    public $country;

    /**
     * @example 20231018
     *
     * @var string
     */
    public $expiryDate;

    /**
     * @example 231018
     *
     * @var string
     */
    public $expiryDay;

    /**
     * @example 20131019
     *
     * @var string
     */
    public $issueDate;

    /**
     * @var string
     */
    public $issuePlace;

    /**
     * @var string
     */
    public $issuePlaceRaw;

    /**
     * @example POCHNLI<<SI<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
     *
     * @var string
     */
    public $lineOne;

    /**
     * @example E203545580CHN8610304M2305019MNPELOLIOKLPA938
     *
     * @var string
     */
    public $lineZero;

    /**
     * @example LI.SI
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nameChinese;

    /**
     * @var string
     */
    public $nameChineseRaw;

    /**
     * @example E20354xxxx
     *
     * @var string
     */
    public $passportNo;

    /**
     * @example MNPELOLIOKLPA9
     *
     * @var string
     */
    public $personId;

    /**
     * @example F
     *
     * @var string
     */
    public $sex;

    /**
     * @example CHN
     *
     * @var string
     */
    public $sourceCountry;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example P0
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'authority'      => 'Authority',
        'birthDate'      => 'BirthDate',
        'birthDay'       => 'BirthDay',
        'birthPlace'     => 'BirthPlace',
        'birthPlaceRaw'  => 'BirthPlaceRaw',
        'country'        => 'Country',
        'expiryDate'     => 'ExpiryDate',
        'expiryDay'      => 'ExpiryDay',
        'issueDate'      => 'IssueDate',
        'issuePlace'     => 'IssuePlace',
        'issuePlaceRaw'  => 'IssuePlaceRaw',
        'lineOne'        => 'LineOne',
        'lineZero'       => 'LineZero',
        'name'           => 'Name',
        'nameChinese'    => 'NameChinese',
        'nameChineseRaw' => 'NameChineseRaw',
        'passportNo'     => 'PassportNo',
        'personId'       => 'PersonId',
        'sex'            => 'Sex',
        'sourceCountry'  => 'SourceCountry',
        'success'        => 'Success',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authority) {
            $res['Authority'] = $this->authority;
        }
        if (null !== $this->birthDate) {
            $res['BirthDate'] = $this->birthDate;
        }
        if (null !== $this->birthDay) {
            $res['BirthDay'] = $this->birthDay;
        }
        if (null !== $this->birthPlace) {
            $res['BirthPlace'] = $this->birthPlace;
        }
        if (null !== $this->birthPlaceRaw) {
            $res['BirthPlaceRaw'] = $this->birthPlaceRaw;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->expiryDate) {
            $res['ExpiryDate'] = $this->expiryDate;
        }
        if (null !== $this->expiryDay) {
            $res['ExpiryDay'] = $this->expiryDay;
        }
        if (null !== $this->issueDate) {
            $res['IssueDate'] = $this->issueDate;
        }
        if (null !== $this->issuePlace) {
            $res['IssuePlace'] = $this->issuePlace;
        }
        if (null !== $this->issuePlaceRaw) {
            $res['IssuePlaceRaw'] = $this->issuePlaceRaw;
        }
        if (null !== $this->lineOne) {
            $res['LineOne'] = $this->lineOne;
        }
        if (null !== $this->lineZero) {
            $res['LineZero'] = $this->lineZero;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nameChinese) {
            $res['NameChinese'] = $this->nameChinese;
        }
        if (null !== $this->nameChineseRaw) {
            $res['NameChineseRaw'] = $this->nameChineseRaw;
        }
        if (null !== $this->passportNo) {
            $res['PassportNo'] = $this->passportNo;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->sex) {
            $res['Sex'] = $this->sex;
        }
        if (null !== $this->sourceCountry) {
            $res['SourceCountry'] = $this->sourceCountry;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Authority'])) {
            $model->authority = $map['Authority'];
        }
        if (isset($map['BirthDate'])) {
            $model->birthDate = $map['BirthDate'];
        }
        if (isset($map['BirthDay'])) {
            $model->birthDay = $map['BirthDay'];
        }
        if (isset($map['BirthPlace'])) {
            $model->birthPlace = $map['BirthPlace'];
        }
        if (isset($map['BirthPlaceRaw'])) {
            $model->birthPlaceRaw = $map['BirthPlaceRaw'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['ExpiryDate'])) {
            $model->expiryDate = $map['ExpiryDate'];
        }
        if (isset($map['ExpiryDay'])) {
            $model->expiryDay = $map['ExpiryDay'];
        }
        if (isset($map['IssueDate'])) {
            $model->issueDate = $map['IssueDate'];
        }
        if (isset($map['IssuePlace'])) {
            $model->issuePlace = $map['IssuePlace'];
        }
        if (isset($map['IssuePlaceRaw'])) {
            $model->issuePlaceRaw = $map['IssuePlaceRaw'];
        }
        if (isset($map['LineOne'])) {
            $model->lineOne = $map['LineOne'];
        }
        if (isset($map['LineZero'])) {
            $model->lineZero = $map['LineZero'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NameChinese'])) {
            $model->nameChinese = $map['NameChinese'];
        }
        if (isset($map['NameChineseRaw'])) {
            $model->nameChineseRaw = $map['NameChineseRaw'];
        }
        if (isset($map['PassportNo'])) {
            $model->passportNo = $map['PassportNo'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['Sex'])) {
            $model->sex = $map['Sex'];
        }
        if (isset($map['SourceCountry'])) {
            $model->sourceCountry = $map['SourceCountry'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
