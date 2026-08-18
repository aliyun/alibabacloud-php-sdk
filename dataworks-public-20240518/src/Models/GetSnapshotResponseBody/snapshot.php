<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetSnapshotResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetSnapshotResponseBody\snapshot\content;

class snapshot extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var content
     */
    public $content;

    /**
     * @var string
     */
    public $contentUrl;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'comment' => 'Comment',
        'content' => 'Content',
        'contentUrl' => 'ContentUrl',
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'id' => 'Id',
        'namespace' => 'Namespace',
        'objectId' => 'ObjectId',
        'type' => 'Type',
        'version' => 'Version',
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
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->content) {
            $res['Content'] = null !== $this->content ? $this->content->toArray($noStream) : $this->content;
        }

        if (null !== $this->contentUrl) {
            $res['ContentUrl'] = $this->contentUrl;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['Content'])) {
            $model->content = content::fromMap($map['Content']);
        }

        if (isset($map['ContentUrl'])) {
            $model->contentUrl = $map['ContentUrl'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
