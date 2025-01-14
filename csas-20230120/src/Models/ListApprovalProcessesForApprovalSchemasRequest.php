<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListApprovalProcessesForApprovalSchemasRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $schemaIds;
    protected $_name = [
        'schemaIds' => 'SchemaIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schemaIds) {
            $res['SchemaIds'] = $this->schemaIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApprovalProcessesForApprovalSchemasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SchemaIds'])) {
            if (!empty($map['SchemaIds'])) {
                $model->schemaIds = $map['SchemaIds'];
            }
        }

        return $model;
    }
}
