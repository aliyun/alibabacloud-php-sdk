<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeChinapassportResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $sex;

    /**
     * @var string
     */
    public $authority;

    /**
     * @var string
     */
    public $issuePlaceRaw;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $lineOne;

    /**
     * @var string
     */
    public $expiryDate;

    /**
     * @var string
     */
    public $birthPlace;

    /**
     * @var string
     */
    public $passportNo;

    /**
     * @var string
     */
    public $birthPlaceRaw;

    /**
     * @var string
     */
    public $issueDate;

    /**
     * @var string
     */
    public $sourceCountry;

    /**
     * @var string
     */
    public $birthDate;

    /**
     * @var string
     */
    public $nameChineseRaw;

    /**
     * @var string
     */
    public $issuePlace;

    /**
     * @var string
     */
    public $nameChinese;

    /**
     * @var string
     */
    public $lineZero;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $birthDay;

    /**
     * @var string
     */
    public $expiryDay;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $personId;
    protected $_name = [
        'type'           => 'Type',
        'sex'            => 'Sex',
        'authority'      => 'Authority',
        'issuePlaceRaw'  => 'IssuePlaceRaw',
        'success'        => 'Success',
        'lineOne'        => 'LineOne',
        'expiryDate'     => 'ExpiryDate',
        'birthPlace'     => 'BirthPlace',
        'passportNo'     => 'PassportNo',
        'birthPlaceRaw'  => 'BirthPlaceRaw',
        'issueDate'      => 'IssueDate',
        'sourceCountry'  => 'SourceCountry',
        'birthDate'      => 'BirthDate',
        'nameChineseRaw' => 'NameChineseRaw',
        'issuePlace'     => 'IssuePlace',
        'nameChinese'    => 'NameChinese',
        'lineZero'       => 'LineZero',
        'country'        => 'Country',
        'birthDay'       => 'BirthDay',
        'expiryDay'      => 'ExpiryDay',
        'name'           => 'Name',
        'personId'       => 'PersonId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->sex) {
            $res['Sex'] = $this->sex;
        }
        if (null !== $this->authority) {
            $res['Authority'] = $this->authority;
        }
        if (null !== $this->issuePlaceRaw) {
            $res['IssuePlaceRaw'] = $this->issuePlaceRaw;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->lineOne) {
            $res['LineOne'] = $this->lineOne;
        }
        if (null !== $this->expiryDate) {
            $res['ExpiryDate'] = $this->expiryDate;
        }
        if (null !== $this->birthPlace) {
            $res['BirthPlace'] = $this->birthPlace;
        }
        if (null !== $this->passportNo) {
            $res['PassportNo'] = $this->passportNo;
        }
        if (null !== $this->birthPlaceRaw) {
            $res['BirthPlaceRaw'] = $this->birthPlaceRaw;
        }
        if (null !== $this->issueDate) {
            $res['IssueDate'] = $this->issueDate;
        }
        if (null !== $this->sourceCountry) {
            $res['SourceCountry'] = $this->sourceCountry;
        }
        if (null !== $this->birthDate) {
            $res['BirthDate'] = $this->birthDate;
        }
        if (null !== $this->nameChineseRaw) {
            $res['NameChineseRaw'] = $this->nameChineseRaw;
        }
        if (null !== $this->issuePlace) {
            $res['IssuePlace'] = $this->issuePlace;
        }
        if (null !== $this->nameChinese) {
            $res['NameChinese'] = $this->nameChinese;
        }
        if (null !== $this->lineZero) {
            $res['LineZero'] = $this->lineZero;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->birthDay) {
            $res['BirthDay'] = $this->birthDay;
        }
        if (null !== $this->expiryDay) {
            $res['ExpiryDay'] = $this->expiryDay;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Sex'])) {
            $model->sex = $map['Sex'];
        }
        if (isset($map['Authority'])) {
            $model->authority = $map['Authority'];
        }
        if (isset($map['IssuePlaceRaw'])) {
            $model->issuePlaceRaw = $map['IssuePlaceRaw'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['LineOne'])) {
            $model->lineOne = $map['LineOne'];
        }
        if (isset($map['ExpiryDate'])) {
            $model->expiryDate = $map['ExpiryDate'];
        }
        if (isset($map['BirthPlace'])) {
            $model->birthPlace = $map['BirthPlace'];
        }
        if (isset($map['PassportNo'])) {
            $model->passportNo = $map['PassportNo'];
        }
        if (isset($map['BirthPlaceRaw'])) {
            $model->birthPlaceRaw = $map['BirthPlaceRaw'];
        }
        if (isset($map['IssueDate'])) {
            $model->issueDate = $map['IssueDate'];
        }
        if (isset($map['SourceCountry'])) {
            $model->sourceCountry = $map['SourceCountry'];
        }
        if (isset($map['BirthDate'])) {
            $model->birthDate = $map['BirthDate'];
        }
        if (isset($map['NameChineseRaw'])) {
            $model->nameChineseRaw = $map['NameChineseRaw'];
        }
        if (isset($map['IssuePlace'])) {
            $model->issuePlace = $map['IssuePlace'];
        }
        if (isset($map['NameChinese'])) {
            $model->nameChinese = $map['NameChinese'];
        }
        if (isset($map['LineZero'])) {
            $model->lineZero = $map['LineZero'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['BirthDay'])) {
            $model->birthDay = $map['BirthDay'];
        }
        if (isset($map['ExpiryDay'])) {
            $model->expiryDay = $map['ExpiryDay'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }

        return $model;
    }
}
