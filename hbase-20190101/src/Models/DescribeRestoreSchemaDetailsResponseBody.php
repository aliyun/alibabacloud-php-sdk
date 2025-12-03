<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreSchemaDetailsResponseBody\restoreSchema;

class DescribeRestoreSchemaDetailsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var restoreSchema
     */
    public $restoreSchema;
    protected $_name = [
        'requestId' => 'RequestId',
        'restoreSchema' => 'RestoreSchema',
    ];

    public function validate()
    {
        if (null !== $this->restoreSchema) {
            $this->restoreSchema->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->restoreSchema) {
            $res['RestoreSchema'] = null !== $this->restoreSchema ? $this->restoreSchema->toArray($noStream) : $this->restoreSchema;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RestoreSchema'])) {
            $model->restoreSchema = restoreSchema::fromMap($map['RestoreSchema']);
        }

        return $model;
    }
}
