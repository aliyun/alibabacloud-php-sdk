<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentVertexExtendInfoResponseBody\vertexExtendInfo;

use AlibabaCloud\Tea\Model;

class property extends Model
{
    /**
     * @var string
     */
    public $alertDesc;

    /**
     * @var string
     */
    public $alertDetail;

    /**
     * @var string
     */
    public $alertLevel;

    /**
     * @var string
     */
    public $alertName;

    /**
     * @var string
     */
    public $alertNameCode;

    /**
     * @var string
     */
    public $alertNameEn;

    /**
     * @var string
     */
    public $alertSrcProd;

    /**
     * @var string
     */
    public $alertSrcProdModule;

    /**
     * @var string
     */
    public $alertTitle;

    /**
     * @var string
     */
    public $alertType;

    /**
     * @var string
     */
    public $alertTypeCode;

    /**
     * @var string
     */
    public $alertTypeEn;

    /**
     * @var string
     */
    public $alertUuid;

    /**
     * @var string
     */
    public $assetList;

    /**
     * @var string
     */
    public $attCk;

    /**
     * @var string
     */
    public $cloudCode;

    /**
     * @var string
     */
    public $entityList;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $logTime;

    /**
     * @var string
     */
    public $logUuid;

    /**
     * @var string
     */
    public $mainUserId;

    /**
     * @var string
     */
    public $occurTime;

    /**
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
