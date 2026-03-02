<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class RepoItem extends Model
{
    /**
     * @var int
     */
    public $codeLines;

    /**
     * @var string
     */
    public $gitProjectUrl;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $repoShortUrl;

    /**
     * @var string
     */
    public $repoUrl;

    /**
     * @var string
     */
    public $summary;
    protected $_name = [
        'codeLines' => 'codeLines',
        'gitProjectUrl' => 'gitProjectUrl',
        'owner' => 'owner',
        'repoShortUrl' => 'repoShortUrl',
        'repoUrl' => 'repoUrl',
        'summary' => 'summary',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeLines) {
            $res['codeLines'] = $this->codeLines;
        }

        if (null !== $this->gitProjectUrl) {
            $res['gitProjectUrl'] = $this->gitProjectUrl;
        }

        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }

        if (null !== $this->repoShortUrl) {
            $res['repoShortUrl'] = $this->repoShortUrl;
        }

        if (null !== $this->repoUrl) {
            $res['repoUrl'] = $this->repoUrl;
        }

        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
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
        if (isset($map['codeLines'])) {
            $model->codeLines = $map['codeLines'];
        }

        if (isset($map['gitProjectUrl'])) {
            $model->gitProjectUrl = $map['gitProjectUrl'];
        }

        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }

        if (isset($map['repoShortUrl'])) {
            $model->repoShortUrl = $map['repoShortUrl'];
        }

        if (isset($map['repoUrl'])) {
            $model->repoUrl = $map['repoUrl'];
        }

        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }

        return $model;
    }
}
