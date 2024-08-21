<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class GetMemoryNodeResponseBody extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example 6bff4f317a14442fbc9f73d29dbd5fc3
     *
     * @var string
     */
    public $memoryId;

    /**
     * @example 68de06c95368463a8be4a84efc872cc5
     *
     * @var string
     */
    public $memoryNodeId;

    /**
     * @example 8C56C7AF-6573-19CE-B018-E05E1EDCF4C5
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
        'content'      => 'content',
        'memoryId'     => 'memoryId',
        'memoryNodeId' => 'memoryNodeId',
        'requestId'    => 'requestId',
        'workspaceId'  => 'workspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->memoryId) {
            $res['memoryId'] = $this->memoryId;
        }
        if (null !== $this->memoryNodeId) {
            $res['memoryNodeId'] = $this->memoryNodeId;
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
     * @return GetMemoryNodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['memoryId'])) {
            $model->memoryId = $map['memoryId'];
        }
        if (isset($map['memoryNodeId'])) {
            $model->memoryNodeId = $map['memoryNodeId'];
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
