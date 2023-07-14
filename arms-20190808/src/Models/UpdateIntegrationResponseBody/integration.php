<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateIntegrationResponseBody;

use AlibabaCloud\Tea\Model;

class integration extends Model
{
    /**
     * @description The endpoint of the alert integration.
     *
     * @example https://alerts.aliyuncs.com/api/v1/integrations/custom/ymQBN******
     *
     * @var string
     */
    public $apiEndpoint;

    /**
     * @description Indicates whether alert events are automatically cleared. Valid values:
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
     * @description The extended mapped fields of the alert source.
     *
     * @var mixed[][]
     */
    public $extendedFieldRedefineRules;

    /**
     * @description The predefined mapped fields of the alert source.
     *
     * @var mixed[][]
     */
    public $fieldRedefineRules;

    /**
     * @description The field for clearing alert events. The system queries alert events based on the field of alert clearing events and clears the alert events.
     *
     * > Only Log Service supports this parameter.
     * @example $.status
     *
     * @var string
     */
    public $initiativeRecoverField;

    /**
     * @description The value of the field for clearing alert events. The system queries alert events based on the field of alert clearing events and clears the alert events.
     *
     * > Only Log Service supports this parameter.
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
     * @description The time when alert events are automatically cleared. Unit: seconds. Default value: 300.
     *
     * @example 300
     *
     * @var int
     */
    public $recoverTime;

    /**
     * @description The authentication token of the alert integration.
     *
     * @example ymQBN******
     *
     * @var string
     */
    public $shortToken;

    /**
     * @description The total number of alert events and the number of abnormal alert events in the last hour.
     *
     * @var int[]
     */
    public $stat;

    /**
     * @description Indicates whether the alert integration is enabled. Valid values:
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
        'apiEndpoint'                => 'ApiEndpoint',
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
        'shortToken'                 => 'ShortToken',
        'stat'                       => 'Stat',
        'state'                      => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiEndpoint) {
            $res['ApiEndpoint'] = $this->apiEndpoint;
        }
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
        if (null !== $this->shortToken) {
            $res['ShortToken'] = $this->shortToken;
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
     * @return integration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiEndpoint'])) {
            $model->apiEndpoint = $map['ApiEndpoint'];
        }
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
            if (!empty($map['ExtendedFieldRedefineRules'])) {
                $model->extendedFieldRedefineRules = $map['ExtendedFieldRedefineRules'];
            }
        }
        if (isset($map['FieldRedefineRules'])) {
            if (!empty($map['FieldRedefineRules'])) {
                $model->fieldRedefineRules = $map['FieldRedefineRules'];
            }
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
        if (isset($map['ShortToken'])) {
            $model->shortToken = $map['ShortToken'];
        }
        if (isset($map['Stat'])) {
            if (!empty($map['Stat'])) {
                $model->stat = $map['Stat'];
            }
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
