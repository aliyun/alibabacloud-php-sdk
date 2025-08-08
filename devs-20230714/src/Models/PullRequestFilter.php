<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class PullRequestFilter extends Model
{
    /**
     * @var string
     */
    public $sourceBranch;

    /**
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
        'types' => 'types',
    ];

    public function validate()
    {
        if (\is_array($this->types)) {
            Model::validateArray($this->types);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceBranch) {
            $res['sourceBranch'] = $this->sourceBranch;
        }

        if (null !== $this->targetBranch) {
            $res['targetBranch'] = $this->targetBranch;
        }

        if (null !== $this->types) {
            if (\is_array($this->types)) {
                $res['types'] = [];
                $n1 = 0;
                foreach ($this->types as $item1) {
                    $res['types'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['sourceBranch'])) {
            $model->sourceBranch = $map['sourceBranch'];
        }

        if (isset($map['targetBranch'])) {
            $model->targetBranch = $map['targetBranch'];
        }

        if (isset($map['types'])) {
            if (!empty($map['types'])) {
                $model->types = [];
                $n1 = 0;
                foreach ($map['types'] as $item1) {
                    $model->types[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
