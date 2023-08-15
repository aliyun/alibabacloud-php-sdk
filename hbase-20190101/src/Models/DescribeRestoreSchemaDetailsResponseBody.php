<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreSchemaDetailsResponseBody\restoreSchema;
use AlibabaCloud\Tea\Model;

class DescribeRestoreSchemaDetailsResponseBody extends Model
{
    /**
     * @example BC682A80-7677-4294-975C-CFEA425381DE
     *
     * @var string
     */
    public $requestId;

    /**
     * @var restoreSchema
     */
    public $restoreSchema;
    protected $_name = [
        'requestId'     => 'RequestId',
        'restoreSchema' => 'RestoreSchema',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->restoreSchema) {
            $res['RestoreSchema'] = null !== $this->restoreSchema ? $this->restoreSchema->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RestoreSchema'])) {
            $model->restoreSchema = restoreSchema::fromMap($map['RestoreSchema']);
        }

        return $model;
    }
}
