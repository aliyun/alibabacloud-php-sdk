<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\GetApprovalSchemaResponseBody\schema;
use AlibabaCloud\Tea\Model;

class GetApprovalSchemaResponseBody extends Model
{
    /**
     * @example EFE7EBB2-449D-5BBB-B381-CA7839BC1649
     *
     * @var string
     */
    public $requestId;

    /**
     * @var schema
     */
    public $schema;
    protected $_name = [
        'requestId' => 'RequestId',
        'schema' => 'Schema',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->schema) {
            $res['Schema'] = null !== $this->schema ? $this->schema->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetApprovalSchemaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Schema'])) {
            $model->schema = schema::fromMap($map['Schema']);
        }

        return $model;
    }
}
