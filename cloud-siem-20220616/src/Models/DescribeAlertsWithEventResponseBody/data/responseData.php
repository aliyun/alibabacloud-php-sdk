<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertsWithEventResponseBody\data;

use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertsWithEventResponseBody\data\responseData\alertInfoList;
use AlibabaCloud\Tea\Model;

class responseData extends Model
{
    /**
     * @description The description of the alert.
     *
     * @example The detection model found a suspicious Webshell file on your server, which may be a backdoor file implanted to maintain permissions after the attacker successfully invaded the website.
     *
     * @var string
     */
    public $alertDesc;

    /**
     * @description The internal code of the alert description.
     *
     * @example security_event_config.event_name.webshell
     *
     * @var string
     */
    public $alertDescCode;

    /**
     * @description The alert description in English.
     *
     * @example The detection model found a suspicious Webshell file on your server, which may be a backdoor file implanted to maintain permissions after the attacker successfully invaded the website.
     *
     * @var string
     */
    public $alertDescEn;

    /**
     * @description The details of the alert.
     *
     * @example {"main_user_id": "165295629792****";"log_uuid_count": "99";"attack_ip": "21.92.*.*"}
     *
     * @var string
     */
    public $alertDetail;

    /**
     * @description The displayed details of the alert.
     *
     * @example aliyun
     *
     * @var alertInfoList[]
     */
    public $alertInfoList;

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
     * @description The name of the alert.
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
     * @description The UUID of the alert.
     *
     * @example sas_71e24437d2797ce8fc59692905a4****
     *
     * @var string
     */
    public $alertUuid;

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
     * @description The time when the alert was closed.
     *
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $entityList;

    /**
     * @description The time when the alert was received.
     *
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the alert was last updated.
     *
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The unique ID of the alert.
     *
     * @example 123456789
     *
     * @var int
     */
    public $id;

    /**
     * @description The UUID of the event.
     *
     * @example 85ea4241-798f-4684-a876-65d4f0c3****
     *
     * @var string
     */
    public $incidentUuid;

    /**
     * @description Indicates whether an attack is defended. Valid values:
     *
     *   0: detected
     *   1: blocked
     *
     * @example 1
     *
     * @var string
     */
    public $isDefend;

    /**
     * @description The time when the alert was recorded.
     *
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $logTime;

    /**
     * @description The UUID of the alert log.
     *
     * @example cfw_d12e285a-a042-4d7e-be89-f8a795ef****
     *
     * @var string
     */
    public $logUuid;

    /**
     * @description The ID of the Alibaba Cloud account that is associated with the alert in SIEM.
     *
     * @example 127608589417****
     *
     * @var int
     */
    public $mainUserId;

    /**
     * @description The time when the alert was triggered.
     *
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $occurTime;

    /**
     * @description The time at which the alert was first generated.
     *
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The ID of the Alibaba Cloud account within which the alert is generated.
     *
     * @example 176555323***
     *
     * @var int
     */
    public $subUserId;
    protected $_name = [
        'alertDesc'          => 'AlertDesc',
        'alertDescCode'      => 'AlertDescCode',
        'alertDescEn'        => 'AlertDescEn',
        'alertDetail'        => 'AlertDetail',
        'alertInfoList'      => 'AlertInfoList',
        'alertLevel'         => 'AlertLevel',
        'alertName'          => 'AlertName',
        'alertNameCode'      => 'AlertNameCode',
        'alertNameEn'        => 'AlertNameEn',
        'alertSrcProd'       => 'AlertSrcProd',
        'alertSrcProdModule' => 'AlertSrcProdModule',
        'alertTitle'         => 'AlertTitle',
        'alertTitleEn'       => 'AlertTitleEn',
        'alertType'          => 'AlertType',
        'alertTypeCode'      => 'AlertTypeCode',
        'alertTypeEn'        => 'AlertTypeEn',
        'alertUuid'          => 'AlertUuid',
        'assetList'          => 'AssetList',
        'attCk'              => 'AttCk',
        'cloudCode'          => 'CloudCode',
        'endTime'            => 'EndTime',
        'entityList'         => 'EntityList',
        'gmtCreate'          => 'GmtCreate',
        'gmtModified'        => 'GmtModified',
        'id'                 => 'Id',
        'incidentUuid'       => 'IncidentUuid',
        'isDefend'           => 'IsDefend',
        'logTime'            => 'LogTime',
        'logUuid'            => 'LogUuid',
        'mainUserId'         => 'MainUserId',
        'occurTime'          => 'OccurTime',
        'startTime'          => 'StartTime',
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
        if (null !== $this->alertDescCode) {
            $res['AlertDescCode'] = $this->alertDescCode;
        }
        if (null !== $this->alertDescEn) {
            $res['AlertDescEn'] = $this->alertDescEn;
        }
        if (null !== $this->alertDetail) {
            $res['AlertDetail'] = $this->alertDetail;
        }
        if (null !== $this->alertInfoList) {
            $res['AlertInfoList'] = [];
            if (null !== $this->alertInfoList && \is_array($this->alertInfoList)) {
                $n = 0;
                foreach ($this->alertInfoList as $item) {
                    $res['AlertInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->assetList) {
            $res['AssetList'] = $this->assetList;
        }
        if (null !== $this->attCk) {
            $res['AttCk'] = $this->attCk;
        }
        if (null !== $this->cloudCode) {
            $res['CloudCode'] = $this->cloudCode;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->incidentUuid) {
            $res['IncidentUuid'] = $this->incidentUuid;
        }
        if (null !== $this->isDefend) {
            $res['IsDefend'] = $this->isDefend;
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return responseData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertDesc'])) {
            $model->alertDesc = $map['AlertDesc'];
        }
        if (isset($map['AlertDescCode'])) {
            $model->alertDescCode = $map['AlertDescCode'];
        }
        if (isset($map['AlertDescEn'])) {
            $model->alertDescEn = $map['AlertDescEn'];
        }
        if (isset($map['AlertDetail'])) {
            $model->alertDetail = $map['AlertDetail'];
        }
        if (isset($map['AlertInfoList'])) {
            if (!empty($map['AlertInfoList'])) {
                $model->alertInfoList = [];
                $n                    = 0;
                foreach ($map['AlertInfoList'] as $item) {
                    $model->alertInfoList[$n++] = null !== $item ? alertInfoList::fromMap($item) : $item;
                }
            }
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
        if (isset($map['AssetList'])) {
            $model->assetList = $map['AssetList'];
        }
        if (isset($map['AttCk'])) {
            $model->attCk = $map['AttCk'];
        }
        if (isset($map['CloudCode'])) {
            $model->cloudCode = $map['CloudCode'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IncidentUuid'])) {
            $model->incidentUuid = $map['IncidentUuid'];
        }
        if (isset($map['IsDefend'])) {
            $model->isDefend = $map['IsDefend'];
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }

        return $model;
    }
}
