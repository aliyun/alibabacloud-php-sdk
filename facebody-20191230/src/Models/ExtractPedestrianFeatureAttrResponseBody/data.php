<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\ExtractPedestrianFeatureAttrResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $qualityScore;

    /**
     * @var string
     */
    public $objType;

    /**
     * @var string
     */
    public $feature;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var float
     */
    public $lowerColorScore;

    /**
     * @var float
     */
    public $objTypeScore;

    /**
     * @var string
     */
    public $age;

    /**
     * @var float
     */
    public $ageScore;

    /**
     * @var float
     */
    public $upperTypeScore;

    /**
     * @var float
     */
    public $lowerTypeScore;

    /**
     * @var string
     */
    public $lowerColor;

    /**
     * @var string
     */
    public $hair;

    /**
     * @var string
     */
    public $upperColor;

    /**
     * @var float
     */
    public $genderScore;

    /**
     * @var string
     */
    public $upperType;

    /**
     * @var float
     */
    public $hairScore;

    /**
     * @var string
     */
    public $lowerType;

    /**
     * @var float
     */
    public $upperColorScore;
    protected $_name = [
        'qualityScore'    => 'QualityScore',
        'objType'         => 'ObjType',
        'feature'         => 'Feature',
        'gender'          => 'Gender',
        'lowerColorScore' => 'LowerColorScore',
        'objTypeScore'    => 'ObjTypeScore',
        'age'             => 'Age',
        'ageScore'        => 'AgeScore',
        'upperTypeScore'  => 'UpperTypeScore',
        'lowerTypeScore'  => 'LowerTypeScore',
        'lowerColor'      => 'LowerColor',
        'hair'            => 'Hair',
        'upperColor'      => 'UpperColor',
        'genderScore'     => 'GenderScore',
        'upperType'       => 'UpperType',
        'hairScore'       => 'HairScore',
        'lowerType'       => 'LowerType',
        'upperColorScore' => 'UpperColorScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qualityScore) {
            $res['QualityScore'] = $this->qualityScore;
        }
        if (null !== $this->objType) {
            $res['ObjType'] = $this->objType;
        }
        if (null !== $this->feature) {
            $res['Feature'] = $this->feature;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->lowerColorScore) {
            $res['LowerColorScore'] = $this->lowerColorScore;
        }
        if (null !== $this->objTypeScore) {
            $res['ObjTypeScore'] = $this->objTypeScore;
        }
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->ageScore) {
            $res['AgeScore'] = $this->ageScore;
        }
        if (null !== $this->upperTypeScore) {
            $res['UpperTypeScore'] = $this->upperTypeScore;
        }
        if (null !== $this->lowerTypeScore) {
            $res['LowerTypeScore'] = $this->lowerTypeScore;
        }
        if (null !== $this->lowerColor) {
            $res['LowerColor'] = $this->lowerColor;
        }
        if (null !== $this->hair) {
            $res['Hair'] = $this->hair;
        }
        if (null !== $this->upperColor) {
            $res['UpperColor'] = $this->upperColor;
        }
        if (null !== $this->genderScore) {
            $res['GenderScore'] = $this->genderScore;
        }
        if (null !== $this->upperType) {
            $res['UpperType'] = $this->upperType;
        }
        if (null !== $this->hairScore) {
            $res['HairScore'] = $this->hairScore;
        }
        if (null !== $this->lowerType) {
            $res['LowerType'] = $this->lowerType;
        }
        if (null !== $this->upperColorScore) {
            $res['UpperColorScore'] = $this->upperColorScore;
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
        if (isset($map['QualityScore'])) {
            $model->qualityScore = $map['QualityScore'];
        }
        if (isset($map['ObjType'])) {
            $model->objType = $map['ObjType'];
        }
        if (isset($map['Feature'])) {
            $model->feature = $map['Feature'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['LowerColorScore'])) {
            $model->lowerColorScore = $map['LowerColorScore'];
        }
        if (isset($map['ObjTypeScore'])) {
            $model->objTypeScore = $map['ObjTypeScore'];
        }
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['AgeScore'])) {
            $model->ageScore = $map['AgeScore'];
        }
        if (isset($map['UpperTypeScore'])) {
            $model->upperTypeScore = $map['UpperTypeScore'];
        }
        if (isset($map['LowerTypeScore'])) {
            $model->lowerTypeScore = $map['LowerTypeScore'];
        }
        if (isset($map['LowerColor'])) {
            $model->lowerColor = $map['LowerColor'];
        }
        if (isset($map['Hair'])) {
            $model->hair = $map['Hair'];
        }
        if (isset($map['UpperColor'])) {
            $model->upperColor = $map['UpperColor'];
        }
        if (isset($map['GenderScore'])) {
            $model->genderScore = $map['GenderScore'];
        }
        if (isset($map['UpperType'])) {
            $model->upperType = $map['UpperType'];
        }
        if (isset($map['HairScore'])) {
            $model->hairScore = $map['HairScore'];
        }
        if (isset($map['LowerType'])) {
            $model->lowerType = $map['LowerType'];
        }
        if (isset($map['UpperColorScore'])) {
            $model->upperColorScore = $map['UpperColorScore'];
        }

        return $model;
    }
}
