<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListIntegrationResponseBody\pageInfo\integrations;

use AlibabaCloud\Tea\Model;

class integrationDetail extends Model
{
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
     * @var mixed[][]
     */
    public $extendedFieldRedefineRules;

    /**
     * @var mixed[][]
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
    public $recoverTime;

    /**
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
