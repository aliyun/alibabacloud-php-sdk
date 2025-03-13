<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListCommitStatusesResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListCommitStatusesResponseBody\result\creator;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example test-commit-status-context
     *
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
     * @example 19285
     *
     * @var int
     */
    public $id;

    /**
     * @example 61cc69557962d29f737a91730b3e86f497f083a3
     *
     * @var string
     */
    public $sha;

    /**
     * @example success
     *
     * @var string
     */
    public $state;

    /**
     * @example xxx
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->context) {
            $res['context'] = $this->context;
        }
        if (null !== $this->creator) {
            $res['creator'] = null !== $this->creator ? $this->creator->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return result
     */
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
