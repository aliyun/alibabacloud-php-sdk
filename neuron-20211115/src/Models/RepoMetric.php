<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class RepoMetric extends Model
{
    /**
     * @var int
     */
    public $codeLines;

    /**
     * @var int
     */
    public $commitCnt;

    /**
     * @var int
     */
    public $developerCnt;

    /**
     * @var string
     */
    public $refreshDate;

    /**
     * @var string
     */
    public $repoShortUrl;

    /**
     * @var string
     */
    public $repoUrl;
    protected $_name = [
        'codeLines' => 'codeLines',
        'commitCnt' => 'commitCnt',
        'developerCnt' => 'developerCnt',
        'refreshDate' => 'refreshDate',
        'repoShortUrl' => 'repoShortUrl',
        'repoUrl' => 'repoUrl',
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

        if (null !== $this->commitCnt) {
            $res['commitCnt'] = $this->commitCnt;
        }

        if (null !== $this->developerCnt) {
            $res['developerCnt'] = $this->developerCnt;
        }

        if (null !== $this->refreshDate) {
            $res['refreshDate'] = $this->refreshDate;
        }

        if (null !== $this->repoShortUrl) {
            $res['repoShortUrl'] = $this->repoShortUrl;
        }

        if (null !== $this->repoUrl) {
            $res['repoUrl'] = $this->repoUrl;
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

        if (isset($map['commitCnt'])) {
            $model->commitCnt = $map['commitCnt'];
        }

        if (isset($map['developerCnt'])) {
            $model->developerCnt = $map['developerCnt'];
        }

        if (isset($map['refreshDate'])) {
            $model->refreshDate = $map['refreshDate'];
        }

        if (isset($map['repoShortUrl'])) {
            $model->repoShortUrl = $map['repoShortUrl'];
        }

        if (isset($map['repoUrl'])) {
            $model->repoUrl = $map['repoUrl'];
        }

        return $model;
    }
}
