<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignDetailBySignIdNewResponseBody\applicationScene;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignDetailBySignIdNewResponseBody\list_;

class QuerySmsSignDetailBySignIdNewResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var applicationScene
     */
    public $applicationScene;

    /**
     * @var string
     */
    public $auditInfo;

    /**
     * @var string
     */
    public $auditRemarkInfo;

    /**
     * @var string
     */
    public $auditState;

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
     * @var string
     */
    public $authorizationLetterId;

    /**
     * @var string
     */
    public $authorizationLetterName;

    /**
     * @var string
     */
    public $authorizationLetterState;

    /**
     * @var string
     */
    public $authorizationLetterStatus;

    /**
     * @var string
     */
    public $authorizationSignScope;

    /**
     * @var int
     */
    public $effectSceneType;

    /**
     * @var bool
     */
    public $enableAuthorizationLetter;

    /**
     * @var string
     */
    public $extendMessage;

    /**
     * @var int[]
     */
    public $fileIds;

    /**
     * @var string[]
     */
    public $fileUrlList;

    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $gmtCreateStr;

    /**
     * @var string
     */
    public $id;

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
     * @var list_[]
     */
    public $list;

    /**
     * @var bool
     */
    public $needAuthorized;

    /**
     * @var bool
     */
    public $openTag;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $organizationCode;

    /**
     * @var string[]
     */
    public $ossKeys;

    /**
     * @var string
     */
    public $proxyAuthorization;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $requestId;

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
    public $signName;

    /**
     * @var string
     */
    public $signScopeOCR;

    /**
     * @var string
     */
    public $signUpgrade;
    protected $_name = [
        'accessToken' => 'AccessToken',
        'applicationScene' => 'ApplicationScene',
        'auditInfo' => 'AuditInfo',
        'auditRemarkInfo' => 'AuditRemarkInfo',
        'auditState' => 'AuditState',
        'authorization' => 'Authorization',
        'authorizationEffTime' => 'AuthorizationEffTime',
        'authorizationLetter' => 'AuthorizationLetter',
        'authorizationLetterAuditPass' => 'AuthorizationLetterAuditPass',
        'authorizationLetterId' => 'AuthorizationLetterId',
        'authorizationLetterName' => 'AuthorizationLetterName',
        'authorizationLetterState' => 'AuthorizationLetterState',
        'authorizationLetterStatus' => 'AuthorizationLetterStatus',
        'authorizationSignScope' => 'AuthorizationSignScope',
        'effectSceneType' => 'EffectSceneType',
        'enableAuthorizationLetter' => 'EnableAuthorizationLetter',
        'extendMessage' => 'ExtendMessage',
        'fileIds' => 'FileIds',
        'fileUrlList' => 'FileUrlList',
        'from' => 'From',
        'gmtCreateStr' => 'GmtCreateStr',
        'id' => 'Id',
        'isAuthorizationLetterOCRComplete' => 'IsAuthorizationLetterOCRComplete',
        'isAuthorizationLetterOCRDiff' => 'IsAuthorizationLetterOCRDiff',
        'isSignScopeOCRDiff' => 'IsSignScopeOCRDiff',
        'list' => 'List',
        'needAuthorized' => 'NeedAuthorized',
        'openTag' => 'OpenTag',
        'orderId' => 'OrderId',
        'organizationCode' => 'OrganizationCode',
        'ossKeys' => 'OssKeys',
        'proxyAuthorization' => 'ProxyAuthorization',
        'remark' => 'Remark',
        'requestId' => 'RequestId',
        'sceneType' => 'SceneType',
        'serviceType' => 'ServiceType',
        'signCode' => 'SignCode',
        'signName' => 'SignName',
        'signScopeOCR' => 'SignScopeOCR',
        'signUpgrade' => 'SignUpgrade',
    ];

    public function validate()
    {
        if (null !== $this->applicationScene) {
            $this->applicationScene->validate();
        }
        if (\is_array($this->fileIds)) {
            Model::validateArray($this->fileIds);
        }
        if (\is_array($this->fileUrlList)) {
            Model::validateArray($this->fileUrlList);
        }
        if (\is_array($this->list)) {
            Model::validateArray($this->list);
        }
        if (\is_array($this->ossKeys)) {
            Model::validateArray($this->ossKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }

        if (null !== $this->applicationScene) {
            $res['ApplicationScene'] = null !== $this->applicationScene ? $this->applicationScene->toArray($noStream) : $this->applicationScene;
        }

        if (null !== $this->auditInfo) {
            $res['AuditInfo'] = $this->auditInfo;
        }

        if (null !== $this->auditRemarkInfo) {
            $res['AuditRemarkInfo'] = $this->auditRemarkInfo;
        }

        if (null !== $this->auditState) {
            $res['AuditState'] = $this->auditState;
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

        if (null !== $this->authorizationLetterState) {
            $res['AuthorizationLetterState'] = $this->authorizationLetterState;
        }

        if (null !== $this->authorizationLetterStatus) {
            $res['AuthorizationLetterStatus'] = $this->authorizationLetterStatus;
        }

        if (null !== $this->authorizationSignScope) {
            $res['AuthorizationSignScope'] = $this->authorizationSignScope;
        }

        if (null !== $this->effectSceneType) {
            $res['EffectSceneType'] = $this->effectSceneType;
        }

        if (null !== $this->enableAuthorizationLetter) {
            $res['EnableAuthorizationLetter'] = $this->enableAuthorizationLetter;
        }

        if (null !== $this->extendMessage) {
            $res['ExtendMessage'] = $this->extendMessage;
        }

        if (null !== $this->fileIds) {
            if (\is_array($this->fileIds)) {
                $res['FileIds'] = [];
                $n1 = 0;
                foreach ($this->fileIds as $item1) {
                    $res['FileIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fileUrlList) {
            if (\is_array($this->fileUrlList)) {
                $res['FileUrlList'] = [];
                $n1 = 0;
                foreach ($this->fileUrlList as $item1) {
                    $res['FileUrlList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->gmtCreateStr) {
            $res['GmtCreateStr'] = $this->gmtCreateStr;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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

        if (null !== $this->list) {
            if (\is_array($this->list)) {
                $res['List'] = [];
                $n1 = 0;
                foreach ($this->list as $item1) {
                    $res['List'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->needAuthorized) {
            $res['NeedAuthorized'] = $this->needAuthorized;
        }

        if (null !== $this->openTag) {
            $res['OpenTag'] = $this->openTag;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->organizationCode) {
            $res['OrganizationCode'] = $this->organizationCode;
        }

        if (null !== $this->ossKeys) {
            if (\is_array($this->ossKeys)) {
                $res['OssKeys'] = [];
                $n1 = 0;
                foreach ($this->ossKeys as $item1) {
                    $res['OssKeys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->proxyAuthorization) {
            $res['ProxyAuthorization'] = $this->proxyAuthorization;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }

        if (null !== $this->signScopeOCR) {
            $res['SignScopeOCR'] = $this->signScopeOCR;
        }

        if (null !== $this->signUpgrade) {
            $res['SignUpgrade'] = $this->signUpgrade;
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
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }

        if (isset($map['ApplicationScene'])) {
            $model->applicationScene = applicationScene::fromMap($map['ApplicationScene']);
        }

        if (isset($map['AuditInfo'])) {
            $model->auditInfo = $map['AuditInfo'];
        }

        if (isset($map['AuditRemarkInfo'])) {
            $model->auditRemarkInfo = $map['AuditRemarkInfo'];
        }

        if (isset($map['AuditState'])) {
            $model->auditState = $map['AuditState'];
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

        if (isset($map['AuthorizationLetterState'])) {
            $model->authorizationLetterState = $map['AuthorizationLetterState'];
        }

        if (isset($map['AuthorizationLetterStatus'])) {
            $model->authorizationLetterStatus = $map['AuthorizationLetterStatus'];
        }

        if (isset($map['AuthorizationSignScope'])) {
            $model->authorizationSignScope = $map['AuthorizationSignScope'];
        }

        if (isset($map['EffectSceneType'])) {
            $model->effectSceneType = $map['EffectSceneType'];
        }

        if (isset($map['EnableAuthorizationLetter'])) {
            $model->enableAuthorizationLetter = $map['EnableAuthorizationLetter'];
        }

        if (isset($map['ExtendMessage'])) {
            $model->extendMessage = $map['ExtendMessage'];
        }

        if (isset($map['FileIds'])) {
            if (!empty($map['FileIds'])) {
                $model->fileIds = [];
                $n1 = 0;
                foreach ($map['FileIds'] as $item1) {
                    $model->fileIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['FileUrlList'])) {
            if (!empty($map['FileUrlList'])) {
                $model->fileUrlList = [];
                $n1 = 0;
                foreach ($map['FileUrlList'] as $item1) {
                    $model->fileUrlList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['GmtCreateStr'])) {
            $model->gmtCreateStr = $map['GmtCreateStr'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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

        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n1 = 0;
                foreach ($map['List'] as $item1) {
                    $model->list[$n1] = list_::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NeedAuthorized'])) {
            $model->needAuthorized = $map['NeedAuthorized'];
        }

        if (isset($map['OpenTag'])) {
            $model->openTag = $map['OpenTag'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['OrganizationCode'])) {
            $model->organizationCode = $map['OrganizationCode'];
        }

        if (isset($map['OssKeys'])) {
            if (!empty($map['OssKeys'])) {
                $model->ossKeys = [];
                $n1 = 0;
                foreach ($map['OssKeys'] as $item1) {
                    $model->ossKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProxyAuthorization'])) {
            $model->proxyAuthorization = $map['ProxyAuthorization'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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

        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        if (isset($map['SignScopeOCR'])) {
            $model->signScopeOCR = $map['SignScopeOCR'];
        }

        if (isset($map['SignUpgrade'])) {
            $model->signUpgrade = $map['SignUpgrade'];
        }

        return $model;
    }
}
