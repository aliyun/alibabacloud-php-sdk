<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\CreateMemoryResponseBody\data;

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
    public $event;

    /**
     * @var string
     */
    public $memoryNodeId;

    /**
     * @var string
     */
    public $oldContent;
    protected $_name = [
        'content' => 'Content',
        'event' => 'Event',
        'memoryNodeId' => 'MemoryNodeId',
        'oldContent' => 'OldContent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }

        if (null !== $this->memoryNodeId) {
            $res['MemoryNodeId'] = $this->memoryNodeId;
        }

        if (null !== $this->oldContent) {
            $res['OldContent'] = $this->oldContent;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }

        if (isset($map['MemoryNodeId'])) {
            $model->memoryNodeId = $map['MemoryNodeId'];
        }

        if (isset($map['OldContent'])) {
            $model->oldContent = $map['OldContent'];
        }

        return $model;
    }
}
