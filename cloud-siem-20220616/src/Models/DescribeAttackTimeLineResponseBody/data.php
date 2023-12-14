<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAttackTimeLineResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The risk level. Valid values:
     *
     *   serious: high
     *   suspicious: medium
     *   remind: low
     *
     * @example remind
     *
     * @var string
     */
    public $alertLevel;

    /**
     * @description The alert name in English.
     *
     * @example Try SNMP weak password
     *
     * @var string
     */
    public $alertName;

    /**
     * @description The internal code of the alert name.
     *
     * @example security_event_config.event_name.webshell
     *
     * @var string
     */
    public $alertNameCode;

    /**
     * @description The alert name in English.
     *
     * @example Try SNMP weak password
     *
     * @var string
     */
    public $alertNameEn;

    /**
     * @description The source of the alert.
     *
     * @example sas
     *
     * @var string
     */
    public $alertSrcProd;

    /**
     * @description The sub-module of the alert source.
     *
     * @example waf
     *
     * @var string
     */
    public $alertSrcProdModule;

    /**
     * @description The time when the alert was triggered.
     *
     * @example 2021-01-06 16:37:29
     *
     * @var int
     */
    public $alertTime;

    /**
     * @description The title of the alert.
     *
     * @example Scan-Try SNMP weak password
     *
     * @var string
     */
    public $alertTitle;

    /**
     * @description The alert title in English.
     *
     * @example Scan-Try SNMP weak password
     *
     * @var string
     */
    public $alertTitleEn;

    /**
     * @description The type of the alert.
     *
     * @example Scan
     *
     * @var string
     */
    public $alertType;

    /**
     * @description The internal code of the alert type.
     *
     * @example security_event_config.event_name.webshellName
     *
     * @var string
     */
    public $alertTypeCode;

    /**
     * @description The alert type in English.
     *
     * @example Scan
     *
     * @var string
     */
    public $alertTypeEn;

    /**
     * @description The UUID of the alert
     *
     * @example sas_71e24437d2797ce8fc59692905a4****
     *
     * @var string
     */
    public $alertUuid;

    /**
     * @description The logical ID of the asset.
     *
     * @example 0616caeb-acb8-45e0-8520-4ee5fbe251f0
     *
     * @var string
     */
    public $assetId;

    /**
     * @description The details of the asset.
     *
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
     * @description The name of the asset.
     *
     * @example zsw-agentless-centos****
     *
     * @var string
     */
    public $assetName;

    /**
     * @description The tag of the ATT\&CK attack.
     *
     * @example T1595.002 Vulnerability Scanning
     *
     * @var string
     */
    public $attCk;

    /**
     * @description The cloud code. Valid values:
     *
     *   aliyun: Alibaba Cloud
     *   qcloud: Tencent Cloud
     *   hcloud: Huawei Cloud
     *
     * @example aliyun
     *
     * @var string
     */
    public $cloudCode;

    /**
     * @description The UUID of the event.
     *
     * @example 85ea4241-798f-4684-a876-65d4f0c3****
     *
     * @var string
     */
    public $incidentUuid;

    /**
     * @description The time when the alert was recorded.
     *
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
