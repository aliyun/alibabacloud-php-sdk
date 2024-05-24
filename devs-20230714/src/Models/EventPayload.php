<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class EventPayload extends Model
{
    /**
     * @var CodeupEventPayload
     */
    public $codeup;

    /**
     * @var GiteeEventPayload
     */
    public $gitee;

    /**
     * @var GithubEventPayload
     */
    public $github;

    /**
     * @var GitlabEventPayload
     */
    public $gitlab;

    /**
     * @var ManualEventPayload
     */
    public $manual;
    protected $_name = [
        'codeup' => 'codeup',
        'gitee'  => 'gitee',
        'github' => 'github',
        'gitlab' => 'gitlab',
        'manual' => 'manual',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeup) {
            $res['codeup'] = null !== $this->codeup ? $this->codeup->toMap() : null;
        }
        if (null !== $this->gitee) {
            $res['gitee'] = null !== $this->gitee ? $this->gitee->toMap() : null;
        }
        if (null !== $this->github) {
            $res['github'] = null !== $this->github ? $this->github->toMap() : null;
        }
        if (null !== $this->gitlab) {
            $res['gitlab'] = null !== $this->gitlab ? $this->gitlab->toMap() : null;
        }
        if (null !== $this->manual) {
            $res['manual'] = null !== $this->manual ? $this->manual->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EventPayload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['codeup'])) {
            $model->codeup = CodeupEventPayload::fromMap($map['codeup']);
        }
        if (isset($map['gitee'])) {
            $model->gitee = GiteeEventPayload::fromMap($map['gitee']);
        }
        if (isset($map['github'])) {
            $model->github = GithubEventPayload::fromMap($map['github']);
        }
        if (isset($map['gitlab'])) {
            $model->gitlab = GitlabEventPayload::fromMap($map['gitlab']);
        }
        if (isset($map['manual'])) {
            $model->manual = ManualEventPayload::fromMap($map['manual']);
        }

        return $model;
    }
}
