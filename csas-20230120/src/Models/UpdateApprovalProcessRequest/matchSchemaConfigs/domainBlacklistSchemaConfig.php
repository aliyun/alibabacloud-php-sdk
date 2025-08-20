<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessRequest\matchSchemaConfigs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessRequest\matchSchemaConfigs\domainBlacklistSchemaConfig\fieldMap;

class domainBlacklistSchemaConfig extends Model
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
     * @var string
     */
    public $schemaId;
    protected $_name = [
        'externalProcessId' => 'ExternalProcessId',
        'fieldMap' => 'FieldMap',
        'schemaId' => 'SchemaId',
    ];

    public function validate()
    {
        if (\is_array($this->fieldMap)) {
            Model::validateArray($this->fieldMap);
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

        if (isset($map['SchemaId'])) {
            $model->schemaId = $map['SchemaId'];
        }

        return $model;
    }
}
