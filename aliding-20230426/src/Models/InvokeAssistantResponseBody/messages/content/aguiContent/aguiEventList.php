<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantResponseBody\messages\content\aguiContent;

use AlibabaCloud\Dara\Model;

class aguiEventList extends Model
{
    /**
     * @var string
     */
    public $activityType;

    /**
     * @var mixed
     */
    public $content;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var bool
     */
    public $replace;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'activityType' => 'activityType',
        'content' => 'content',
        'messageId' => 'messageId',
        'replace' => 'replace',
        'timestamp' => 'timestamp',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityType) {
            $res['activityType'] = $this->activityType;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->messageId) {
            $res['messageId'] = $this->messageId;
        }

        if (null !== $this->replace) {
            $res['replace'] = $this->replace;
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['activityType'])) {
            $model->activityType = $map['activityType'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['messageId'])) {
            $model->messageId = $map['messageId'];
        }

        if (isset($map['replace'])) {
            $model->replace = $map['replace'];
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
