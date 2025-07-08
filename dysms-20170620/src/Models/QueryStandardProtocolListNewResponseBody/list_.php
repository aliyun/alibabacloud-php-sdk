<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QueryStandardProtocolListNewResponseBody;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $auditOrderId;

    /**
     * @var string
     */
    public $corpCode;

    /**
     * @var string
     */
    public $effIpWhiteList;

    /**
     * @var int
     */
    public $featureCode;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var int
     */
    public $ipAuditStatus;

    /**
     * @var string
     */
    public $ipWhiteList;

    /**
     * @var int
     */
    public $partnerId;

    /**
     * @var string
     */
    public $port;

    /**
     * @var int
     */
    public $profileId;

    /**
     * @var int
     */
    public $protocolType;

    /**
     * @var string
     */
    public $protocolTypeStr;

    /**
     * @var int
     */
    public $realNameInsId;

    /**
     * @var string
     */
    public $resCode;

    /**
     * @var string
     */
    public $smsSign;

    /**
     * @var string
     */
    public $smsType;

    /**
     * @var string
     */
    public $spCode;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var int
     */
    public $userLimit;

    /**
     * @var int
     */
    public $userMaxChannel;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $userPwd;
    protected $_name = [
        'auditOrderId' => 'AuditOrderId',
        'corpCode' => 'CorpCode',
        'effIpWhiteList' => 'EffIpWhiteList',
        'featureCode' => 'FeatureCode',
        'ip' => 'Ip',
        'ipAuditStatus' => 'IpAuditStatus',
        'ipWhiteList' => 'IpWhiteList',
        'partnerId' => 'PartnerId',
        'port' => 'Port',
        'profileId' => 'ProfileId',
        'protocolType' => 'ProtocolType',
        'protocolTypeStr' => 'ProtocolTypeStr',
        'realNameInsId' => 'RealNameInsId',
        'resCode' => 'ResCode',
        'smsSign' => 'SmsSign',
        'smsType' => 'SmsType',
        'spCode' => 'SpCode',
        'status' => 'Status',
        'templateCode' => 'TemplateCode',
        'userLimit' => 'UserLimit',
        'userMaxChannel' => 'UserMaxChannel',
        'userName' => 'UserName',
        'userPwd' => 'UserPwd',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditOrderId) {
            $res['AuditOrderId'] = $this->auditOrderId;
        }

        if (null !== $this->corpCode) {
            $res['CorpCode'] = $this->corpCode;
        }

        if (null !== $this->effIpWhiteList) {
            $res['EffIpWhiteList'] = $this->effIpWhiteList;
        }

        if (null !== $this->featureCode) {
            $res['FeatureCode'] = $this->featureCode;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->ipAuditStatus) {
            $res['IpAuditStatus'] = $this->ipAuditStatus;
        }

        if (null !== $this->ipWhiteList) {
            $res['IpWhiteList'] = $this->ipWhiteList;
        }

        if (null !== $this->partnerId) {
            $res['PartnerId'] = $this->partnerId;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->profileId) {
            $res['ProfileId'] = $this->profileId;
        }

        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }

        if (null !== $this->protocolTypeStr) {
            $res['ProtocolTypeStr'] = $this->protocolTypeStr;
        }

        if (null !== $this->realNameInsId) {
            $res['RealNameInsId'] = $this->realNameInsId;
        }

        if (null !== $this->resCode) {
            $res['ResCode'] = $this->resCode;
        }

        if (null !== $this->smsSign) {
            $res['SmsSign'] = $this->smsSign;
        }

        if (null !== $this->smsType) {
            $res['SmsType'] = $this->smsType;
        }

        if (null !== $this->spCode) {
            $res['SpCode'] = $this->spCode;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        if (null !== $this->userLimit) {
            $res['UserLimit'] = $this->userLimit;
        }

        if (null !== $this->userMaxChannel) {
            $res['UserMaxChannel'] = $this->userMaxChannel;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->userPwd) {
            $res['UserPwd'] = $this->userPwd;
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
        if (isset($map['AuditOrderId'])) {
            $model->auditOrderId = $map['AuditOrderId'];
        }

        if (isset($map['CorpCode'])) {
            $model->corpCode = $map['CorpCode'];
        }

        if (isset($map['EffIpWhiteList'])) {
            $model->effIpWhiteList = $map['EffIpWhiteList'];
        }

        if (isset($map['FeatureCode'])) {
            $model->featureCode = $map['FeatureCode'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['IpAuditStatus'])) {
            $model->ipAuditStatus = $map['IpAuditStatus'];
        }

        if (isset($map['IpWhiteList'])) {
            $model->ipWhiteList = $map['IpWhiteList'];
        }

        if (isset($map['PartnerId'])) {
            $model->partnerId = $map['PartnerId'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['ProfileId'])) {
            $model->profileId = $map['ProfileId'];
        }

        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }

        if (isset($map['ProtocolTypeStr'])) {
            $model->protocolTypeStr = $map['ProtocolTypeStr'];
        }

        if (isset($map['RealNameInsId'])) {
            $model->realNameInsId = $map['RealNameInsId'];
        }

        if (isset($map['ResCode'])) {
            $model->resCode = $map['ResCode'];
        }

        if (isset($map['SmsSign'])) {
            $model->smsSign = $map['SmsSign'];
        }

        if (isset($map['SmsType'])) {
            $model->smsType = $map['SmsType'];
        }

        if (isset($map['SpCode'])) {
            $model->spCode = $map['SpCode'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        if (isset($map['UserLimit'])) {
            $model->userLimit = $map['UserLimit'];
        }

        if (isset($map['UserMaxChannel'])) {
            $model->userMaxChannel = $map['UserMaxChannel'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['UserPwd'])) {
            $model->userPwd = $map['UserPwd'];
        }

        return $model;
    }
}
