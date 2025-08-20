<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetApprovalProcessResponseBody\process;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetApprovalProcessResponseBody\process\softwareHardeningPolicies\fieldMap;

class softwareHardeningPolicies extends Model
{
    /**
     * @var string
     */
    public $externalProcessId;

    /**
     * @var fieldMap[]
     */
    public $fieldMap;

    /**
     * @var string[]
     */
    public $policyIds;

    /**
     * @var string
     */
    public $schemaId;
    protected $_name = [
        'externalProcessId' => 'ExternalProcessId',
        'fieldMap' => 'FieldMap',
        'policyIds' => 'PolicyIds',
        'schemaId' => 'SchemaId',
    ];

    public function validate()
    {
        if (\is_array($this->fieldMap)) {
            Model::validateArray($this->fieldMap);
        }
        if (\is_array($this->policyIds)) {
            Model::validateArray($this->policyIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->externalProcessId) {
            $res['ExternalProcessId'] = $this->externalProcessId;
        }

        if (null !== $this->fieldMap) {
            if (\is_array($this->fieldMap)) {
                $res['FieldMap'] = [];
                $n1 = 0;
                foreach ($this->fieldMap as $item1) {
                    $res['FieldMap'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->policyIds) {
            if (\is_array($this->policyIds)) {
                $res['PolicyIds'] = [];
                $n1 = 0;
                foreach ($this->policyIds as $item1) {
                    $res['PolicyIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->schemaId) {
            $res['SchemaId'] = $this->schemaId;
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
        if (isset($map['ExternalProcessId'])) {
            $model->externalProcessId = $map['ExternalProcessId'];
        }

        if (isset($map['FieldMap'])) {
            if (!empty($map['FieldMap'])) {
                $model->fieldMap = [];
                $n1 = 0;
                foreach ($map['FieldMap'] as $item1) {
                    $model->fieldMap[$n1] = fieldMap::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PolicyIds'])) {
            if (!empty($map['PolicyIds'])) {
                $model->policyIds = [];
                $n1 = 0;
                foreach ($map['PolicyIds'] as $item1) {
                    $model->policyIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SchemaId'])) {
            $model->schemaId = $map['SchemaId'];
        }

        return $model;
    }
}
