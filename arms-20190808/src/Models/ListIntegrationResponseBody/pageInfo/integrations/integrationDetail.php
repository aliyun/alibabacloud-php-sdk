<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListIntegrationResponseBody\pageInfo\integrations;

use AlibabaCloud\Tea\Model;

class integrationDetail extends Model
{
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
     * @example LABEL.alertname::LABEL.severity
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
     * @description The time when alert events are automatically cleared. Unit: seconds. Default value: 300.
     *
     * @example 300
     *
     * @var int
     */
    public $recoverTime;

    /**
     * @description The total number of alert events and the number of abnormal alert events in the last hour.
     *
     * @var int[]
     */
    public $stat;
    protected $_name = [
        'autoRecover'                => 'AutoRecover',
        'description'                => 'Description',
        'duplicateKey'               => 'DuplicateKey',
        'extendedFieldRedefineRules' => 'ExtendedFieldRedefineRules',
        'fieldRedefineRules'         => 'FieldRedefineRules',
        'initiativeRecoverField'     => 'InitiativeRecoverField',
        'initiativeRecoverValue'     => 'InitiativeRecoverValue',
        'recoverTime'                => 'RecoverTime',
        'stat'                       => 'Stat',
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
        if (null !== $this->recoverTime) {
            $res['RecoverTime'] = $this->recoverTime;
        }
        if (null !== $this->stat) {
            $res['Stat'] = $this->stat;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return integrationDetail
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
        if (isset($map['RecoverTime'])) {
            $model->recoverTime = $map['RecoverTime'];
        }
        if (isset($map['Stat'])) {
            if (!empty($map['Stat'])) {
                $model->stat = $map['Stat'];
            }
        }

        return $model;
    }
}
