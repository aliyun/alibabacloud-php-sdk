<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class WebhookCodeContext extends Model
{
    /**
     * @var string
     */
    public $branch;

    /**
     * @var string
     */
    public $commitID;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $prType;

    /**
     * @var string
     */
    public $repoUrl;

    /**
     * @var string
     */
    public $sourceBranch;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $targetBranch;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'branch' => 'branch',
        'commitID' => 'commitID',
        'description' => 'description',
        'eventType' => 'eventType',
        'message' => 'message',
        'prType' => 'prType',
        'repoUrl' => 'repoUrl',
        'sourceBranch' => 'sourceBranch',
        'tag' => 'tag',
        'targetBranch' => 'targetBranch',
        'title' => 'title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->branch) {
            $res['branch'] = $this->branch;
        }

        if (null !== $this->commitID) {
            $res['commitID'] = $this->commitID;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->eventType) {
            $res['eventType'] = $this->eventType;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->prType) {
            $res['prType'] = $this->prType;
        }

        if (null !== $this->repoUrl) {
            $res['repoUrl'] = $this->repoUrl;
        }

        if (null !== $this->sourceBranch) {
            $res['sourceBranch'] = $this->sourceBranch;
        }

        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
        }

        if (null !== $this->targetBranch) {
            $res['targetBranch'] = $this->targetBranch;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['branch'])) {
            $model->branch = $map['branch'];
        }

        if (isset($map['commitID'])) {
            $model->commitID = $map['commitID'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['eventType'])) {
            $model->eventType = $map['eventType'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['prType'])) {
            $model->prType = $map['prType'];
        }

        if (isset($map['repoUrl'])) {
            $model->repoUrl = $map['repoUrl'];
        }

        if (isset($map['sourceBranch'])) {
            $model->sourceBranch = $map['sourceBranch'];
        }

        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }

        if (isset($map['targetBranch'])) {
            $model->targetBranch = $map['targetBranch'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
