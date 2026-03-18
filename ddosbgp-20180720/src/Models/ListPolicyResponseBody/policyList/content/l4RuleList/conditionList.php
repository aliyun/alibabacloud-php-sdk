<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyResponseBody\policyList\content\l4RuleList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyResponseBody\policyList\content\l4RuleList\conditionList\offset;

class conditionList extends Model
{
    /**
     * @var string
     */
    public $arg;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $depth;

    /**
     * @var string
     */
    public $encode;

    /**
     * @var offset
     */
    public $offset;

    /**
     * @var string
     */
    public $pattern;

    /**
     * @var int
     */
    public $position;
    protected $_name = [
        'arg' => 'Arg',
        'content' => 'Content',
        'depth' => 'Depth',
        'encode' => 'Encode',
        'offset' => 'Offset',
        'pattern' => 'Pattern',
        'position' => 'Position',
    ];

    public function validate()
    {
        if (null !== $this->offset) {
            $this->offset->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arg) {
            $res['Arg'] = $this->arg;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->depth) {
            $res['Depth'] = $this->depth;
        }

        if (null !== $this->encode) {
            $res['Encode'] = $this->encode;
        }

        if (null !== $this->offset) {
            $res['Offset'] = null !== $this->offset ? $this->offset->toArray($noStream) : $this->offset;
        }

        if (null !== $this->pattern) {
            $res['Pattern'] = $this->pattern;
        }

        if (null !== $this->position) {
            $res['Position'] = $this->position;
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
        if (isset($map['Arg'])) {
            $model->arg = $map['Arg'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Depth'])) {
            $model->depth = $map['Depth'];
        }

        if (isset($map['Encode'])) {
            $model->encode = $map['Encode'];
        }

        if (isset($map['Offset'])) {
            $model->offset = offset::fromMap($map['Offset']);
        }

        if (isset($map['Pattern'])) {
            $model->pattern = $map['Pattern'];
        }

        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }

        return $model;
    }
}
