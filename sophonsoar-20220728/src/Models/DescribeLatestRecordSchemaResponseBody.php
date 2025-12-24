<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeLatestRecordSchemaResponseBody\playbookNodeSchema;

class DescribeLatestRecordSchemaResponseBody extends Model
{
    /**
     * @var playbookNodeSchema
     */
    public $playbookNodeSchema;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'playbookNodeSchema' => 'PlaybookNodeSchema',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->playbookNodeSchema) {
            $this->playbookNodeSchema->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->playbookNodeSchema) {
            $res['PlaybookNodeSchema'] = null !== $this->playbookNodeSchema ? $this->playbookNodeSchema->toArray($noStream) : $this->playbookNodeSchema;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['PlaybookNodeSchema'])) {
            $model->playbookNodeSchema = playbookNodeSchema::fromMap($map['PlaybookNodeSchema']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
