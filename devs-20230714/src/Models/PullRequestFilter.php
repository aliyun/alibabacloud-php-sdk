<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class PullRequestFilter extends Model
{
    /**
     * @example feature-.*
     *
     * @var string
     */
    public $sourceBranch;

    /**
     * @example master
     *
     * @var string
     */
    public $targetBranch;

    /**
     * @var string[]
     */
    public $types;
    protected $_name = [
        'sourceBranch' => 'sourceBranch',
        'targetBranch' => 'targetBranch',
        'types'        => 'types',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceBranch) {
            $res['sourceBranch'] = $this->sourceBranch;
        }
        if (null !== $this->targetBranch) {
            $res['targetBranch'] = $this->targetBranch;
        }
        if (null !== $this->types) {
            $res['types'] = $this->types;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PullRequestFilter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['sourceBranch'])) {
            $model->sourceBranch = $map['sourceBranch'];
        }
        if (isset($map['targetBranch'])) {
            $model->targetBranch = $map['targetBranch'];
        }
        if (isset($map['types'])) {
            if (!empty($map['types'])) {
                $model->types = $map['types'];
            }
        }

        return $model;
    }
}
