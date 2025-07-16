<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageResponseBody\messages\content;
use AlibabaCloud\Tea\Model;

class messages extends Model
{
    /**
     * @var content
     */
    public $content;

    /**
     * @example 这是一张小猫钓鱼图
     *
     * @var string
     */
    public $contentDesc;

    /**
     * @example 1642448000000
     *
     * @var int
     */
    public $createAt;

    /**
     * @example messageId1
     *
     * @var string
     */
    public $id;

    /**
     * @example user
     *
     * @var string
     */
    public $role;

    /**
     * @example runId1
     *
     * @var string
     */
    public $runId;

    /**
     * @example threadId1
     *
     * @var string
     */
    public $threadId;
    protected $_name = [
        'content' => 'content',
        'contentDesc' => 'contentDesc',
        'createAt' => 'createAt',
        'id' => 'id',
        'role' => 'role',
        'runId' => 'runId',
        'threadId' => 'threadId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = null !== $this->content ? $this->content->toMap() : null;
        }
        if (null !== $this->contentDesc) {
            $res['contentDesc'] = $this->contentDesc;
        }
        if (null !== $this->createAt) {
            $res['createAt'] = $this->createAt;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }
        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
        }
        if (null !== $this->threadId) {
            $res['threadId'] = $this->threadId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return messages
     */
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['role'])) {
            $model->role = $map['role'];
        }
        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }
        if (isset($map['threadId'])) {
            $model->threadId = $map['threadId'];
        }

        return $model;
    }
}
