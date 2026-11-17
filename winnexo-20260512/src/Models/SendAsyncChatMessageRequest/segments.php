<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\SendAsyncChatMessageRequest;

use AlibabaCloud\Dara\Model;

class segments extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $mentionType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $sessionType;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'content' => 'content',
        'mentionType' => 'mentionType',
        'name' => 'name',
        'objectId' => 'objectId',
        'objectType' => 'objectType',
        'sessionType' => 'sessionType',
        'type' => 'type',
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

        if (null !== $this->mentionType) {
            $res['mentionType'] = $this->mentionType;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->objectId) {
            $res['objectId'] = $this->objectId;
        }

        if (null !== $this->objectType) {
            $res['objectType'] = $this->objectType;
        }

        if (null !== $this->sessionType) {
            $res['sessionType'] = $this->sessionType;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['mentionType'])) {
            $model->mentionType = $map['mentionType'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['objectId'])) {
            $model->objectId = $map['objectId'];
        }

        if (isset($map['objectType'])) {
            $model->objectType = $map['objectType'];
        }

        if (isset($map['sessionType'])) {
            $model->sessionType = $map['sessionType'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
