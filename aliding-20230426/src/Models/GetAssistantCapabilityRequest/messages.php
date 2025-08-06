<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityRequest\messages\content;

class messages extends Model
{
    /**
     * @var content
     */
    public $content;

    /**
     * @var string
     */
    public $contentDesc;

    /**
     * @var int
     */
    public $createAt;

    /**
     * @var string
     */
    public $role;
    protected $_name = [
        'content' => 'content',
        'contentDesc' => 'contentDesc',
        'createAt' => 'createAt',
        'role' => 'role',
    ];

    public function validate()
    {
        if (null !== $this->content) {
            $this->content->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = null !== $this->content ? $this->content->toArray($noStream) : $this->content;
        }

        if (null !== $this->contentDesc) {
            $res['contentDesc'] = $this->contentDesc;
        }

        if (null !== $this->createAt) {
            $res['createAt'] = $this->createAt;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
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
            $model->content = content::fromMap($map['content']);
        }

        if (isset($map['contentDesc'])) {
            $model->contentDesc = $map['contentDesc'];
        }

        if (isset($map['createAt'])) {
            $model->createAt = $map['createAt'];
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        return $model;
    }
}
