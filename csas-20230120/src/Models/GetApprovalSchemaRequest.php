<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class GetApprovalSchemaRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example approval-schema-090134f1ebff****
     *
     * @var string
     */
    public $schemaId;
    protected $_name = [
        'schemaId' => 'SchemaId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->schemaId) {
            $res['SchemaId'] = $this->schemaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetApprovalSchemaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SchemaId'])) {
            $model->schemaId = $map['SchemaId'];
        }

        return $model;
    }
}
