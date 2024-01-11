<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentVertexExtendInfoResponseBody\vertexExtendInfo;

use AlibabaCloud\Tea\Model;

class property extends Model
{
    /**
     * @description The alert description.
     *
     * @example exploit
     *
     * @var string
     */
    public $alertDesc;

    /**
     * @description The details of the alert.
     *
     * @example {}
     *
     * @var string
     */
    public $alertDetail;

    /**
     * @description The alert level. Valid values:
     *
     *   **serious**
     *   **suspicious**
     *   **remind**
     *
     * @example serious
     *
     * @var string
     */
    public $alertLevel;

    /**
     * @description The alert name.
     *
     * @example pt_device_in_bps_down_alert
     *
     * @var string
     */
    public $alertName;

    /**
     * @description The code of the alert name.
     *
     * @example 6367
     *
     * @var string
     */
    public $alertNameCode;

    /**
     * @description The alert name. The value is in English.
     *
     * @example attack_alert
     *
     * @var string
     */
    public $alertNameEn;

    /**
     * @description The service that generates the alert.
     *
     * @example sas
     *
     * @var string
     */
    public $alertSrcProd;

    /**
     * @description The module of the service that generates the alert.
     *
     * @example aegis
     *
     * @var string
     */
    public $alertSrcProdModule;

    /**
     * @description The alert title.
     *
     * @example login_common_account
     *
     * @var string
     */
    public $alertTitle;

    /**
     * @description The alert type.
     *
     * @example attack_alert
     *
     * @var string
     */
    public $alertType;

    /**
     * @description The code of the alert type.
     *
     * @example 112
     *
     * @var string
     */
    public $alertTypeCode;

    /**
     * @description The alert type. The value is in English.
     *
     * @example attack_alert
     *
     * @var string
     */
    public $alertTypeEn;

    /**
     * @description The alert ID.
     *
     * @example alert-abc4990f2e1948eb960a2bb7ac0****
     *
     * @var string
     */
    public $alertUuid;

    /**
     * @description The assets.
     *
     * @example []
     *
     * @var string
     */
    public $assetList;

    /**
     * @description ATT\&CK
     *
     * @example Keychain
     *
     * @var string
     */
    public $attCk;

    /**
     * @description The code of the cloud service provider.
     *
     * @example alibaba_cloud
     *
     * @var string
     */
    public $cloudCode;

    /**
     * @description The instance.
     *
     * @example [
     * "003d544744249351****"
     * ]
     * @var string
     */
    public $entityList;

    /**
     * @description The creation time.
     *
     * @example 2022-11-24T10:13Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The modification time.
     *
     * @example 2023-05-08 20:06:07
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The time when the log was generated.
     *
     * @example 2022-11-24T10:13Z
     *
     * @var string
     */
    public $logTime;

    /**
     * @description The log ID.
     *
     * @example abc4990f2e1948eb960a2bb7ac0f****
     *
     * @var string
     */
    public $logUuid;

    /**
     * @description The ID of the master account.
     *
     * @example 168370268****
     *
     * @var string
     */
    public $mainUserId;

    /**
     * @description The time when the alert was generated.
     *
     * @example 2022-11-24T10:13Z
     *
     * @var string
     */
    public $occurTime;

    /**
     * @description The ID of the sub-account.
     *
     * @example 11689082709****
     *
     * @var string
     */
    public $subUserId;
    protected $_name = [
        'alertDesc'          => 'AlertDesc',
        'alertDetail'        => 'AlertDetail',
        'alertLevel'         => 'AlertLevel',
        'alertName'          => 'AlertName',
        'alertNameCode'      => 'AlertNameCode',
        'alertNameEn'        => 'AlertNameEn',
        'alertSrcProd'       => 'AlertSrcProd',
        'alertSrcProdModule' => 'AlertSrcProdModule',
        'alertTitle'         => 'AlertTitle',
        'alertType'          => 'AlertType',
        'alertTypeCode'      => 'AlertTypeCode',
        'alertTypeEn'        => 'AlertTypeEn',
        'alertUuid'          => 'AlertUuid',
        'assetList'          => 'AssetList',
        'attCk'              => 'AttCk',
        'cloudCode'          => 'CloudCode',
        'entityList'         => 'EntityList',
        'gmtCreate'          => 'GmtCreate',
        'gmtModified'        => 'GmtModified',
        'logTime'            => 'LogTime',
        'logUuid'            => 'LogUuid',
        'mainUserId'         => 'MainUserId',
        'occurTime'          => 'OccurTime',
        'subUserId'          => 'SubUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertDesc) {
            $res['AlertDesc'] = $this->alertDesc;
        }
        if (null !== $this->alertDetail) {
            $res['AlertDetail'] = $this->alertDetail;
        }
        if (null !== $this->alertLevel) {
            $res['AlertLevel'] = $this->alertLevel;
        }
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }
        if (null !== $this->alertNameCode) {
            $res['AlertNameCode'] = $this->alertNameCode;
        }
        if (null !== $this->alertNameEn) {
            $res['AlertNameEn'] = $this->alertNameEn;
        }
        if (null !== $this->alertSrcProd) {
            $res['AlertSrcProd'] = $this->alertSrcProd;
        }
        if (null !== $this->alertSrcProdModule) {
            $res['AlertSrcProdModule'] = $this->alertSrcProdModule;
        }
        if (null !== $this->alertTitle) {
            $res['AlertTitle'] = $this->alertTitle;
        }
        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }
        if (null !== $this->alertTypeCode) {
            $res['AlertTypeCode'] = $this->alertTypeCode;
        }
        if (null !== $this->alertTypeEn) {
            $res['AlertTypeEn'] = $this->alertTypeEn;
        }
        if (null !== $this->alertUuid) {
            $res['AlertUuid'] = $this->alertUuid;
        }
        if (null !== $this->assetList) {
            $res['AssetList'] = $this->assetList;
        }
        if (null !== $this->attCk) {
            $res['AttCk'] = $this->attCk;
        }
        if (null !== $this->cloudCode) {
            $res['CloudCode'] = $this->cloudCode;
        }
        if (null !== $this->entityList) {
            $res['EntityList'] = $this->entityList;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->logTime) {
            $res['LogTime'] = $this->logTime;
        }
        if (null !== $this->logUuid) {
            $res['LogUuid'] = $this->logUuid;
        }
        if (null !== $this->mainUserId) {
            $res['MainUserId'] = $this->mainUserId;
        }
        if (null !== $this->occurTime) {
            $res['OccurTime'] = $this->occurTime;
        }
        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return property
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertDesc'])) {
            $model->alertDesc = $map['AlertDesc'];
        }
        if (isset($map['AlertDetail'])) {
            $model->alertDetail = $map['AlertDetail'];
        }
        if (isset($map['AlertLevel'])) {
            $model->alertLevel = $map['AlertLevel'];
        }
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }
        if (isset($map['AlertNameCode'])) {
            $model->alertNameCode = $map['AlertNameCode'];
        }
        if (isset($map['AlertNameEn'])) {
            $model->alertNameEn = $map['AlertNameEn'];
        }
        if (isset($map['AlertSrcProd'])) {
            $model->alertSrcProd = $map['AlertSrcProd'];
        }
        if (isset($map['AlertSrcProdModule'])) {
            $model->alertSrcProdModule = $map['AlertSrcProdModule'];
        }
        if (isset($map['AlertTitle'])) {
            $model->alertTitle = $map['AlertTitle'];
        }
        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }
        if (isset($map['AlertTypeCode'])) {
            $model->alertTypeCode = $map['AlertTypeCode'];
        }
        if (isset($map['AlertTypeEn'])) {
            $model->alertTypeEn = $map['AlertTypeEn'];
        }
        if (isset($map['AlertUuid'])) {
            $model->alertUuid = $map['AlertUuid'];
        }
        if (isset($map['AssetList'])) {
            $model->assetList = $map['AssetList'];
        }
        if (isset($map['AttCk'])) {
            $model->attCk = $map['AttCk'];
        }
        if (isset($map['CloudCode'])) {
            $model->cloudCode = $map['CloudCode'];
        }
        if (isset($map['EntityList'])) {
            $model->entityList = $map['EntityList'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['LogTime'])) {
            $model->logTime = $map['LogTime'];
        }
        if (isset($map['LogUuid'])) {
            $model->logUuid = $map['LogUuid'];
        }
        if (isset($map['MainUserId'])) {
            $model->mainUserId = $map['MainUserId'];
        }
        if (isset($map['OccurTime'])) {
            $model->occurTime = $map['OccurTime'];
        }
        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }

        return $model;
    }
}
