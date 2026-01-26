<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListCustomHostnamesResponseBody;

use AlibabaCloud\Dara\Model;

class hostnames extends Model
{
    /**
     * @var int
     */
    public $certApplyCode;

    /**
     * @var string
     */
    public $certApplyMessage;

    /**
     * @var string
     */
    public $certHttpKey;

    /**
     * @var string
     */
    public $certHttpValue;

    /**
     * @var string
     */
    public $certNotAfter;

    /**
     * @var string
     */
    public $certStatus;

    /**
     * @var string
     */
    public $certTxtKey;

    /**
     * @var string
     */
    public $certTxtValue;

    /**
     * @var string
     */
    public $certType;

    /**
     * @var string
     */
    public $conflictWith;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var int
     */
    public $hostnameId;

    /**
     * @var string
     */
    public $offlineReason;

    /**
     * @var int
     */
    public $recordId;

    /**
     * @var string
     */
    public $recordName;

    /**
     * @var int
     */
    public $siteId;

    /**
     * @var string
     */
    public $siteName;

    /**
     * @var string
     */
    public $sslFlag;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $verifyCode;

    /**
     * @var string
     */
    public $verifyHost;
    protected $_name = [
        'certApplyCode' => 'CertApplyCode',
        'certApplyMessage' => 'CertApplyMessage',
        'certHttpKey' => 'CertHttpKey',
        'certHttpValue' => 'CertHttpValue',
        'certNotAfter' => 'CertNotAfter',
        'certStatus' => 'CertStatus',
        'certTxtKey' => 'CertTxtKey',
        'certTxtValue' => 'CertTxtValue',
        'certType' => 'CertType',
        'conflictWith' => 'ConflictWith',
        'createTime' => 'CreateTime',
        'hostname' => 'Hostname',
        'hostnameId' => 'HostnameId',
        'offlineReason' => 'OfflineReason',
        'recordId' => 'RecordId',
        'recordName' => 'RecordName',
        'siteId' => 'SiteId',
        'siteName' => 'SiteName',
        'sslFlag' => 'SslFlag',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
        'verifyCode' => 'VerifyCode',
        'verifyHost' => 'VerifyHost',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certApplyCode) {
            $res['CertApplyCode'] = $this->certApplyCode;
        }

        if (null !== $this->certApplyMessage) {
            $res['CertApplyMessage'] = $this->certApplyMessage;
        }

        if (null !== $this->certHttpKey) {
            $res['CertHttpKey'] = $this->certHttpKey;
        }

        if (null !== $this->certHttpValue) {
            $res['CertHttpValue'] = $this->certHttpValue;
        }

        if (null !== $this->certNotAfter) {
            $res['CertNotAfter'] = $this->certNotAfter;
        }

        if (null !== $this->certStatus) {
            $res['CertStatus'] = $this->certStatus;
        }

        if (null !== $this->certTxtKey) {
            $res['CertTxtKey'] = $this->certTxtKey;
        }

        if (null !== $this->certTxtValue) {
            $res['CertTxtValue'] = $this->certTxtValue;
        }

        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }

        if (null !== $this->conflictWith) {
            $res['ConflictWith'] = $this->conflictWith;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->hostnameId) {
            $res['HostnameId'] = $this->hostnameId;
        }

        if (null !== $this->offlineReason) {
            $res['OfflineReason'] = $this->offlineReason;
        }

        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }

        if (null !== $this->recordName) {
            $res['RecordName'] = $this->recordName;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->siteName) {
            $res['SiteName'] = $this->siteName;
        }

        if (null !== $this->sslFlag) {
            $res['SslFlag'] = $this->sslFlag;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->verifyCode) {
            $res['VerifyCode'] = $this->verifyCode;
        }

        if (null !== $this->verifyHost) {
            $res['VerifyHost'] = $this->verifyHost;
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
        if (isset($map['CertApplyCode'])) {
            $model->certApplyCode = $map['CertApplyCode'];
        }

        if (isset($map['CertApplyMessage'])) {
            $model->certApplyMessage = $map['CertApplyMessage'];
        }

        if (isset($map['CertHttpKey'])) {
            $model->certHttpKey = $map['CertHttpKey'];
        }

        if (isset($map['CertHttpValue'])) {
            $model->certHttpValue = $map['CertHttpValue'];
        }

        if (isset($map['CertNotAfter'])) {
            $model->certNotAfter = $map['CertNotAfter'];
        }

        if (isset($map['CertStatus'])) {
            $model->certStatus = $map['CertStatus'];
        }

        if (isset($map['CertTxtKey'])) {
            $model->certTxtKey = $map['CertTxtKey'];
        }

        if (isset($map['CertTxtValue'])) {
            $model->certTxtValue = $map['CertTxtValue'];
        }

        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }

        if (isset($map['ConflictWith'])) {
            $model->conflictWith = $map['ConflictWith'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['HostnameId'])) {
            $model->hostnameId = $map['HostnameId'];
        }

        if (isset($map['OfflineReason'])) {
            $model->offlineReason = $map['OfflineReason'];
        }

        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }

        if (isset($map['RecordName'])) {
            $model->recordName = $map['RecordName'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['SiteName'])) {
            $model->siteName = $map['SiteName'];
        }

        if (isset($map['SslFlag'])) {
            $model->sslFlag = $map['SslFlag'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['VerifyCode'])) {
            $model->verifyCode = $map['VerifyCode'];
        }

        if (isset($map['VerifyHost'])) {
            $model->verifyHost = $map['VerifyHost'];
        }

        return $model;
    }
}
