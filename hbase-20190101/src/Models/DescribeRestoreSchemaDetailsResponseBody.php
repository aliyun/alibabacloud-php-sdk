<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreSchemaDetailsResponseBody\restoreSchema;
use AlibabaCloud\Tea\Model;

class DescribeRestoreSchemaDetailsResponseBody extends Model
{
    /**
     * @var restoreSchema
     */
    public $restoreSchema;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'restoreSchema' => 'RestoreSchema',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->restoreSchema) {
            $res['RestoreSchema'] = null !== $this->restoreSchema ? $this->restoreSchema->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRestoreSchemaDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RestoreSchema'])) {
            $model->restoreSchema = restoreSchema::fromMap($map['RestoreSchema']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
