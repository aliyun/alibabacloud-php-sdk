<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeLatestRecordSchemaResponseBody\playbookNodeSchema;
use AlibabaCloud\Tea\Model;

class DescribeLatestRecordSchemaResponseBody extends Model
{
    /**
     * @var playbookNodeSchema
     */
    public $playbookNodeSchema;

    /**
     * @example 10B92EE1-4597-593B-A131-7A17D25EF5C9
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'playbookNodeSchema' => 'PlaybookNodeSchema',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->playbookNodeSchema) {
            $res['PlaybookNodeSchema'] = null !== $this->playbookNodeSchema ? $this->playbookNodeSchema->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLatestRecordSchemaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlaybookNodeSchema'])) {
            $model->playbookNodeSchema = playbookNodeSchema::fromMap($map['PlaybookNodeSchema']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
