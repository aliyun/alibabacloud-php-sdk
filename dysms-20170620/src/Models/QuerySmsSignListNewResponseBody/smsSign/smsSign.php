<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignListNewResponseBody\smsSign;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignListNewResponseBody\smsSign\smsSign\fileIds;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignListNewResponseBody\smsSign\smsSign\fileUrlList;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignListNewResponseBody\smsSign\smsSign\signSceneDetailList;

class smsSign extends Model
{
    /**
     * @var int
     */
    public $aggregatedRegisterStatus;

    /**
     * @var string
     */
    public $applySource;

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
    public $authorizationLetterStatus;

    /**
     * @var string
     */
    public $authorizationSignScope;

    /**
     * @var bool
     */
    public $canRegister;

    /**
     * @var bool
     */
    public $enableAuthorizationLetter;

    /**
     * @var string
     */
    public $extendMessage;

    /**
     * @var fileIds
     */
    public $fileIds;

    /**
     * @var fileUrlList
     */
    public $fileUrlList;

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
    public $isDefaultSign;

    /**
     * @var bool
     */
    public $isSignScopeOCRDiff;

    /**
     * @var int
     */
    public $mobileRegisterStatus;

    /**
     * @var string
     */
    public $operateDateStr;

    /**
     * @var int
     */
    public $orderCount;

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
    public $proxyAuthorization;

    /**
     * @var int
     */
    public $qualificationId;

    /**
     * @var string
     */
    public $qualificationName;

    /**
     * @var string
     */
    public $qualificationState;

    /**
     * @var int
     */
    public $qualificationVersion;

    /**
     * @var int
     */
    public $qualificationWorkOrderId;

    /**
     * @var int
     */
    public $registerResult;

    /**
     * @var int
     */
    public $registerTime;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $resultReason;

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
     * @var signSceneDetailList
     */
    public $signSceneDetailList;

    /**
     * @var string
     */
    public $signScopeOCR;

    /**
     * @var string
     */
    public $signSource;

    /**
     * @var int
     */
    public $signType;

    /**
     * @var int
     */
    public $telecomRegisterStatus;

    /**
     * @var int
     */
    public $unicomRegisterStatus;
    protected $_name = [
        'aggregatedRegisterStatus' => 'AggregatedRegisterStatus',
        'applySource' => 'ApplySource',
        'auditInfo' => 'AuditInfo',
        'auditRemarkInfo' => 'AuditRemarkInfo',
        'auditState' => 'AuditState',
        'authorization' => 'Authorization',
        'authorizationEffTime' => 'AuthorizationEffTime',
        'authorizationLetter' => 'AuthorizationLetter',
        'authorizationLetterAuditPass' => 'AuthorizationLetterAuditPass',
        'authorizationLetterId' => 'AuthorizationLetterId',
        'authorizationLetterName' => 'AuthorizationLetterName',
        'authorizationLetterStatus' => 'AuthorizationLetterStatus',
        'authorizationSignScope' => 'AuthorizationSignScope',
        'canRegister' => 'CanRegister',
        'enableAuthorizationLetter' => 'EnableAuthorizationLetter',
        'extendMessage' => 'ExtendMessage',
        'fileIds' => 'FileIds',
        'fileUrlList' => 'FileUrlList',
        'gmtCreateStr' => 'GmtCreateStr',
        'id' => 'Id',
        'isAuthorizationLetterOCRComplete' => 'IsAuthorizationLetterOCRComplete',
        'isAuthorizationLetterOCRDiff' => 'IsAuthorizationLetterOCRDiff',
        'isDefaultSign' => 'IsDefaultSign',
        'isSignScopeOCRDiff' => 'IsSignScopeOCRDiff',
        'mobileRegisterStatus' => 'MobileRegisterStatus',
        'operateDateStr' => 'OperateDateStr',
        'orderCount' => 'OrderCount',
        'orderId' => 'OrderId',
        'organizationCode' => 'OrganizationCode',
        'proxyAuthorization' => 'ProxyAuthorization',
        'qualificationId' => 'QualificationId',
        'qualificationName' => 'QualificationName',
        'qualificationState' => 'QualificationState',
        'qualificationVersion' => 'QualificationVersion',
        'qualificationWorkOrderId' => 'QualificationWorkOrderId',
        'registerResult' => 'RegisterResult',
        'registerTime' => 'RegisterTime',
        'remark' => 'Remark',
        'resultReason' => 'ResultReason',
        'sceneType' => 'SceneType',
        'serviceType' => 'ServiceType',
        'signCode' => 'SignCode',
        'signName' => 'SignName',
        'signSceneDetailList' => 'SignSceneDetailList',
        'signScopeOCR' => 'SignScopeOCR',
        'signSource' => 'SignSource',
        'signType' => 'SignType',
        'telecomRegisterStatus' => 'TelecomRegisterStatus',
        'unicomRegisterStatus' => 'UnicomRegisterStatus',
    ];

    public function validate()
    {
        if (null !== $this->fileIds) {
            $this->fileIds->validate();
        }
        if (null !== $this->fileUrlList) {
            $this->fileUrlList->validate();
        }
        if (null !== $this->signSceneDetailList) {
            $this->signSceneDetailList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregatedRegisterStatus) {
            $res['AggregatedRegisterStatus'] = $this->aggregatedRegisterStatus;
        }

        if (null !== $this->applySource) {
            $res['ApplySource'] = $this->applySource;
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

        if (null !== $this->authorizationLetterStatus) {
            $res['AuthorizationLetterStatus'] = $this->authorizationLetterStatus;
        }

        if (null !== $this->authorizationSignScope) {
            $res['AuthorizationSignScope'] = $this->authorizationSignScope;
        }

        if (null !== $this->canRegister) {
            $res['CanRegister'] = $this->canRegister;
        }

        if (null !== $this->enableAuthorizationLetter) {
            $res['EnableAuthorizationLetter'] = $this->enableAuthorizationLetter;
        }

        if (null !== $this->extendMessage) {
            $res['ExtendMessage'] = $this->extendMessage;
        }

        if (null !== $this->fileIds) {
            $res['FileIds'] = null !== $this->fileIds ? $this->fileIds->toArray($noStream) : $this->fileIds;
        }

        if (null !== $this->fileUrlList) {
            $res['FileUrlList'] = null !== $this->fileUrlList ? $this->fileUrlList->toArray($noStream) : $this->fileUrlList;
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

        if (null !== $this->isDefaultSign) {
            $res['IsDefaultSign'] = $this->isDefaultSign;
        }

        if (null !== $this->isSignScopeOCRDiff) {
            $res['IsSignScopeOCRDiff'] = $this->isSignScopeOCRDiff;
        }

        if (null !== $this->mobileRegisterStatus) {
            $res['MobileRegisterStatus'] = $this->mobileRegisterStatus;
        }

        if (null !== $this->operateDateStr) {
            $res['OperateDateStr'] = $this->operateDateStr;
        }

        if (null !== $this->orderCount) {
            $res['OrderCount'] = $this->orderCount;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->organizationCode) {
            $res['OrganizationCode'] = $this->organizationCode;
        }

        if (null !== $this->proxyAuthorization) {
            $res['ProxyAuthorization'] = $this->proxyAuthorization;
        }

        if (null !== $this->qualificationId) {
            $res['QualificationId'] = $this->qualificationId;
        }

        if (null !== $this->qualificationName) {
            $res['QualificationName'] = $this->qualificationName;
        }

        if (null !== $this->qualificationState) {
            $res['QualificationState'] = $this->qualificationState;
        }

        if (null !== $this->qualificationVersion) {
            $res['QualificationVersion'] = $this->qualificationVersion;
        }

        if (null !== $this->qualificationWorkOrderId) {
            $res['QualificationWorkOrderId'] = $this->qualificationWorkOrderId;
        }

        if (null !== $this->registerResult) {
            $res['RegisterResult'] = $this->registerResult;
        }

        if (null !== $this->registerTime) {
            $res['RegisterTime'] = $this->registerTime;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->resultReason) {
            $res['ResultReason'] = $this->resultReason;
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

        if (null !== $this->signSceneDetailList) {
            $res['SignSceneDetailList'] = null !== $this->signSceneDetailList ? $this->signSceneDetailList->toArray($noStream) : $this->signSceneDetailList;
        }

        if (null !== $this->signScopeOCR) {
            $res['SignScopeOCR'] = $this->signScopeOCR;
        }

        if (null !== $this->signSource) {
            $res['SignSource'] = $this->signSource;
        }

        if (null !== $this->signType) {
            $res['SignType'] = $this->signType;
        }

        if (null !== $this->telecomRegisterStatus) {
            $res['TelecomRegisterStatus'] = $this->telecomRegisterStatus;
        }

        if (null !== $this->unicomRegisterStatus) {
            $res['UnicomRegisterStatus'] = $this->unicomRegisterStatus;
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
        if (isset($map['AggregatedRegisterStatus'])) {
            $model->aggregatedRegisterStatus = $map['AggregatedRegisterStatus'];
        }

        if (isset($map['ApplySource'])) {
            $model->applySource = $map['ApplySource'];
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

        if (isset($map['AuthorizationLetterStatus'])) {
            $model->authorizationLetterStatus = $map['AuthorizationLetterStatus'];
        }

        if (isset($map['AuthorizationSignScope'])) {
            $model->authorizationSignScope = $map['AuthorizationSignScope'];
        }

        if (isset($map['CanRegister'])) {
            $model->canRegister = $map['CanRegister'];
        }

        if (isset($map['EnableAuthorizationLetter'])) {
            $model->enableAuthorizationLetter = $map['EnableAuthorizationLetter'];
        }

        if (isset($map['ExtendMessage'])) {
            $model->extendMessage = $map['ExtendMessage'];
        }

        if (isset($map['FileIds'])) {
            $model->fileIds = fileIds::fromMap($map['FileIds']);
        }

        if (isset($map['FileUrlList'])) {
            $model->fileUrlList = fileUrlList::fromMap($map['FileUrlList']);
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

        if (isset($map['IsDefaultSign'])) {
            $model->isDefaultSign = $map['IsDefaultSign'];
        }

        if (isset($map['IsSignScopeOCRDiff'])) {
            $model->isSignScopeOCRDiff = $map['IsSignScopeOCRDiff'];
        }

        if (isset($map['MobileRegisterStatus'])) {
            $model->mobileRegisterStatus = $map['MobileRegisterStatus'];
        }

        if (isset($map['OperateDateStr'])) {
            $model->operateDateStr = $map['OperateDateStr'];
        }

        if (isset($map['OrderCount'])) {
            $model->orderCount = $map['OrderCount'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['OrganizationCode'])) {
            $model->organizationCode = $map['OrganizationCode'];
        }

        if (isset($map['ProxyAuthorization'])) {
            $model->proxyAuthorization = $map['ProxyAuthorization'];
        }

        if (isset($map['QualificationId'])) {
            $model->qualificationId = $map['QualificationId'];
        }

        if (isset($map['QualificationName'])) {
            $model->qualificationName = $map['QualificationName'];
        }

        if (isset($map['QualificationState'])) {
            $model->qualificationState = $map['QualificationState'];
        }

        if (isset($map['QualificationVersion'])) {
            $model->qualificationVersion = $map['QualificationVersion'];
        }

        if (isset($map['QualificationWorkOrderId'])) {
            $model->qualificationWorkOrderId = $map['QualificationWorkOrderId'];
        }

        if (isset($map['RegisterResult'])) {
            $model->registerResult = $map['RegisterResult'];
        }

        if (isset($map['RegisterTime'])) {
            $model->registerTime = $map['RegisterTime'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['ResultReason'])) {
            $model->resultReason = $map['ResultReason'];
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

        if (isset($map['SignSceneDetailList'])) {
            $model->signSceneDetailList = signSceneDetailList::fromMap($map['SignSceneDetailList']);
        }

        if (isset($map['SignScopeOCR'])) {
            $model->signScopeOCR = $map['SignScopeOCR'];
        }

        if (isset($map['SignSource'])) {
            $model->signSource = $map['SignSource'];
        }

        if (isset($map['SignType'])) {
            $model->signType = $map['SignType'];
        }

        if (isset($map['TelecomRegisterStatus'])) {
            $model->telecomRegisterStatus = $map['TelecomRegisterStatus'];
        }

        if (isset($map['UnicomRegisterStatus'])) {
            $model->unicomRegisterStatus = $map['UnicomRegisterStatus'];
        }

        return $model;
    }
}
