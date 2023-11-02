<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAttackTimeLineResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example remind
     *
     * @var string
     */
    public $alertLevel;

    /**
     * @example Try SNMP weak password
     *
     * @var string
     */
    public $alertName;

    /**
     * @example security_event_config.event_name.webshell
     *
     * @var string
     */
    public $alertNameCode;

    /**
     * @example Try SNMP weak password
     *
     * @var string
     */
    public $alertNameEn;

    /**
     * @example sas
     *
     * @var string
     */
    public $alertSrcProd;

    /**
     * @example waf
     *
     * @var string
     */
    public $alertSrcProdModule;

    /**
     * @example 2021-01-06 16:37:29
     *
     * @var int
     */
    public $alertTime;

    /**
     * @example Scan-Try SNMP weak password
     *
     * @var string
     */
    public $alertTitle;

    /**
     * @example Scan-Try SNMP weak password
     *
     * @var string
     */
    public $alertTitleEn;

    /**
     * @example Scan
     *
     * @var string
     */
    public $alertType;

    /**
     * @example security_event_config.event_name.webshellName
     *
     * @var string
     */
    public $alertTypeCode;

    /**
     * @example Scan
     *
     * @var string
     */
    public $alertTypeEn;

    /**
     * @example sas_71e24437d2797ce8fc59692905a4****
     *
     * @var string
     */
    public $alertUuid;

    /**
     * @example 0616caeb-acb8-45e0-8520-4ee5fbe251f0
     *
     * @var string
     */
    public $assetId;

    /**
     * @example [
     * "is_main_asset": "1",
     * "asset_name": "47.245.*",
     * "port": "22",
     * "ip": "47.245.*",
     * "location": "ap-southeast-1",
     * "asset_id": "47.245.*",
     * ]
     * @var string
     */
    public $assetList;

    /**
     * @example zsw-agentless-centos****
     *
     * @var string
     */
    public $assetName;

    /**
     * @example T1595.002 Vulnerability Scanning
     *
     * @var string
     */
    public $attCk;

    /**
     * @example aliyun
     *
     * @var string
     */
    public $cloudCode;

    /**
     * @example 85ea4241-798f-4684-a876-65d4f0c3****
     *
     * @var string
     */
    public $incidentUuid;

    /**
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $logTime;
    protected $_name = [
        'alertLevel'         => 'AlertLevel',
        'alertName'          => 'AlertName',
        'alertNameCode'      => 'AlertNameCode',
        'alertNameEn'        => 'AlertNameEn',
        'alertSrcProd'       => 'AlertSrcProd',
        'alertSrcProdModule' => 'AlertSrcProdModule',
        'alertTime'          => 'AlertTime',
        'alertTitle'         => 'AlertTitle',
        'alertTitleEn'       => 'AlertTitleEn',
        'alertType'          => 'AlertType',
        'alertTypeCode'      => 'AlertTypeCode',
        'alertTypeEn'        => 'AlertTypeEn',
        'alertUuid'          => 'AlertUuid',
        'assetId'            => 'AssetId',
        'assetList'          => 'AssetList',
        'assetName'          => 'AssetName',
        'attCk'              => 'AttCk',
        'cloudCode'          => 'CloudCode',
        'incidentUuid'       => 'IncidentUuid',
        'logTime'            => 'LogTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->alertTime) {
            $res['AlertTime'] = $this->alertTime;
        }
        if (null !== $this->alertTitle) {
            $res['AlertTitle'] = $this->alertTitle;
        }
        if (null !== $this->alertTitleEn) {
            $res['AlertTitleEn'] = $this->alertTitleEn;
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
        if (null !== $this->assetId) {
            $res['AssetId'] = $this->assetId;
        }
        if (null !== $this->assetList) {
            $res['AssetList'] = $this->assetList;
        }
        if (null !== $this->assetName) {
            $res['AssetName'] = $this->assetName;
        }
        if (null !== $this->attCk) {
            $res['AttCk'] = $this->attCk;
        }
        if (null !== $this->cloudCode) {
            $res['CloudCode'] = $this->cloudCode;
        }
        if (null !== $this->incidentUuid) {
            $res['IncidentUuid'] = $this->incidentUuid;
        }
        if (null !== $this->logTime) {
            $res['LogTime'] = $this->logTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['AlertTime'])) {
            $model->alertTime = $map['AlertTime'];
        }
        if (isset($map['AlertTitle'])) {
            $model->alertTitle = $map['AlertTitle'];
        }
        if (isset($map['AlertTitleEn'])) {
            $model->alertTitleEn = $map['AlertTitleEn'];
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
        if (isset($map['AssetId'])) {
            $model->assetId = $map['AssetId'];
        }
        if (isset($map['AssetList'])) {
            $model->assetList = $map['AssetList'];
        }
        if (isset($map['AssetName'])) {
            $model->assetName = $map['AssetName'];
        }
        if (isset($map['AttCk'])) {
            $model->attCk = $map['AttCk'];
        }
        if (isset($map['CloudCode'])) {
            $model->cloudCode = $map['CloudCode'];
        }
        if (isset($map['IncidentUuid'])) {
            $model->incidentUuid = $map['IncidentUuid'];
        }
        if (isset($map['LogTime'])) {
            $model->logTime = $map['LogTime'];
        }

        return $model;
    }
}
