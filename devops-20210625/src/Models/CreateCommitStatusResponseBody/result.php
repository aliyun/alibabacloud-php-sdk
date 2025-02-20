<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateCommitStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateCommitStatusResponseBody\result\creator;

class result extends Model
{
    /**
     * @var string
     */
    public $context;
    /**
     * @var creator
     */
    public $creator;
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $sha;
    /**
     * @var string
     */
    public $state;
    /**
     * @var string
     */
    public $targetUrl;
    protected $_name = [
        'context'     => 'context',
        'creator'     => 'creator',
        'description' => 'description',
        'id'          => 'id',
        'sha'         => 'sha',
        'state'       => 'state',
        'targetUrl'   => 'targetUrl',
    ];

    public function validate()
    {
        if (null !== $this->creator) {
            $this->creator->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->context) {
            $res['context'] = $this->context;
        }

        if (null !== $this->creator) {
            $res['creator'] = null !== $this->creator ? $this->creator->toArray($noStream) : $this->creator;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->sha) {
            $res['sha'] = $this->sha;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->targetUrl) {
            $res['targetUrl'] = $this->targetUrl;
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
        if (isset($map['context'])) {
            $model->context = $map['context'];
        }

        if (isset($map['creator'])) {
            $model->creator = creator::fromMap($map['creator']);
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['sha'])) {
            $model->sha = $map['sha'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['targetUrl'])) {
            $model->targetUrl = $map['targetUrl'];
        }

        return $model;
    }
}
