<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsTemplateByCodeNewResponseBody\applicationScene;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsTemplateByCodeNewResponseBody\fileIds;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsTemplateByCodeNewResponseBody\fileUrlList;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsTemplateByCodeNewResponseBody\moreDataFileIds;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsTemplateByCodeNewResponseBody\moreDataFileUrls;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsTemplateByCodeNewResponseBody\moreDataOssKeys;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsTemplateByCodeNewResponseBody\ossKeys;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsTemplateByCodeNewResponseBody\tags;

class QuerySmsTemplateByCodeNewResponseBody extends Model
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
    public $bizType;

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
    public $from;

    /**
     * @var string
     */
    public $gmtCreateStr;

    /**
     * @var int
     */
    public $intlType;

    /**
     * @var moreDataFileIds
     */
    public $moreDataFileIds;

    /**
     * @var moreDataFileUrls
     */
    public $moreDataFileUrls;

    /**
     * @var moreDataOssKeys
     */
    public $moreDataOssKeys;

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
     * @var ossKeys
     */
    public $ossKeys;

    /**
     * @var string
     */
    public $productUrl;

    /**
     * @var string
     */
    public $relatedSignName;

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
    public $rmdTemplateId;

    /**
     * @var int
     */
    public $rmdTemplateVariableNum;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var int
     */
    public $signType;

    /**
     * @var string
     */
    public $smsContent;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateRule;
    protected $_name = [
        'accessToken' => 'AccessToken',
        'applicationScene' => 'ApplicationScene',
        'auditInfo' => 'AuditInfo',
        'auditRemarkInfo' => 'AuditRemarkInfo',
        'bizType' => 'BizType',
        'fileIds' => 'FileIds',
        'fileUrlList' => 'FileUrlList',
        'from' => 'From',
        'gmtCreateStr' => 'GmtCreateStr',
        'intlType' => 'IntlType',
        'moreDataFileIds' => 'MoreDataFileIds',
        'moreDataFileUrls' => 'MoreDataFileUrls',
        'moreDataOssKeys' => 'MoreDataOssKeys',
        'needAuthorized' => 'NeedAuthorized',
        'openTag' => 'OpenTag',
        'orderId' => 'OrderId',
        'ossKeys' => 'OssKeys',
        'productUrl' => 'ProductUrl',
        'relatedSignName' => 'RelatedSignName',
        'remark' => 'Remark',
        'requestId' => 'RequestId',
        'rmdTemplateId' => 'RmdTemplateId',
        'rmdTemplateVariableNum' => 'RmdTemplateVariableNum',
        'signName' => 'SignName',
        'signType' => 'SignType',
        'smsContent' => 'SmsContent',
        'tags' => 'Tags',
        'templateCode' => 'TemplateCode',
        'templateName' => 'TemplateName',
        'templateRule' => 'TemplateRule',
    ];

    public function validate()
    {
        if (null !== $this->applicationScene) {
            $this->applicationScene->validate();
        }
        if (null !== $this->fileIds) {
            $this->fileIds->validate();
        }
        if (null !== $this->fileUrlList) {
            $this->fileUrlList->validate();
        }
        if (null !== $this->moreDataFileIds) {
            $this->moreDataFileIds->validate();
        }
        if (null !== $this->moreDataFileUrls) {
            $this->moreDataFileUrls->validate();
        }
        if (null !== $this->moreDataOssKeys) {
            $this->moreDataOssKeys->validate();
        }
        if (null !== $this->ossKeys) {
            $this->ossKeys->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
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

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->fileIds) {
            $res['FileIds'] = null !== $this->fileIds ? $this->fileIds->toArray($noStream) : $this->fileIds;
        }

        if (null !== $this->fileUrlList) {
            $res['FileUrlList'] = null !== $this->fileUrlList ? $this->fileUrlList->toArray($noStream) : $this->fileUrlList;
        }

        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->gmtCreateStr) {
            $res['GmtCreateStr'] = $this->gmtCreateStr;
        }

        if (null !== $this->intlType) {
            $res['IntlType'] = $this->intlType;
        }

        if (null !== $this->moreDataFileIds) {
            $res['MoreDataFileIds'] = null !== $this->moreDataFileIds ? $this->moreDataFileIds->toArray($noStream) : $this->moreDataFileIds;
        }

        if (null !== $this->moreDataFileUrls) {
            $res['MoreDataFileUrls'] = null !== $this->moreDataFileUrls ? $this->moreDataFileUrls->toArray($noStream) : $this->moreDataFileUrls;
        }

        if (null !== $this->moreDataOssKeys) {
            $res['MoreDataOssKeys'] = null !== $this->moreDataOssKeys ? $this->moreDataOssKeys->toArray($noStream) : $this->moreDataOssKeys;
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

        if (null !== $this->ossKeys) {
            $res['OssKeys'] = null !== $this->ossKeys ? $this->ossKeys->toArray($noStream) : $this->ossKeys;
        }

        if (null !== $this->productUrl) {
            $res['ProductUrl'] = $this->productUrl;
        }

        if (null !== $this->relatedSignName) {
            $res['RelatedSignName'] = $this->relatedSignName;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->rmdTemplateId) {
            $res['RmdTemplateId'] = $this->rmdTemplateId;
        }

        if (null !== $this->rmdTemplateVariableNum) {
            $res['RmdTemplateVariableNum'] = $this->rmdTemplateVariableNum;
        }

        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }

        if (null !== $this->signType) {
            $res['SignType'] = $this->signType;
        }

        if (null !== $this->smsContent) {
            $res['SmsContent'] = $this->smsContent;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->templateRule) {
            $res['TemplateRule'] = $this->templateRule;
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

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['FileIds'])) {
            $model->fileIds = fileIds::fromMap($map['FileIds']);
        }

        if (isset($map['FileUrlList'])) {
            $model->fileUrlList = fileUrlList::fromMap($map['FileUrlList']);
        }

        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['GmtCreateStr'])) {
            $model->gmtCreateStr = $map['GmtCreateStr'];
        }

        if (isset($map['IntlType'])) {
            $model->intlType = $map['IntlType'];
        }

        if (isset($map['MoreDataFileIds'])) {
            $model->moreDataFileIds = moreDataFileIds::fromMap($map['MoreDataFileIds']);
        }

        if (isset($map['MoreDataFileUrls'])) {
            $model->moreDataFileUrls = moreDataFileUrls::fromMap($map['MoreDataFileUrls']);
        }

        if (isset($map['MoreDataOssKeys'])) {
            $model->moreDataOssKeys = moreDataOssKeys::fromMap($map['MoreDataOssKeys']);
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

        if (isset($map['OssKeys'])) {
            $model->ossKeys = ossKeys::fromMap($map['OssKeys']);
        }

        if (isset($map['ProductUrl'])) {
            $model->productUrl = $map['ProductUrl'];
        }

        if (isset($map['RelatedSignName'])) {
            $model->relatedSignName = $map['RelatedSignName'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RmdTemplateId'])) {
            $model->rmdTemplateId = $map['RmdTemplateId'];
        }

        if (isset($map['RmdTemplateVariableNum'])) {
            $model->rmdTemplateVariableNum = $map['RmdTemplateVariableNum'];
        }

        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        if (isset($map['SignType'])) {
            $model->signType = $map['SignType'];
        }

        if (isset($map['SmsContent'])) {
            $model->smsContent = $map['SmsContent'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['TemplateRule'])) {
            $model->templateRule = $map['TemplateRule'];
        }

        return $model;
    }
}
