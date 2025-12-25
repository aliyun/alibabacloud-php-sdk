<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetThreadResponseBody\variables;

class GetThreadResponseBody extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $digitalEmployeeName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $threadId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var variables
     */
    public $variables;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'createTime' => 'createTime',
        'digitalEmployeeName' => 'digitalEmployeeName',
        'requestId' => 'requestId',
        'status' => 'status',
        'threadId' => 'threadId',
        'title' => 'title',
        'updateTime' => 'updateTime',
        'variables' => 'variables',
        'version' => 'version',
    ];

    public function validate()
    {
        if (null !== $this->variables) {
            $this->variables->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->digitalEmployeeName) {
            $res['digitalEmployeeName'] = $this->digitalEmployeeName;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->threadId) {
            $res['threadId'] = $this->threadId;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->variables) {
            $res['variables'] = null !== $this->variables ? $this->variables->toArray($noStream) : $this->variables;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['digitalEmployeeName'])) {
            $model->digitalEmployeeName = $map['digitalEmployeeName'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['threadId'])) {
            $model->threadId = $map['threadId'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['variables'])) {
            $model->variables = variables::fromMap($map['variables']);
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
