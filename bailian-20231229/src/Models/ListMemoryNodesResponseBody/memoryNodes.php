<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ListMemoryNodesResponseBody;

use AlibabaCloud\Tea\Model;

class memoryNodes extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example 68de06c95368463a8be4a84efc872cc5
     *
     * @var string
     */
    public $memoryNodeId;
    protected $_name = [
        'content'      => 'content',
        'memoryNodeId' => 'memoryNodeId',
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
        if (null !== $this->memoryNodeId) {
            $res['memoryNodeId'] = $this->memoryNodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return memoryNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['memoryNodeId'])) {
            $model->memoryNodeId = $map['memoryNodeId'];
        }

        return $model;
    }
}
