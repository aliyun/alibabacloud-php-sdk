<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ListMemoryNodesResponseBody;

use AlibabaCloud\Dara\Model;

class memoryNodes extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $memoryNodeId;
    protected $_name = [
        'content' => 'content',
        'memoryNodeId' => 'memoryNodeId',
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

        if (null !== $this->memoryNodeId) {
            $res['memoryNodeId'] = $this->memoryNodeId;
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

        if (isset($map['memoryNodeId'])) {
            $model->memoryNodeId = $map['memoryNodeId'];
        }

        return $model;
    }
}
