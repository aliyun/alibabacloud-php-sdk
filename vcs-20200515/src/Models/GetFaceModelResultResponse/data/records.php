<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetFaceModelResultResponse\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $mustacheStyle;

    /**
     * @var string
     */
    public $faceStyle;

    /**
     * @var int
     */
    public $capStyle;

    /**
     * @var int
     */
    public $skinColor;

    /**
     * @var float
     */
    public $rightBottomY;

    /**
     * @var float
     */
    public $rightBottomX;

    /**
     * @var int
     */
    public $hairStyle;

    /**
     * @var int
     */
    public $genderCode;

    /**
     * @var int
     */
    public $respiratorColor;

    /**
     * @var int
     */
    public $ethicCode;

    /**
     * @var int
     */
    public $ageLowerLimit;

    /**
     * @var float
     */
    public $leftTopY;

    /**
     * @var float
     */
    public $leftTopX;

    /**
     * @var int
     */
    public $hairColor;

    /**
     * @var int
     */
    public $ageUpLimit;

    /**
     * @var int
     */
    public $glassStyle;

    /**
     * @var int
     */
    public $glassColor;

    /**
     * @var int
     */
    public $capColor;

    /**
     * @var string
     */
    public $capColorReliability;

    /**
     * @var string
     */
    public $respiratorColorReliability;

    /**
     * @var string
     */
    public $ethicCodeReliability;

    /**
     * @var string
     */
    public $genderCodeReliability;

    /**
     * @var string
     */
    public $glassColorReliability;

    /**
     * @var string
     */
    public $skinColorReliability;

    /**
     * @var string
     */
    public $mustacheStyleReliability;

    /**
     * @var string
     */
    public $capStyleReliability;

    /**
     * @var string
     */
    public $faceStyleReliability;

    /**
     * @var string
     */
    public $glassStyleReliability;

    /**
     * @var string
     */
    public $ageUpLimitReliability;

    /**
     * @var string
     */
    public $hairStyleReliability;

    /**
     * @var string
     */
    public $ageLowerLimitReliability;

    /**
     * @var string
     */
    public $hairColorReliability;

    /**
     * @var float[]
     */
    public $featureData;
    protected $_name = [
        'mustacheStyle'              => 'MustacheStyle',
        'faceStyle'                  => 'FaceStyle',
        'capStyle'                   => 'CapStyle',
        'skinColor'                  => 'SkinColor',
        'rightBottomY'               => 'RightBottomY',
        'rightBottomX'               => 'RightBottomX',
        'hairStyle'                  => 'HairStyle',
        'genderCode'                 => 'GenderCode',
        'respiratorColor'            => 'RespiratorColor',
        'ethicCode'                  => 'EthicCode',
        'ageLowerLimit'              => 'AgeLowerLimit',
        'leftTopY'                   => 'LeftTopY',
        'leftTopX'                   => 'LeftTopX',
        'hairColor'                  => 'HairColor',
        'ageUpLimit'                 => 'AgeUpLimit',
        'glassStyle'                 => 'GlassStyle',
        'glassColor'                 => 'GlassColor',
        'capColor'                   => 'CapColor',
        'capColorReliability'        => 'CapColorReliability',
        'respiratorColorReliability' => 'RespiratorColorReliability',
        'ethicCodeReliability'       => 'EthicCodeReliability',
        'genderCodeReliability'      => 'GenderCodeReliability',
        'glassColorReliability'      => 'GlassColorReliability',
        'skinColorReliability'       => 'SkinColorReliability',
        'mustacheStyleReliability'   => 'MustacheStyleReliability',
        'capStyleReliability'        => 'CapStyleReliability',
        'faceStyleReliability'       => 'FaceStyleReliability',
        'glassStyleReliability'      => 'GlassStyleReliability',
        'ageUpLimitReliability'      => 'AgeUpLimitReliability',
        'hairStyleReliability'       => 'HairStyleReliability',
        'ageLowerLimitReliability'   => 'AgeLowerLimitReliability',
        'hairColorReliability'       => 'HairColorReliability',
        'featureData'                => 'FeatureData',
    ];

    public function validate()
    {
        Model::validateRequired('mustacheStyle', $this->mustacheStyle, true);
        Model::validateRequired('faceStyle', $this->faceStyle, true);
        Model::validateRequired('capStyle', $this->capStyle, true);
        Model::validateRequired('skinColor', $this->skinColor, true);
        Model::validateRequired('rightBottomY', $this->rightBottomY, true);
        Model::validateRequired('rightBottomX', $this->rightBottomX, true);
        Model::validateRequired('hairStyle', $this->hairStyle, true);
        Model::validateRequired('genderCode', $this->genderCode, true);
        Model::validateRequired('respiratorColor', $this->respiratorColor, true);
        Model::validateRequired('ethicCode', $this->ethicCode, true);
        Model::validateRequired('ageLowerLimit', $this->ageLowerLimit, true);
        Model::validateRequired('leftTopY', $this->leftTopY, true);
        Model::validateRequired('leftTopX', $this->leftTopX, true);
        Model::validateRequired('hairColor', $this->hairColor, true);
        Model::validateRequired('ageUpLimit', $this->ageUpLimit, true);
        Model::validateRequired('glassStyle', $this->glassStyle, true);
        Model::validateRequired('glassColor', $this->glassColor, true);
        Model::validateRequired('capColor', $this->capColor, true);
        Model::validateRequired('capColorReliability', $this->capColorReliability, true);
        Model::validateRequired('respiratorColorReliability', $this->respiratorColorReliability, true);
        Model::validateRequired('ethicCodeReliability', $this->ethicCodeReliability, true);
        Model::validateRequired('genderCodeReliability', $this->genderCodeReliability, true);
        Model::validateRequired('glassColorReliability', $this->glassColorReliability, true);
        Model::validateRequired('skinColorReliability', $this->skinColorReliability, true);
        Model::validateRequired('mustacheStyleReliability', $this->mustacheStyleReliability, true);
        Model::validateRequired('capStyleReliability', $this->capStyleReliability, true);
        Model::validateRequired('faceStyleReliability', $this->faceStyleReliability, true);
        Model::validateRequired('glassStyleReliability', $this->glassStyleReliability, true);
        Model::validateRequired('ageUpLimitReliability', $this->ageUpLimitReliability, true);
        Model::validateRequired('hairStyleReliability', $this->hairStyleReliability, true);
        Model::validateRequired('ageLowerLimitReliability', $this->ageLowerLimitReliability, true);
        Model::validateRequired('hairColorReliability', $this->hairColorReliability, true);
        Model::validateRequired('featureData', $this->featureData, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mustacheStyle) {
            $res['MustacheStyle'] = $this->mustacheStyle;
        }
        if (null !== $this->faceStyle) {
            $res['FaceStyle'] = $this->faceStyle;
        }
        if (null !== $this->capStyle) {
            $res['CapStyle'] = $this->capStyle;
        }
        if (null !== $this->skinColor) {
            $res['SkinColor'] = $this->skinColor;
        }
        if (null !== $this->rightBottomY) {
            $res['RightBottomY'] = $this->rightBottomY;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->hairStyle) {
            $res['HairStyle'] = $this->hairStyle;
        }
        if (null !== $this->genderCode) {
            $res['GenderCode'] = $this->genderCode;
        }
        if (null !== $this->respiratorColor) {
            $res['RespiratorColor'] = $this->respiratorColor;
        }
        if (null !== $this->ethicCode) {
            $res['EthicCode'] = $this->ethicCode;
        }
        if (null !== $this->ageLowerLimit) {
            $res['AgeLowerLimit'] = $this->ageLowerLimit;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->hairColor) {
            $res['HairColor'] = $this->hairColor;
        }
        if (null !== $this->ageUpLimit) {
            $res['AgeUpLimit'] = $this->ageUpLimit;
        }
        if (null !== $this->glassStyle) {
            $res['GlassStyle'] = $this->glassStyle;
        }
        if (null !== $this->glassColor) {
            $res['GlassColor'] = $this->glassColor;
        }
        if (null !== $this->capColor) {
            $res['CapColor'] = $this->capColor;
        }
        if (null !== $this->capColorReliability) {
            $res['CapColorReliability'] = $this->capColorReliability;
        }
        if (null !== $this->respiratorColorReliability) {
            $res['RespiratorColorReliability'] = $this->respiratorColorReliability;
        }
        if (null !== $this->ethicCodeReliability) {
            $res['EthicCodeReliability'] = $this->ethicCodeReliability;
        }
        if (null !== $this->genderCodeReliability) {
            $res['GenderCodeReliability'] = $this->genderCodeReliability;
        }
        if (null !== $this->glassColorReliability) {
            $res['GlassColorReliability'] = $this->glassColorReliability;
        }
        if (null !== $this->skinColorReliability) {
            $res['SkinColorReliability'] = $this->skinColorReliability;
        }
        if (null !== $this->mustacheStyleReliability) {
            $res['MustacheStyleReliability'] = $this->mustacheStyleReliability;
        }
        if (null !== $this->capStyleReliability) {
            $res['CapStyleReliability'] = $this->capStyleReliability;
        }
        if (null !== $this->faceStyleReliability) {
            $res['FaceStyleReliability'] = $this->faceStyleReliability;
        }
        if (null !== $this->glassStyleReliability) {
            $res['GlassStyleReliability'] = $this->glassStyleReliability;
        }
        if (null !== $this->ageUpLimitReliability) {
            $res['AgeUpLimitReliability'] = $this->ageUpLimitReliability;
        }
        if (null !== $this->hairStyleReliability) {
            $res['HairStyleReliability'] = $this->hairStyleReliability;
        }
        if (null !== $this->ageLowerLimitReliability) {
            $res['AgeLowerLimitReliability'] = $this->ageLowerLimitReliability;
        }
        if (null !== $this->hairColorReliability) {
            $res['HairColorReliability'] = $this->hairColorReliability;
        }
        if (null !== $this->featureData) {
            $res['FeatureData'] = $this->featureData;
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
        if (isset($map['MustacheStyle'])) {
            $model->mustacheStyle = $map['MustacheStyle'];
        }
        if (isset($map['FaceStyle'])) {
            $model->faceStyle = $map['FaceStyle'];
        }
        if (isset($map['CapStyle'])) {
            $model->capStyle = $map['CapStyle'];
        }
        if (isset($map['SkinColor'])) {
            $model->skinColor = $map['SkinColor'];
        }
        if (isset($map['RightBottomY'])) {
            $model->rightBottomY = $map['RightBottomY'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['HairStyle'])) {
            $model->hairStyle = $map['HairStyle'];
        }
        if (isset($map['GenderCode'])) {
            $model->genderCode = $map['GenderCode'];
        }
        if (isset($map['RespiratorColor'])) {
            $model->respiratorColor = $map['RespiratorColor'];
        }
        if (isset($map['EthicCode'])) {
            $model->ethicCode = $map['EthicCode'];
        }
        if (isset($map['AgeLowerLimit'])) {
            $model->ageLowerLimit = $map['AgeLowerLimit'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }
        if (isset($map['HairColor'])) {
            $model->hairColor = $map['HairColor'];
        }
        if (isset($map['AgeUpLimit'])) {
            $model->ageUpLimit = $map['AgeUpLimit'];
        }
        if (isset($map['GlassStyle'])) {
            $model->glassStyle = $map['GlassStyle'];
        }
        if (isset($map['GlassColor'])) {
            $model->glassColor = $map['GlassColor'];
        }
        if (isset($map['CapColor'])) {
            $model->capColor = $map['CapColor'];
        }
        if (isset($map['CapColorReliability'])) {
            $model->capColorReliability = $map['CapColorReliability'];
        }
        if (isset($map['RespiratorColorReliability'])) {
            $model->respiratorColorReliability = $map['RespiratorColorReliability'];
        }
        if (isset($map['EthicCodeReliability'])) {
            $model->ethicCodeReliability = $map['EthicCodeReliability'];
        }
        if (isset($map['GenderCodeReliability'])) {
            $model->genderCodeReliability = $map['GenderCodeReliability'];
        }
        if (isset($map['GlassColorReliability'])) {
            $model->glassColorReliability = $map['GlassColorReliability'];
        }
        if (isset($map['SkinColorReliability'])) {
            $model->skinColorReliability = $map['SkinColorReliability'];
        }
        if (isset($map['MustacheStyleReliability'])) {
            $model->mustacheStyleReliability = $map['MustacheStyleReliability'];
        }
        if (isset($map['CapStyleReliability'])) {
            $model->capStyleReliability = $map['CapStyleReliability'];
        }
        if (isset($map['FaceStyleReliability'])) {
            $model->faceStyleReliability = $map['FaceStyleReliability'];
        }
        if (isset($map['GlassStyleReliability'])) {
            $model->glassStyleReliability = $map['GlassStyleReliability'];
        }
        if (isset($map['AgeUpLimitReliability'])) {
            $model->ageUpLimitReliability = $map['AgeUpLimitReliability'];
        }
        if (isset($map['HairStyleReliability'])) {
            $model->hairStyleReliability = $map['HairStyleReliability'];
        }
        if (isset($map['AgeLowerLimitReliability'])) {
            $model->ageLowerLimitReliability = $map['AgeLowerLimitReliability'];
        }
        if (isset($map['HairColorReliability'])) {
            $model->hairColorReliability = $map['HairColorReliability'];
        }
        if (isset($map['FeatureData'])) {
            if (!empty($map['FeatureData'])) {
                $model->featureData = $map['FeatureData'];
            }
        }

        return $model;
    }
}
