<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetFaceModelResultResponseBody\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var float
     */
    public $rightBottomY;

    /**
     * @var string
     */
    public $hairColorReliability;

    /**
     * @var int
     */
    public $hairColor;

    /**
     * @var string
     */
    public $faceStyle;

    /**
     * @var string
     */
    public $glassStyleReliability;

    /**
     * @var string
     */
    public $mustacheStyleReliability;

    /**
     * @var string
     */
    public $respiratorColorReliability;

    /**
     * @var float
     */
    public $rightBottomX;

    /**
     * @var int
     */
    public $ageUpLimit;

    /**
     * @var string
     */
    public $ageUpLimitReliability;

    /**
     * @var int
     */
    public $hairStyle;

    /**
     * @var int
     */
    public $ageLowerLimit;

    /**
     * @var float
     */
    public $leftTopY;

    /**
     * @var float[]
     */
    public $featureData;

    /**
     * @var string
     */
    public $skinColorReliability;

    /**
     * @var int
     */
    public $capColor;

    /**
     * @var string
     */
    public $faceStyleReliability;

    /**
     * @var string
     */
    public $capStyleReliability;

    /**
     * @var string
     */
    public $genderCodeReliability;

    /**
     * @var string
     */
    public $hairStyleReliability;

    /**
     * @var string
     */
    public $glassColorReliability;

    /**
     * @var int
     */
    public $ethicCode;

    /**
     * @var int
     */
    public $respiratorColor;

    /**
     * @var string
     */
    public $mustacheStyle;

    /**
     * @var int
     */
    public $glassColor;

    /**
     * @var int
     */
    public $glassStyle;

    /**
     * @var int
     */
    public $skinColor;

    /**
     * @var string
     */
    public $capColorReliability;

    /**
     * @var int
     */
    public $capStyle;

    /**
     * @var int
     */
    public $genderCode;

    /**
     * @var float
     */
    public $leftTopX;

    /**
     * @var string
     */
    public $ageLowerLimitReliability;

    /**
     * @var string
     */
    public $ethicCodeReliability;
    protected $_name = [
        'rightBottomY'               => 'RightBottomY',
        'hairColorReliability'       => 'HairColorReliability',
        'hairColor'                  => 'HairColor',
        'faceStyle'                  => 'FaceStyle',
        'glassStyleReliability'      => 'GlassStyleReliability',
        'mustacheStyleReliability'   => 'MustacheStyleReliability',
        'respiratorColorReliability' => 'RespiratorColorReliability',
        'rightBottomX'               => 'RightBottomX',
        'ageUpLimit'                 => 'AgeUpLimit',
        'ageUpLimitReliability'      => 'AgeUpLimitReliability',
        'hairStyle'                  => 'HairStyle',
        'ageLowerLimit'              => 'AgeLowerLimit',
        'leftTopY'                   => 'LeftTopY',
        'featureData'                => 'FeatureData',
        'skinColorReliability'       => 'SkinColorReliability',
        'capColor'                   => 'CapColor',
        'faceStyleReliability'       => 'FaceStyleReliability',
        'capStyleReliability'        => 'CapStyleReliability',
        'genderCodeReliability'      => 'GenderCodeReliability',
        'hairStyleReliability'       => 'HairStyleReliability',
        'glassColorReliability'      => 'GlassColorReliability',
        'ethicCode'                  => 'EthicCode',
        'respiratorColor'            => 'RespiratorColor',
        'mustacheStyle'              => 'MustacheStyle',
        'glassColor'                 => 'GlassColor',
        'glassStyle'                 => 'GlassStyle',
        'skinColor'                  => 'SkinColor',
        'capColorReliability'        => 'CapColorReliability',
        'capStyle'                   => 'CapStyle',
        'genderCode'                 => 'GenderCode',
        'leftTopX'                   => 'LeftTopX',
        'ageLowerLimitReliability'   => 'AgeLowerLimitReliability',
        'ethicCodeReliability'       => 'EthicCodeReliability',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rightBottomY) {
            $res['RightBottomY'] = $this->rightBottomY;
        }
        if (null !== $this->hairColorReliability) {
            $res['HairColorReliability'] = $this->hairColorReliability;
        }
        if (null !== $this->hairColor) {
            $res['HairColor'] = $this->hairColor;
        }
        if (null !== $this->faceStyle) {
            $res['FaceStyle'] = $this->faceStyle;
        }
        if (null !== $this->glassStyleReliability) {
            $res['GlassStyleReliability'] = $this->glassStyleReliability;
        }
        if (null !== $this->mustacheStyleReliability) {
            $res['MustacheStyleReliability'] = $this->mustacheStyleReliability;
        }
        if (null !== $this->respiratorColorReliability) {
            $res['RespiratorColorReliability'] = $this->respiratorColorReliability;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->ageUpLimit) {
            $res['AgeUpLimit'] = $this->ageUpLimit;
        }
        if (null !== $this->ageUpLimitReliability) {
            $res['AgeUpLimitReliability'] = $this->ageUpLimitReliability;
        }
        if (null !== $this->hairStyle) {
            $res['HairStyle'] = $this->hairStyle;
        }
        if (null !== $this->ageLowerLimit) {
            $res['AgeLowerLimit'] = $this->ageLowerLimit;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->featureData) {
            $res['FeatureData'] = $this->featureData;
        }
        if (null !== $this->skinColorReliability) {
            $res['SkinColorReliability'] = $this->skinColorReliability;
        }
        if (null !== $this->capColor) {
            $res['CapColor'] = $this->capColor;
        }
        if (null !== $this->faceStyleReliability) {
            $res['FaceStyleReliability'] = $this->faceStyleReliability;
        }
        if (null !== $this->capStyleReliability) {
            $res['CapStyleReliability'] = $this->capStyleReliability;
        }
        if (null !== $this->genderCodeReliability) {
            $res['GenderCodeReliability'] = $this->genderCodeReliability;
        }
        if (null !== $this->hairStyleReliability) {
            $res['HairStyleReliability'] = $this->hairStyleReliability;
        }
        if (null !== $this->glassColorReliability) {
            $res['GlassColorReliability'] = $this->glassColorReliability;
        }
        if (null !== $this->ethicCode) {
            $res['EthicCode'] = $this->ethicCode;
        }
        if (null !== $this->respiratorColor) {
            $res['RespiratorColor'] = $this->respiratorColor;
        }
        if (null !== $this->mustacheStyle) {
            $res['MustacheStyle'] = $this->mustacheStyle;
        }
        if (null !== $this->glassColor) {
            $res['GlassColor'] = $this->glassColor;
        }
        if (null !== $this->glassStyle) {
            $res['GlassStyle'] = $this->glassStyle;
        }
        if (null !== $this->skinColor) {
            $res['SkinColor'] = $this->skinColor;
        }
        if (null !== $this->capColorReliability) {
            $res['CapColorReliability'] = $this->capColorReliability;
        }
        if (null !== $this->capStyle) {
            $res['CapStyle'] = $this->capStyle;
        }
        if (null !== $this->genderCode) {
            $res['GenderCode'] = $this->genderCode;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->ageLowerLimitReliability) {
            $res['AgeLowerLimitReliability'] = $this->ageLowerLimitReliability;
        }
        if (null !== $this->ethicCodeReliability) {
            $res['EthicCodeReliability'] = $this->ethicCodeReliability;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RightBottomY'])) {
            $model->rightBottomY = $map['RightBottomY'];
        }
        if (isset($map['HairColorReliability'])) {
            $model->hairColorReliability = $map['HairColorReliability'];
        }
        if (isset($map['HairColor'])) {
            $model->hairColor = $map['HairColor'];
        }
        if (isset($map['FaceStyle'])) {
            $model->faceStyle = $map['FaceStyle'];
        }
        if (isset($map['GlassStyleReliability'])) {
            $model->glassStyleReliability = $map['GlassStyleReliability'];
        }
        if (isset($map['MustacheStyleReliability'])) {
            $model->mustacheStyleReliability = $map['MustacheStyleReliability'];
        }
        if (isset($map['RespiratorColorReliability'])) {
            $model->respiratorColorReliability = $map['RespiratorColorReliability'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['AgeUpLimit'])) {
            $model->ageUpLimit = $map['AgeUpLimit'];
        }
        if (isset($map['AgeUpLimitReliability'])) {
            $model->ageUpLimitReliability = $map['AgeUpLimitReliability'];
        }
        if (isset($map['HairStyle'])) {
            $model->hairStyle = $map['HairStyle'];
        }
        if (isset($map['AgeLowerLimit'])) {
            $model->ageLowerLimit = $map['AgeLowerLimit'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['FeatureData'])) {
            if (!empty($map['FeatureData'])) {
                $model->featureData = $map['FeatureData'];
            }
        }
        if (isset($map['SkinColorReliability'])) {
            $model->skinColorReliability = $map['SkinColorReliability'];
        }
        if (isset($map['CapColor'])) {
            $model->capColor = $map['CapColor'];
        }
        if (isset($map['FaceStyleReliability'])) {
            $model->faceStyleReliability = $map['FaceStyleReliability'];
        }
        if (isset($map['CapStyleReliability'])) {
            $model->capStyleReliability = $map['CapStyleReliability'];
        }
        if (isset($map['GenderCodeReliability'])) {
            $model->genderCodeReliability = $map['GenderCodeReliability'];
        }
        if (isset($map['HairStyleReliability'])) {
            $model->hairStyleReliability = $map['HairStyleReliability'];
        }
        if (isset($map['GlassColorReliability'])) {
            $model->glassColorReliability = $map['GlassColorReliability'];
        }
        if (isset($map['EthicCode'])) {
            $model->ethicCode = $map['EthicCode'];
        }
        if (isset($map['RespiratorColor'])) {
            $model->respiratorColor = $map['RespiratorColor'];
        }
        if (isset($map['MustacheStyle'])) {
            $model->mustacheStyle = $map['MustacheStyle'];
        }
        if (isset($map['GlassColor'])) {
            $model->glassColor = $map['GlassColor'];
        }
        if (isset($map['GlassStyle'])) {
            $model->glassStyle = $map['GlassStyle'];
        }
        if (isset($map['SkinColor'])) {
            $model->skinColor = $map['SkinColor'];
        }
        if (isset($map['CapColorReliability'])) {
            $model->capColorReliability = $map['CapColorReliability'];
        }
        if (isset($map['CapStyle'])) {
            $model->capStyle = $map['CapStyle'];
        }
        if (isset($map['GenderCode'])) {
            $model->genderCode = $map['GenderCode'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }
        if (isset($map['AgeLowerLimitReliability'])) {
            $model->ageLowerLimitReliability = $map['AgeLowerLimitReliability'];
        }
        if (isset($map['EthicCodeReliability'])) {
            $model->ethicCodeReliability = $map['EthicCodeReliability'];
        }

        return $model;
    }
}
