<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyResponseBody\policyList\content\l4RuleList;

use AlibabaCloud\Tea\Model;

class conditionList extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $arg;

    /**
     * @example 32
     *
     * @var int
     */
    public $depth;

    /**
     * @example 0
     *
     * @var int
     */
    public $position;
    protected $_name = [
        'arg'      => 'Arg',
        'depth'    => 'Depth',
        'position' => 'Position',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arg) {
            $res['Arg'] = $this->arg;
        }
        if (null !== $this->depth) {
            $res['Depth'] = $this->depth;
        }
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arg'])) {
            $model->arg = $map['Arg'];
        }
        if (isset($map['Depth'])) {
            $model->depth = $map['Depth'];
        }
        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }

        return $model;
    }
}
