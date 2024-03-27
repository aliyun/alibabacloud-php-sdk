<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListCustomizeRuleTestResultResponseBody\data;

use AlibabaCloud\Tea\Model;

class responseData extends Model
{
    /**
     * @description The description of the alert.
     *
     * @example The account you logged in this time is not in the legal account category defined by you. Please confirm the legality of the login behavior.
     *
     * @var string
     */
    public $alertDesc;

    /**
     * @description The alert details in the JSON format.
     *
     * @example {"main_user_id": "1652956297921019";"log_uuid_count": "99";"attack_ip": "218.92.0.97"}
     *
     * @var string
     */
    public $alertDetail;

    /**
     * @description The source of the alert.
     *
     * @example sas
     *
     * @var string
     */
    public $alertSrcProd;

    /**
     * @description The sub-module of the source.
     *
     * @example waf
     *
     * @var string
     */
    public $alertSrcProdModule;

    /**
     * @description The tag of the ATT\&CK attack.
     *
     * @example T1595.002 Vulnerability Scanning
     *
     * @var string
     */
    public $attCk;

    /**
     * @description The name of the alert, which corresponds to the name of the custom rule.
     *
     * @example waf_scan
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The threat type, which indicates the alert type.
     *
     * @example WEBSHELL
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The threat level. Valid values:
     *
     *   serious: high.
     *   suspicious: medium.
     *   remind: low.
     *
     * @example remind
     *
     * @var string
     */
    public $level;

    /**
     * @description The log source of the rule.
     *
     * @example cloud_siem_aegis_sas_alert
     *
     * @var string
     */
    public $logSource;

    /**
     * @description The time when the alert was recorded.
     *
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $logTime;

    /**
     * @description The log type of the rule.
     *
     * @example ALERT_ACTIVITY
     *
     * @var string
     */
    public $logType;

    /**
     * @description The ID of the Alibaba Cloud account that is associated with the alert in SIEM.
     *
     * @example 127608589417****
     *
     * @var string
     */
    public $mainUserId;

    /**
     * @description The status of the alert data. Valid values:
     *
     *   test: business test data.
     *   online: online data.
     *
     * @example test
     *
     * @var string
     */
    public $onlineStatus;

    /**
     * @description The ID of the Alibaba Cloud account within which the alert is generated.
     *
     * @example 176555323***
     *
     * @var string
     */
    public $subUserId;

    /**
     * @description The UUID of the alert.
     *
     * @example sas_71e24437d2797ce8fc59692905a4****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'alertDesc'          => 'AlertDesc',
        'alertDetail'        => 'AlertDetail',
        'alertSrcProd'       => 'AlertSrcProd',
        'alertSrcProdModule' => 'AlertSrcProdModule',
        'attCk'              => 'AttCk',
        'eventName'          => 'EventName',
        'eventType'          => 'EventType',
        'level'              => 'Level',
        'logSource'          => 'LogSource',
        'logTime'            => 'LogTime',
        'logType'            => 'LogType',
        'mainUserId'         => 'MainUserId',
        'onlineStatus'       => 'OnlineStatus',
        'subUserId'          => 'SubUserId',
        'uuid'               => 'Uuid',
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
        if (null !== $this->alertSrcProd) {
            $res['AlertSrcProd'] = $this->alertSrcProd;
        }
        if (null !== $this->alertSrcProdModule) {
            $res['AlertSrcProdModule'] = $this->alertSrcProdModule;
        }
        if (null !== $this->attCk) {
            $res['AttCk'] = $this->attCk;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->logSource) {
            $res['LogSource'] = $this->logSource;
        }
        if (null !== $this->logTime) {
            $res['LogTime'] = $this->logTime;
        }
        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }
        if (null !== $this->mainUserId) {
            $res['MainUserId'] = $this->mainUserId;
        }
        if (null !== $this->onlineStatus) {
            $res['OnlineStatus'] = $this->onlineStatus;
        }
        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['AlertDetail'])) {
            $model->alertDetail = $map['AlertDetail'];
        }
        if (isset($map['AlertSrcProd'])) {
            $model->alertSrcProd = $map['AlertSrcProd'];
        }
        if (isset($map['AlertSrcProdModule'])) {
            $model->alertSrcProdModule = $map['AlertSrcProdModule'];
        }
        if (isset($map['AttCk'])) {
            $model->attCk = $map['AttCk'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['LogSource'])) {
            $model->logSource = $map['LogSource'];
        }
        if (isset($map['LogTime'])) {
            $model->logTime = $map['LogTime'];
        }
        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }
        if (isset($map['MainUserId'])) {
            $model->mainUserId = $map['MainUserId'];
        }
        if (isset($map['OnlineStatus'])) {
            $model->onlineStatus = $map['OnlineStatus'];
        }
        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
