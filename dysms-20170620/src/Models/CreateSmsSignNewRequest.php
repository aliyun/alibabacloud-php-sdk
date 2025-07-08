<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;

class CreateSmsSignNewRequest extends Model
{
    /**
     * @var int
     */
    public $applicationSceneId;

    /**
     * @var string
     */
    public $applySource;

    /**
     * @var string
     */
    public $authorization;

    /**
     * @var string
     */
    public $authorizationEffTime;

    /**
     * @var string
     */
    public $authorizationLetter;

    /**
     * @var bool
     */
    public $authorizationLetterAuditPass;

    /**
     * @var int
     */
    public $authorizationLetterId;

    /**
     * @var string
     */
    public $authorizationLetterName;

    /**
     * @var string
     */
    public $authorizationSignScope;

    /**
     * @var bool
     */
    public $createSignGray;

    /**
     * @var bool
     */
    public $enableAuthorizationLetter;

    /**
     * @var string
     */
    public $extendMessage;

    /**
     * @var string
     */
    public $fileIds;

    /**
     * @var bool
     */
    public $isAuthorizationLetterOCRComplete;

    /**
     * @var bool
     */
    public $isAuthorizationLetterOCRDiff;

    /**
     * @var bool
     */
    public $isSignScopeOCRDiff;

    /**
     * @var string[]
     */
    public $moreData;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $organizationCode;

    /**
     * @var string
     */
    public $ossKeys;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $prodCode;

    /**
     * @var string
     */
    public $proxyAuthorization;

    /**
     * @var int
     */
    public $qualificationId;

    /**
     * @var int
     */
    public $qualificationType;

    /**
     * @var int
     */
    public $qualificationVersion;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $sceneType;

    /**
     * @var int
     */
    public $serviceType;

    /**
     * @var string
     */
    public $signCode;

    /**
     * @var string
     */
    public $signId;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var string
     */
    public $signScopeOCR;

    /**
     * @var bool
     */
    public $signUpgrade;

    /**
     * @var bool
     */
    public $thirdParty;

    /**
     * @var string
     */
    public $userViewFileName;
    protected $_name = [
        'applicationSceneId' => 'ApplicationSceneId',
        'applySource' => 'ApplySource',
        'authorization' => 'Authorization',
        'authorizationEffTime' => 'AuthorizationEffTime',
        'authorizationLetter' => 'AuthorizationLetter',
        'authorizationLetterAuditPass' => 'AuthorizationLetterAuditPass',
        'authorizationLetterId' => 'AuthorizationLetterId',
        'authorizationLetterName' => 'AuthorizationLetterName',
        'authorizationSignScope' => 'AuthorizationSignScope',
        'createSignGray' => 'CreateSignGray',
        'enableAuthorizationLetter' => 'EnableAuthorizationLetter',
        'extendMessage' => 'ExtendMessage',
        'fileIds' => 'FileIds',
        'isAuthorizationLetterOCRComplete' => 'IsAuthorizationLetterOCRComplete',
        'isAuthorizationLetterOCRDiff' => 'IsAuthorizationLetterOCRDiff',
        'isSignScopeOCRDiff' => 'IsSignScopeOCRDiff',
        'moreData' => 'MoreData',
        'orderId' => 'OrderId',
        'organizationCode' => 'OrganizationCode',
        'ossKeys' => 'OssKeys',
        'ownerId' => 'OwnerId',
        'prodCode' => 'ProdCode',
        'proxyAuthorization' => 'ProxyAuthorization',
        'qualificationId' => 'QualificationId',
        'qualificationType' => 'QualificationType',
        'qualificationVersion' => 'QualificationVersion',
        'remark' => 'Remark',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sceneType' => 'SceneType',
        'serviceType' => 'ServiceType',
        'signCode' => 'SignCode',
        'signId' => 'SignId',
        'signName' => 'SignName',
        'signScopeOCR' => 'SignScopeOCR',
        'signUpgrade' => 'SignUpgrade',
        'thirdParty' => 'ThirdParty',
        'userViewFileName' => 'UserViewFileName',
    ];

    public function validate()
    {
        if (\is_array($this->moreData)) {
            Model::validateArray($this->moreData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationSceneId) {
            $res['ApplicationSceneId'] = $this->applicationSceneId;
        }

        if (null !== $this->applySource) {
            $res['ApplySource'] = $this->applySource;
        }

        if (null !== $this->authorization) {
            $res['Authorization'] = $this->authorization;
        }

        if (null !== $this->authorizationEffTime) {
            $res['AuthorizationEffTime'] = $this->authorizationEffTime;
        }

        if (null !== $this->authorizationLetter) {
            $res['AuthorizationLetter'] = $this->authorizationLetter;
        }

        if (null !== $this->authorizationLetterAuditPass) {
            $res['AuthorizationLetterAuditPass'] = $this->authorizationLetterAuditPass;
        }

        if (null !== $this->authorizationLetterId) {
            $res['AuthorizationLetterId'] = $this->authorizationLetterId;
        }

        if (null !== $this->authorizationLetterName) {
            $res['AuthorizationLetterName'] = $this->authorizationLetterName;
        }

        if (null !== $this->authorizationSignScope) {
            $res['AuthorizationSignScope'] = $this->authorizationSignScope;
        }

        if (null !== $this->createSignGray) {
            $res['CreateSignGray'] = $this->createSignGray;
        }

        if (null !== $this->enableAuthorizationLetter) {
            $res['EnableAuthorizationLetter'] = $this->enableAuthorizationLetter;
        }

        if (null !== $this->extendMessage) {
            $res['ExtendMessage'] = $this->extendMessage;
        }

        if (null !== $this->fileIds) {
            $res['FileIds'] = $this->fileIds;
        }

        if (null !== $this->isAuthorizationLetterOCRComplete) {
            $res['IsAuthorizationLetterOCRComplete'] = $this->isAuthorizationLetterOCRComplete;
        }

        if (null !== $this->isAuthorizationLetterOCRDiff) {
            $res['IsAuthorizationLetterOCRDiff'] = $this->isAuthorizationLetterOCRDiff;
        }

        if (null !== $this->isSignScopeOCRDiff) {
            $res['IsSignScopeOCRDiff'] = $this->isSignScopeOCRDiff;
        }

        if (null !== $this->moreData) {
            if (\is_array($this->moreData)) {
                $res['MoreData'] = [];
                $n1 = 0;
                foreach ($this->moreData as $item1) {
                    $res['MoreData'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->organizationCode) {
            $res['OrganizationCode'] = $this->organizationCode;
        }

        if (null !== $this->ossKeys) {
            $res['OssKeys'] = $this->ossKeys;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }

        if (null !== $this->proxyAuthorization) {
            $res['ProxyAuthorization'] = $this->proxyAuthorization;
        }

        if (null !== $this->qualificationId) {
            $res['QualificationId'] = $this->qualificationId;
        }

        if (null !== $this->qualificationType) {
            $res['QualificationType'] = $this->qualificationType;
        }

        if (null !== $this->qualificationVersion) {
            $res['QualificationVersion'] = $this->qualificationVersion;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->sceneType) {
            $res['SceneType'] = $this->sceneType;
        }

        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        if (null !== $this->signCode) {
            $res['SignCode'] = $this->signCode;
        }

        if (null !== $this->signId) {
            $res['SignId'] = $this->signId;
        }

        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }

        if (null !== $this->signScopeOCR) {
            $res['SignScopeOCR'] = $this->signScopeOCR;
        }

        if (null !== $this->signUpgrade) {
            $res['SignUpgrade'] = $this->signUpgrade;
        }

        if (null !== $this->thirdParty) {
            $res['ThirdParty'] = $this->thirdParty;
        }

        if (null !== $this->userViewFileName) {
            $res['UserViewFileName'] = $this->userViewFileName;
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
        if (isset($map['ApplicationSceneId'])) {
            $model->applicationSceneId = $map['ApplicationSceneId'];
        }

        if (isset($map['ApplySource'])) {
            $model->applySource = $map['ApplySource'];
        }

        if (isset($map['Authorization'])) {
            $model->authorization = $map['Authorization'];
        }

        if (isset($map['AuthorizationEffTime'])) {
            $model->authorizationEffTime = $map['AuthorizationEffTime'];
        }

        if (isset($map['AuthorizationLetter'])) {
            $model->authorizationLetter = $map['AuthorizationLetter'];
        }

        if (isset($map['AuthorizationLetterAuditPass'])) {
            $model->authorizationLetterAuditPass = $map['AuthorizationLetterAuditPass'];
        }

        if (isset($map['AuthorizationLetterId'])) {
            $model->authorizationLetterId = $map['AuthorizationLetterId'];
        }

        if (isset($map['AuthorizationLetterName'])) {
            $model->authorizationLetterName = $map['AuthorizationLetterName'];
        }

        if (isset($map['AuthorizationSignScope'])) {
            $model->authorizationSignScope = $map['AuthorizationSignScope'];
        }

        if (isset($map['CreateSignGray'])) {
            $model->createSignGray = $map['CreateSignGray'];
        }

        if (isset($map['EnableAuthorizationLetter'])) {
            $model->enableAuthorizationLetter = $map['EnableAuthorizationLetter'];
        }

        if (isset($map['ExtendMessage'])) {
            $model->extendMessage = $map['ExtendMessage'];
        }

        if (isset($map['FileIds'])) {
            $model->fileIds = $map['FileIds'];
        }

        if (isset($map['IsAuthorizationLetterOCRComplete'])) {
            $model->isAuthorizationLetterOCRComplete = $map['IsAuthorizationLetterOCRComplete'];
        }

        if (isset($map['IsAuthorizationLetterOCRDiff'])) {
            $model->isAuthorizationLetterOCRDiff = $map['IsAuthorizationLetterOCRDiff'];
        }

        if (isset($map['IsSignScopeOCRDiff'])) {
            $model->isSignScopeOCRDiff = $map['IsSignScopeOCRDiff'];
        }

        if (isset($map['MoreData'])) {
            if (!empty($map['MoreData'])) {
                $model->moreData = [];
                $n1 = 0;
                foreach ($map['MoreData'] as $item1) {
                    $model->moreData[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['OrganizationCode'])) {
            $model->organizationCode = $map['OrganizationCode'];
        }

        if (isset($map['OssKeys'])) {
            $model->ossKeys = $map['OssKeys'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }

        if (isset($map['ProxyAuthorization'])) {
            $model->proxyAuthorization = $map['ProxyAuthorization'];
        }

        if (isset($map['QualificationId'])) {
            $model->qualificationId = $map['QualificationId'];
        }

        if (isset($map['QualificationType'])) {
            $model->qualificationType = $map['QualificationType'];
        }

        if (isset($map['QualificationVersion'])) {
            $model->qualificationVersion = $map['QualificationVersion'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SceneType'])) {
            $model->sceneType = $map['SceneType'];
        }

        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        if (isset($map['SignCode'])) {
            $model->signCode = $map['SignCode'];
        }

        if (isset($map['SignId'])) {
            $model->signId = $map['SignId'];
        }

        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        if (isset($map['SignScopeOCR'])) {
            $model->signScopeOCR = $map['SignScopeOCR'];
        }

        if (isset($map['SignUpgrade'])) {
            $model->signUpgrade = $map['SignUpgrade'];
        }

        if (isset($map['ThirdParty'])) {
            $model->thirdParty = $map['ThirdParty'];
        }

        if (isset($map['UserViewFileName'])) {
            $model->userViewFileName = $map['UserViewFileName'];
        }

        return $model;
    }
}
