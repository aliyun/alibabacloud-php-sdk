<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class ListApprovalProcessesForApprovalSchemasRequest extends Model
{
    /**
     * @var string[]
     */
    public $schemaIds;
    protected $_name = [
        'schemaIds' => 'SchemaIds',
    ];

    public function validate()
    {
        if (\is_array($this->schemaIds)) {
            Model::validateArray($this->schemaIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->schemaIds) {
            if (\is_array($this->schemaIds)) {
                $res['SchemaIds'] = [];
                $n1 = 0;
                foreach ($this->schemaIds as $item1) {
                    $res['SchemaIds'][$n1++] = $item1;
                }
            }
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
        if (isset($map['SchemaIds'])) {
            if (!empty($map['SchemaIds'])) {
                $model->schemaIds = [];
                $n1 = 0;
                foreach ($map['SchemaIds'] as $item1) {
                    $model->schemaIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
