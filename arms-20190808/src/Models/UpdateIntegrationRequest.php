<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdateIntegrationRequest extends Model
{
    /**
     * @description Specifies whether to automatically clear alert events. Valid values:
     *
     *   true (default)
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $autoRecover;

    /**
     * @description The description of the alert integration.
     *
     * @example Test
     *
     * @var string
     */
    public $description;

    /**
     * @description The fields whose values are deduplicated.
     *
     * @example LABEL.dimensions::LABEL.ruleId
     *
     * @var string
     */
    public $duplicateKey;

    /**
     * @description The extended mapped fields are mapped to the fields of ARMS alerts. For more information, see the description of the ExtendedFieldRedefineRules parameter.
     *
     * @example [
     * ]
     * @var string
     */
    public $extendedFieldRedefineRules;

    /**
     * @description The predefined mapped fields are mapped to the fields of ARMS alerts. The predefined mapped fields were generated when the alert integration was created. For more information, see the description of the FieldRedefineRules parameter.
     *
     * @example \[ { "redefineType":"EXTRACT", "matchExpression":null, "fieldName":"alertname", "expression":null, "mappingRuleList":\[ ], "name":"Alert name", "integrationId":1234, "jsonPath":"$.alertName", "id":10001, "fieldType":"LABEL" }, { "redefineType":"MAP", "matchExpression":null, "fieldName":"severity", "expression":null, "mappingRuleList":\[ { "mappingValue":"critical", "mappingName":"P1", "mappingType":"MAP", "originValue":"CRITICAL" }, { "mappingValue":"error", "mappingName":"P2", "mappingType":"MAP", "originValue":"WARN" }, { "mappingValue":"warning", "mappingName":"P3", "mappingType":"MAP", "originValue":"INFO" } ], "name":"Alert level", "integrationId":1234, "jsonPath":"$.triggerLevel", "id":10002, "fieldType":"LABEL" }, { "redefineType":"EXTRACT", "matchExpression":null, "fieldName":"message", "expression":"{{$labels.namespace}} / {{$labels.dimensions}} Alert content {{ $labels.alertname }}, Current value {{$value}}.", "mappingRuleList":\[ ], "name":"Alert description", "integrationId":1234, "jsonPath":null, "id":10003, "fieldType":"ANNOTATION" }, { "redefineType":"EXTRACT", "matchExpression":null, "fieldName":"value", "expression":null, "mappingRuleList":\[ ], "name":"Alert sample value", "integrationId":1234, "jsonPath":"$.curValue", "id":10004, "fieldType":"ANNOTATION" }, { "redefineType":"EXTRACT", "matchExpression":null, "fieldName":"source", "expression":null, "mappingRuleList":\[ ], "name":"Source", "integrationId":1234, "jsonPath":null, "id":10007, "fieldType":"LABEL" }, { "redefineType":"ADD", "matchExpression":null, "fieldName":"generatorUrl", "expression":"https://cloudmonitor.console.aliyun.com/index.htm#/alarmInfo/name={{$labels.ruleId}}\&searchValue=\&searchType=name\&searchProduct=/history/all/searchKey:{{$labels.ruleId}},startTime:{{sub $startsAt 300000}},endTime:{{$endsAt}}", "mappingRuleList":\[ ], "name":"Event URL", "integrationId":1234, "jsonPath":"https://cloudmonitor.console.aliyun.com/index.htm#/alarmInfo/name={{$labels.ruleId}}\&searchValue=\&searchType=name\&searchProduct=/history/all/searchKey:{{$labels.ruleId}},startTime:{{sub $startsAt 300000}},endTime:{{$endsAt}}", "id":10012, "fieldType":"GENERATE_URL" } ]
     *
     * @var string
     */
    public $fieldRedefineRules;

    /**
     * @description The field for clearing alert events. The system queries alert events based on the field of alert clearing events and clears the alert events.
     *
     * > Only the Log Service alert integration supports the parameter.
     * @example $.status
     *
     * @var string
     */
    public $initiativeRecoverField;

    /**
     * @description The value of the field for clearing alert events. The system queries alert events based on the field of alert clearing events and clears the alert events.
     *
     * > Only the Log Service alert integration supports the parameter.
     * @example ok
     *
     * @var string
     */
    public $initiativeRecoverValue;

    /**
     * @description The ID of the alert integration.
     *
     * @example 1234
     *
     * @var int
     */
    public $integrationId;

    /**
     * @description The name of the alert integration.
     *
     * @example CloudMonitor integration
     *
     * @var string
     */
    public $integrationName;

    /**
     * @description The service of the alert integration. Valid values:
     *
     *   CLOUD_MONITOR: CloudMonitor
     *   LOG_SERVICE: Log Service
     *
     * @example CLOUD_MONITOR
     *
     * @var string
     */
    public $integrationProductType;

    /**
     * @description The activity of the alert integration
     *
     * @example ready
     *
     * @var string
     */
    public $liveness;

    /**
     * @description The period of time within which alert events are automatically cleared. Unit: seconds. Default value: 300.
     *
     * @example 300
     *
     * @var int
     */
    public $recoverTime;

    /**
     * @description The total number of alert events and the number of abnormal alert events in the last hour.
     *
     * @example [0,0]
     *
     * @var string
     */
    public $stat;

    /**
     * @description Indicates whether the alert integration was enabled. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $state;
    protected $_name = [
        'autoRecover'                => 'AutoRecover',
        'description'                => 'Description',
        'duplicateKey'               => 'DuplicateKey',
        'extendedFieldRedefineRules' => 'ExtendedFieldRedefineRules',
        'fieldRedefineRules'         => 'FieldRedefineRules',
        'initiativeRecoverField'     => 'InitiativeRecoverField',
        'initiativeRecoverValue'     => 'InitiativeRecoverValue',
        'integrationId'              => 'IntegrationId',
        'integrationName'            => 'IntegrationName',
        'integrationProductType'     => 'IntegrationProductType',
        'liveness'                   => 'Liveness',
        'recoverTime'                => 'RecoverTime',
        'stat'                       => 'Stat',
        'state'                      => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRecover) {
            $res['AutoRecover'] = $this->autoRecover;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->duplicateKey) {
            $res['DuplicateKey'] = $this->duplicateKey;
        }
        if (null !== $this->extendedFieldRedefineRules) {
            $res['ExtendedFieldRedefineRules'] = $this->extendedFieldRedefineRules;
        }
        if (null !== $this->fieldRedefineRules) {
            $res['FieldRedefineRules'] = $this->fieldRedefineRules;
        }
        if (null !== $this->initiativeRecoverField) {
            $res['InitiativeRecoverField'] = $this->initiativeRecoverField;
        }
        if (null !== $this->initiativeRecoverValue) {
            $res['InitiativeRecoverValue'] = $this->initiativeRecoverValue;
        }
        if (null !== $this->integrationId) {
            $res['IntegrationId'] = $this->integrationId;
        }
        if (null !== $this->integrationName) {
            $res['IntegrationName'] = $this->integrationName;
        }
        if (null !== $this->integrationProductType) {
            $res['IntegrationProductType'] = $this->integrationProductType;
        }
        if (null !== $this->liveness) {
            $res['Liveness'] = $this->liveness;
        }
        if (null !== $this->recoverTime) {
            $res['RecoverTime'] = $this->recoverTime;
        }
        if (null !== $this->stat) {
            $res['Stat'] = $this->stat;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateIntegrationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRecover'])) {
            $model->autoRecover = $map['AutoRecover'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DuplicateKey'])) {
            $model->duplicateKey = $map['DuplicateKey'];
        }
        if (isset($map['ExtendedFieldRedefineRules'])) {
            $model->extendedFieldRedefineRules = $map['ExtendedFieldRedefineRules'];
        }
        if (isset($map['FieldRedefineRules'])) {
            $model->fieldRedefineRules = $map['FieldRedefineRules'];
        }
        if (isset($map['InitiativeRecoverField'])) {
            $model->initiativeRecoverField = $map['InitiativeRecoverField'];
        }
        if (isset($map['InitiativeRecoverValue'])) {
            $model->initiativeRecoverValue = $map['InitiativeRecoverValue'];
        }
        if (isset($map['IntegrationId'])) {
            $model->integrationId = $map['IntegrationId'];
        }
        if (isset($map['IntegrationName'])) {
            $model->integrationName = $map['IntegrationName'];
        }
        if (isset($map['IntegrationProductType'])) {
            $model->integrationProductType = $map['IntegrationProductType'];
        }
        if (isset($map['Liveness'])) {
            $model->liveness = $map['Liveness'];
        }
        if (isset($map['RecoverTime'])) {
            $model->recoverTime = $map['RecoverTime'];
        }
        if (isset($map['Stat'])) {
            $model->stat = $map['Stat'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
