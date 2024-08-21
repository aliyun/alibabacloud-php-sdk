<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class GetMemoryResponseBody extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example 6bff4f317a14442fbc9f73d29dbd5fc3
     *
     * @var string
     */
    public $memoryId;

    /**
     * @example 6a71f2d9-f1c9-913b-818b-114029103cad
     *
     * @var string
     */
    public $requestId;

    /**
     * @example llm-us9hjmt32nysdm5v
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'description' => 'description',
        'memoryId'    => 'memoryId',
        'requestId'   => 'requestId',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->memoryId) {
            $res['memoryId'] = $this->memoryId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMemoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['memoryId'])) {
            $model->memoryId = $map['memoryId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
