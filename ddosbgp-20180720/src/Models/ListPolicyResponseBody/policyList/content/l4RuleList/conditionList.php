<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyResponseBody\policyList\content\l4RuleList;

use AlibabaCloud\Tea\Model;

class conditionList extends Model
{
    /**
     * @description The term that is used for matching.
     *
     * >  If Method is set to **char**, the value of this parameter must be ASCII strings. If Method is set to **hex**, the value of this parameter must be hexadecimal strings. Maximum length: 2,048.
     * @example test
     *
     * @var string
     */
    public $arg;

    /**
     * @description The number of bytes from the start position for matching. Valid values: **1** to **2048**.
     *
     * @example 32
     *
     * @var int
     */
    public $depth;

    /**
     * @description The start position for matching. Valid values: **0** to **2047**.
     *
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
