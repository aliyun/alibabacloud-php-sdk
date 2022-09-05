<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdateIntegrationRequest extends Model
{
    /**
     * @var string
     */
    public $apiEndpoint;

    /**
     * @var bool
     */
    public $autoRecover;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $duplicateKey;

    /**
     * @var string
     */
    public $extendedFieldRedefineRules;

    /**
     * @var string
     */
    public $fieldRedefineRules;

    /**
     * @var string
     */
    public $initiativeRecoverField;

    /**
     * @var string
     */
    public $initiativeRecoverValue;

    /**
     * @var int
     */
    public $integrationId;

    /**
     * @var string
     */
    public $integrationName;

    /**
     * @var string
     */
    public $integrationProductType;

    /**
     * @var string
     */
    public $liveness;

    /**
     * @var int
     */
    public $recoverTime;

    /**
     * @var string
     */
    public $shortToken;

    /**
     * @var string
     */
    public $stat;

    /**
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
     * @return UpdateIntegrationRequest
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
        if (isset($map['ShortToken'])) {
            $model->shortToken = $map['ShortToken'];
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
