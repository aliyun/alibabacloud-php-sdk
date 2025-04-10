<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class GetMemoryNodeResponseBody extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $memoryId;

    /**
     * @var string
     */
    public $memoryNodeId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'content' => 'content',
        'memoryId' => 'memoryId',
        'memoryNodeId' => 'memoryNodeId',
        'requestId' => 'requestId',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
