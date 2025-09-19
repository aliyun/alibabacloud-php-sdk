<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Dara\Model;

class InitializeRequest extends Model
{
    /**
     * @var string
     */
    public $appQualityCheck;

    /**
     * @var string
     */
    public $authorize;

    /**
     * @var string
     */
    public $autoRegistration;

    /**
     * @var string
     */
    public $callbackToken;

    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var string
     */
    public $chameleonFrameEnable;

    /**
     * @var string
     */
    public $crop;

    /**
     * @var string
     */
    public $dateOfBirth;

    /**
     * @var string
     */
    public $dateOfExpiry;

    /**
     * @var string
     */
    public $docName;

    /**
     * @var string
     */
    public $docNo;

    /**
     * @var string[]
     */
    public $docPageConfig;

    /**
     * @var string
     */
    public $docScanMode;

    /**
     * @var string
     */
    public $docType;

    /**
     * @var string
     */
    public $docVideo;

    /**
     * @var string
     */
    public $documentNumber;

    /**
     * @var string
     */
    public $editOcrResult;

    /**
     * @var string
     */
    public $experienceCode;

    /**
     * @var string
     */
    public $faceGroupCodes;

    /**
     * @var string
     */
    public $facePictureBase64;

    /**
     * @var string
     */
    public $facePictureUrl;

    /**
     * @var string
     */
    public $faceRegisterGroupCode;

    /**
     * @var string
     */
    public $faceVerifyThreshold;

    /**
     * @var string
     */
    public $idFaceQuality;

    /**
     * @var string
     */
    public $idSpoof;

    /**
     * @var string
     */
    public $idThreshold;

    /**
     * @var string
     */
    public $languageConfig;

    /**
     * @var string
     */
    public $MRTDInput;

    /**
     * @var string
     */
    public $merchantBizId;

    /**
     * @var string
     */
    public $merchantUserId;

    /**
     * @var string
     */
    public $metaInfo;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $ocr;

    /**
     * @var string
     */
    public $pages;

    /**
     * @var string
     */
    public $procedurePriority;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productFlow;

    /**
     * @var string
     */
    public $returnFaces;

    /**
     * @var string
     */
    public $returnUrl;

    /**
     * @var string
     */
    public $saveFacePicture;

    /**
     * @var string
     */
    public $sceneCode;

    /**
     * @var string
     */
    public $securityLevel;

    /**
     * @var string
     */
    public $showAlbumIcon;

    /**
     * @var string
     */
    public $showGuidePage;

    /**
     * @var string
     */
    public $showOcrResult;

    /**
     * @var string
     */
    public $styleConfig;

    /**
     * @var string
     */
    public $targetFacePicture;

    /**
     * @var string
     */
    public $targetFacePictureUrl;

    /**
     * @var string
     */
    public $useNFC;

    /**
     * @var string
     */
    public $verifyModel;
    protected $_name = [
        'appQualityCheck' => 'AppQualityCheck',
        'authorize' => 'Authorize',
        'autoRegistration' => 'AutoRegistration',
        'callbackToken' => 'CallbackToken',
        'callbackUrl' => 'CallbackUrl',
        'chameleonFrameEnable' => 'ChameleonFrameEnable',
        'crop' => 'Crop',
        'dateOfBirth' => 'DateOfBirth',
        'dateOfExpiry' => 'DateOfExpiry',
        'docName' => 'DocName',
        'docNo' => 'DocNo',
        'docPageConfig' => 'DocPageConfig',
        'docScanMode' => 'DocScanMode',
        'docType' => 'DocType',
        'docVideo' => 'DocVideo',
        'documentNumber' => 'DocumentNumber',
        'editOcrResult' => 'EditOcrResult',
        'experienceCode' => 'ExperienceCode',
        'faceGroupCodes' => 'FaceGroupCodes',
        'facePictureBase64' => 'FacePictureBase64',
        'facePictureUrl' => 'FacePictureUrl',
        'faceRegisterGroupCode' => 'FaceRegisterGroupCode',
        'faceVerifyThreshold' => 'FaceVerifyThreshold',
        'idFaceQuality' => 'IdFaceQuality',
        'idSpoof' => 'IdSpoof',
        'idThreshold' => 'IdThreshold',
        'languageConfig' => 'LanguageConfig',
        'MRTDInput' => 'MRTDInput',
        'merchantBizId' => 'MerchantBizId',
        'merchantUserId' => 'MerchantUserId',
        'metaInfo' => 'MetaInfo',
        'model' => 'Model',
        'ocr' => 'Ocr',
        'pages' => 'Pages',
        'procedurePriority' => 'ProcedurePriority',
        'productCode' => 'ProductCode',
        'productFlow' => 'ProductFlow',
        'returnFaces' => 'ReturnFaces',
        'returnUrl' => 'ReturnUrl',
        'saveFacePicture' => 'SaveFacePicture',
        'sceneCode' => 'SceneCode',
        'securityLevel' => 'SecurityLevel',
        'showAlbumIcon' => 'ShowAlbumIcon',
        'showGuidePage' => 'ShowGuidePage',
        'showOcrResult' => 'ShowOcrResult',
        'styleConfig' => 'StyleConfig',
        'targetFacePicture' => 'TargetFacePicture',
        'targetFacePictureUrl' => 'TargetFacePictureUrl',
        'useNFC' => 'UseNFC',
        'verifyModel' => 'VerifyModel',
    ];

    public function validate()
    {
        if (\is_array($this->docPageConfig)) {
            Model::validateArray($this->docPageConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appQualityCheck) {
            $res['AppQualityCheck'] = $this->appQualityCheck;
        }

        if (null !== $this->authorize) {
            $res['Authorize'] = $this->authorize;
        }

        if (null !== $this->autoRegistration) {
            $res['AutoRegistration'] = $this->autoRegistration;
        }

        if (null !== $this->callbackToken) {
            $res['CallbackToken'] = $this->callbackToken;
        }

        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }

        if (null !== $this->chameleonFrameEnable) {
            $res['ChameleonFrameEnable'] = $this->chameleonFrameEnable;
        }

        if (null !== $this->crop) {
            $res['Crop'] = $this->crop;
        }

        if (null !== $this->dateOfBirth) {
            $res['DateOfBirth'] = $this->dateOfBirth;
        }

        if (null !== $this->dateOfExpiry) {
            $res['DateOfExpiry'] = $this->dateOfExpiry;
        }

        if (null !== $this->docName) {
            $res['DocName'] = $this->docName;
        }

        if (null !== $this->docNo) {
            $res['DocNo'] = $this->docNo;
        }

        if (null !== $this->docPageConfig) {
            if (\is_array($this->docPageConfig)) {
                $res['DocPageConfig'] = [];
                $n1 = 0;
                foreach ($this->docPageConfig as $item1) {
                    $res['DocPageConfig'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->docScanMode) {
            $res['DocScanMode'] = $this->docScanMode;
        }

        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }

        if (null !== $this->docVideo) {
            $res['DocVideo'] = $this->docVideo;
        }

        if (null !== $this->documentNumber) {
            $res['DocumentNumber'] = $this->documentNumber;
        }

        if (null !== $this->editOcrResult) {
            $res['EditOcrResult'] = $this->editOcrResult;
        }

        if (null !== $this->experienceCode) {
            $res['ExperienceCode'] = $this->experienceCode;
        }

        if (null !== $this->faceGroupCodes) {
            $res['FaceGroupCodes'] = $this->faceGroupCodes;
        }

        if (null !== $this->facePictureBase64) {
            $res['FacePictureBase64'] = $this->facePictureBase64;
        }

        if (null !== $this->facePictureUrl) {
            $res['FacePictureUrl'] = $this->facePictureUrl;
        }

        if (null !== $this->faceRegisterGroupCode) {
            $res['FaceRegisterGroupCode'] = $this->faceRegisterGroupCode;
        }

        if (null !== $this->faceVerifyThreshold) {
            $res['FaceVerifyThreshold'] = $this->faceVerifyThreshold;
        }

        if (null !== $this->idFaceQuality) {
            $res['IdFaceQuality'] = $this->idFaceQuality;
        }

        if (null !== $this->idSpoof) {
            $res['IdSpoof'] = $this->idSpoof;
        }

        if (null !== $this->idThreshold) {
            $res['IdThreshold'] = $this->idThreshold;
        }

        if (null !== $this->languageConfig) {
            $res['LanguageConfig'] = $this->languageConfig;
        }

        if (null !== $this->MRTDInput) {
            $res['MRTDInput'] = $this->MRTDInput;
        }

        if (null !== $this->merchantBizId) {
            $res['MerchantBizId'] = $this->merchantBizId;
        }

        if (null !== $this->merchantUserId) {
            $res['MerchantUserId'] = $this->merchantUserId;
        }

        if (null !== $this->metaInfo) {
            $res['MetaInfo'] = $this->metaInfo;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->ocr) {
            $res['Ocr'] = $this->ocr;
        }

        if (null !== $this->pages) {
            $res['Pages'] = $this->pages;
        }

        if (null !== $this->procedurePriority) {
            $res['ProcedurePriority'] = $this->procedurePriority;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productFlow) {
            $res['ProductFlow'] = $this->productFlow;
        }

        if (null !== $this->returnFaces) {
            $res['ReturnFaces'] = $this->returnFaces;
        }

        if (null !== $this->returnUrl) {
            $res['ReturnUrl'] = $this->returnUrl;
        }

        if (null !== $this->saveFacePicture) {
            $res['SaveFacePicture'] = $this->saveFacePicture;
        }

        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }

        if (null !== $this->securityLevel) {
            $res['SecurityLevel'] = $this->securityLevel;
        }

        if (null !== $this->showAlbumIcon) {
            $res['ShowAlbumIcon'] = $this->showAlbumIcon;
        }

        if (null !== $this->showGuidePage) {
            $res['ShowGuidePage'] = $this->showGuidePage;
        }

        if (null !== $this->showOcrResult) {
            $res['ShowOcrResult'] = $this->showOcrResult;
        }

        if (null !== $this->styleConfig) {
            $res['StyleConfig'] = $this->styleConfig;
        }

        if (null !== $this->targetFacePicture) {
            $res['TargetFacePicture'] = $this->targetFacePicture;
        }

        if (null !== $this->targetFacePictureUrl) {
            $res['TargetFacePictureUrl'] = $this->targetFacePictureUrl;
        }

        if (null !== $this->useNFC) {
            $res['UseNFC'] = $this->useNFC;
        }

        if (null !== $this->verifyModel) {
            $res['VerifyModel'] = $this->verifyModel;
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
        if (isset($map['AppQualityCheck'])) {
            $model->appQualityCheck = $map['AppQualityCheck'];
        }

        if (isset($map['Authorize'])) {
            $model->authorize = $map['Authorize'];
        }

        if (isset($map['AutoRegistration'])) {
            $model->autoRegistration = $map['AutoRegistration'];
        }

        if (isset($map['CallbackToken'])) {
            $model->callbackToken = $map['CallbackToken'];
        }

        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }

        if (isset($map['ChameleonFrameEnable'])) {
            $model->chameleonFrameEnable = $map['ChameleonFrameEnable'];
        }

        if (isset($map['Crop'])) {
            $model->crop = $map['Crop'];
        }

        if (isset($map['DateOfBirth'])) {
            $model->dateOfBirth = $map['DateOfBirth'];
        }

        if (isset($map['DateOfExpiry'])) {
            $model->dateOfExpiry = $map['DateOfExpiry'];
        }

        if (isset($map['DocName'])) {
            $model->docName = $map['DocName'];
        }

        if (isset($map['DocNo'])) {
            $model->docNo = $map['DocNo'];
        }

        if (isset($map['DocPageConfig'])) {
            if (!empty($map['DocPageConfig'])) {
                $model->docPageConfig = [];
                $n1 = 0;
                foreach ($map['DocPageConfig'] as $item1) {
                    $model->docPageConfig[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DocScanMode'])) {
            $model->docScanMode = $map['DocScanMode'];
        }

        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }

        if (isset($map['DocVideo'])) {
            $model->docVideo = $map['DocVideo'];
        }

        if (isset($map['DocumentNumber'])) {
            $model->documentNumber = $map['DocumentNumber'];
        }

        if (isset($map['EditOcrResult'])) {
            $model->editOcrResult = $map['EditOcrResult'];
        }

        if (isset($map['ExperienceCode'])) {
            $model->experienceCode = $map['ExperienceCode'];
        }

        if (isset($map['FaceGroupCodes'])) {
            $model->faceGroupCodes = $map['FaceGroupCodes'];
        }

        if (isset($map['FacePictureBase64'])) {
            $model->facePictureBase64 = $map['FacePictureBase64'];
        }

        if (isset($map['FacePictureUrl'])) {
            $model->facePictureUrl = $map['FacePictureUrl'];
        }

        if (isset($map['FaceRegisterGroupCode'])) {
            $model->faceRegisterGroupCode = $map['FaceRegisterGroupCode'];
        }

        if (isset($map['FaceVerifyThreshold'])) {
            $model->faceVerifyThreshold = $map['FaceVerifyThreshold'];
        }

        if (isset($map['IdFaceQuality'])) {
            $model->idFaceQuality = $map['IdFaceQuality'];
        }

        if (isset($map['IdSpoof'])) {
            $model->idSpoof = $map['IdSpoof'];
        }

        if (isset($map['IdThreshold'])) {
            $model->idThreshold = $map['IdThreshold'];
        }

        if (isset($map['LanguageConfig'])) {
            $model->languageConfig = $map['LanguageConfig'];
        }

        if (isset($map['MRTDInput'])) {
            $model->MRTDInput = $map['MRTDInput'];
        }

        if (isset($map['MerchantBizId'])) {
            $model->merchantBizId = $map['MerchantBizId'];
        }

        if (isset($map['MerchantUserId'])) {
            $model->merchantUserId = $map['MerchantUserId'];
        }

        if (isset($map['MetaInfo'])) {
            $model->metaInfo = $map['MetaInfo'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['Ocr'])) {
            $model->ocr = $map['Ocr'];
        }

        if (isset($map['Pages'])) {
            $model->pages = $map['Pages'];
        }

        if (isset($map['ProcedurePriority'])) {
            $model->procedurePriority = $map['ProcedurePriority'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductFlow'])) {
            $model->productFlow = $map['ProductFlow'];
        }

        if (isset($map['ReturnFaces'])) {
            $model->returnFaces = $map['ReturnFaces'];
        }

        if (isset($map['ReturnUrl'])) {
            $model->returnUrl = $map['ReturnUrl'];
        }

        if (isset($map['SaveFacePicture'])) {
            $model->saveFacePicture = $map['SaveFacePicture'];
        }

        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }

        if (isset($map['SecurityLevel'])) {
            $model->securityLevel = $map['SecurityLevel'];
        }

        if (isset($map['ShowAlbumIcon'])) {
            $model->showAlbumIcon = $map['ShowAlbumIcon'];
        }

        if (isset($map['ShowGuidePage'])) {
            $model->showGuidePage = $map['ShowGuidePage'];
        }

        if (isset($map['ShowOcrResult'])) {
            $model->showOcrResult = $map['ShowOcrResult'];
        }

        if (isset($map['StyleConfig'])) {
            $model->styleConfig = $map['StyleConfig'];
        }

        if (isset($map['TargetFacePicture'])) {
            $model->targetFacePicture = $map['TargetFacePicture'];
        }

        if (isset($map['TargetFacePictureUrl'])) {
            $model->targetFacePictureUrl = $map['TargetFacePictureUrl'];
        }

        if (isset($map['UseNFC'])) {
            $model->useNFC = $map['UseNFC'];
        }

        if (isset($map['VerifyModel'])) {
            $model->verifyModel = $map['VerifyModel'];
        }

        return $model;
    }
}
