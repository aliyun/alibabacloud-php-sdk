<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateIntegrationResponseBody;

use AlibabaCloud\Dara\Model;

class integration extends Model
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
     * @var int[]
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
        if (\is_array($this->extendedFieldRedefineRules)) {
            Model::validateArray($this->extendedFieldRedefineRules);
        }
        if (\is_array($this->fieldRedefineRules)) {
            Model::validateArray($this->fieldRedefineRules);
        }
        if (\is_array($this->stat)) {
            Model::validateArray($this->stat);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->extendedFieldRedefineRules)) {
                $res['ExtendedFieldRedefineRules'] = [];
                $n1                                = 0;
                foreach ($this->extendedFieldRedefineRules as $item1) {
                    if (\is_array($item1)) {
                        $res['ExtendedFieldRedefineRules'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['ExtendedFieldRedefineRules'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->fieldRedefineRules) {
            if (\is_array($this->fieldRedefineRules)) {
                $res['FieldRedefineRules'] = [];
                $n1                        = 0;
                foreach ($this->fieldRedefineRules as $item1) {
                    if (\is_array($item1)) {
                        $res['FieldRedefineRules'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['FieldRedefineRules'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
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
            if (\is_array($this->stat)) {
                $res['Stat'] = [];
                $n1          = 0;
                foreach ($this->stat as $item1) {
                    $res['Stat'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->extendedFieldRedefineRules = [];
                $n1                                = 0;
                foreach ($map['ExtendedFieldRedefineRules'] as $item1) {
                    if (!empty($item1)) {
                        $model->extendedFieldRedefineRules[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->extendedFieldRedefineRules[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (isset($map['FieldRedefineRules'])) {
            if (!empty($map['FieldRedefineRules'])) {
                $model->fieldRedefineRules = [];
                $n1                        = 0;
                foreach ($map['FieldRedefineRules'] as $item1) {
                    if (!empty($item1)) {
                        $model->fieldRedefineRules[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->fieldRedefineRules[$n1++][$key2] = $value2;
                        }
                    }
                }
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
                $model->stat = [];
                $n1          = 0;
                foreach ($map['Stat'] as $item1) {
                    $model->stat[$n1++] = $item1;
                }
            }
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
