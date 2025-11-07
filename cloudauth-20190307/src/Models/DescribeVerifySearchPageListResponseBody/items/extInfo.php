<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifySearchPageListResponseBody\items;

use AlibabaCloud\Dara\Model;

class extInfo extends Model
{
    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $deviceRisk;

    /**
     * @var string
     */
    public $faceAttack;

    /**
     * @var float
     */
    public $faceAttackScore;

    /**
     * @var string
     */
    public $faceOcclusion;

    /**
     * @var float
     */
    public $idCardVerifyScore;

    /**
     * @var string
     */
    public $ossBucketName;

    /**
     * @var string
     */
    public $ossIdFaceObjectName;

    /**
     * @var string
     */
    public $ossIdNationalEmblemObjectName;

    /**
     * @var string
     */
    public $ossObjectName;

    /**
     * @var float
     */
    public $qualityScore;

    /**
     * @var float
     */
    public $verifyScore;

    /**
     * @var string[]
     */
    public $asrTexts;

    /**
     * @var string[]
     */
    public $screenVideoObjectNames;

    /**
     * @var string[]
     */
    public $voiceObjectNames;
    protected $_name = [
        'certName' => 'CertName',
        'deviceRisk' => 'DeviceRisk',
        'faceAttack' => 'FaceAttack',
        'faceAttackScore' => 'FaceAttackScore',
        'faceOcclusion' => 'FaceOcclusion',
        'idCardVerifyScore' => 'IdCardVerifyScore',
        'ossBucketName' => 'OssBucketName',
        'ossIdFaceObjectName' => 'OssIdFaceObjectName',
        'ossIdNationalEmblemObjectName' => 'OssIdNationalEmblemObjectName',
        'ossObjectName' => 'OssObjectName',
        'qualityScore' => 'QualityScore',
        'verifyScore' => 'VerifyScore',
        'asrTexts' => 'asrTexts',
        'screenVideoObjectNames' => 'screenVideoObjectNames',
        'voiceObjectNames' => 'voiceObjectNames',
    ];

    public function validate()
    {
        if (\is_array($this->asrTexts)) {
            Model::validateArray($this->asrTexts);
        }
        if (\is_array($this->screenVideoObjectNames)) {
            Model::validateArray($this->screenVideoObjectNames);
        }
        if (\is_array($this->voiceObjectNames)) {
            Model::validateArray($this->voiceObjectNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }

        if (null !== $this->deviceRisk) {
            $res['DeviceRisk'] = $this->deviceRisk;
        }

        if (null !== $this->faceAttack) {
            $res['FaceAttack'] = $this->faceAttack;
        }

        if (null !== $this->faceAttackScore) {
            $res['FaceAttackScore'] = $this->faceAttackScore;
        }

        if (null !== $this->faceOcclusion) {
            $res['FaceOcclusion'] = $this->faceOcclusion;
        }

        if (null !== $this->idCardVerifyScore) {
            $res['IdCardVerifyScore'] = $this->idCardVerifyScore;
        }

        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }

        if (null !== $this->ossIdFaceObjectName) {
            $res['OssIdFaceObjectName'] = $this->ossIdFaceObjectName;
        }

        if (null !== $this->ossIdNationalEmblemObjectName) {
            $res['OssIdNationalEmblemObjectName'] = $this->ossIdNationalEmblemObjectName;
        }

        if (null !== $this->ossObjectName) {
            $res['OssObjectName'] = $this->ossObjectName;
        }

        if (null !== $this->qualityScore) {
            $res['QualityScore'] = $this->qualityScore;
        }

        if (null !== $this->verifyScore) {
            $res['VerifyScore'] = $this->verifyScore;
        }

        if (null !== $this->asrTexts) {
            if (\is_array($this->asrTexts)) {
                $res['asrTexts'] = [];
                $n1 = 0;
                foreach ($this->asrTexts as $item1) {
                    $res['asrTexts'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->screenVideoObjectNames) {
            if (\is_array($this->screenVideoObjectNames)) {
                $res['screenVideoObjectNames'] = [];
                $n1 = 0;
                foreach ($this->screenVideoObjectNames as $item1) {
                    $res['screenVideoObjectNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->voiceObjectNames) {
            if (\is_array($this->voiceObjectNames)) {
                $res['voiceObjectNames'] = [];
                $n1 = 0;
                foreach ($this->voiceObjectNames as $item1) {
                    $res['voiceObjectNames'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }

        if (isset($map['DeviceRisk'])) {
            $model->deviceRisk = $map['DeviceRisk'];
        }

        if (isset($map['FaceAttack'])) {
            $model->faceAttack = $map['FaceAttack'];
        }

        if (isset($map['FaceAttackScore'])) {
            $model->faceAttackScore = $map['FaceAttackScore'];
        }

        if (isset($map['FaceOcclusion'])) {
            $model->faceOcclusion = $map['FaceOcclusion'];
        }

        if (isset($map['IdCardVerifyScore'])) {
            $model->idCardVerifyScore = $map['IdCardVerifyScore'];
        }

        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }

        if (isset($map['OssIdFaceObjectName'])) {
            $model->ossIdFaceObjectName = $map['OssIdFaceObjectName'];
        }

        if (isset($map['OssIdNationalEmblemObjectName'])) {
            $model->ossIdNationalEmblemObjectName = $map['OssIdNationalEmblemObjectName'];
        }

        if (isset($map['OssObjectName'])) {
            $model->ossObjectName = $map['OssObjectName'];
        }

        if (isset($map['QualityScore'])) {
            $model->qualityScore = $map['QualityScore'];
        }

        if (isset($map['VerifyScore'])) {
            $model->verifyScore = $map['VerifyScore'];
        }

        if (isset($map['asrTexts'])) {
            if (!empty($map['asrTexts'])) {
                $model->asrTexts = [];
                $n1 = 0;
                foreach ($map['asrTexts'] as $item1) {
                    $model->asrTexts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['screenVideoObjectNames'])) {
            if (!empty($map['screenVideoObjectNames'])) {
                $model->screenVideoObjectNames = [];
                $n1 = 0;
                foreach ($map['screenVideoObjectNames'] as $item1) {
                    $model->screenVideoObjectNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['voiceObjectNames'])) {
            if (!empty($map['voiceObjectNames'])) {
                $model->voiceObjectNames = [];
                $n1 = 0;
                foreach ($map['voiceObjectNames'] as $item1) {
                    $model->voiceObjectNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
