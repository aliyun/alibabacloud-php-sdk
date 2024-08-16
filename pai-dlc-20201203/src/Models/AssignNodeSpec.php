<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class AssignNodeSpec extends Model
{
    /**
     * @example lingjxxxxxxxx
     *
     * @var string
     */
    public $antiAffinityNodeNames;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableAssignNode;

    /**
     * @example lingjxxxxxxxx
     *
     * @var string
     */
    public $nodeNames;
    protected $_name = [
        'antiAffinityNodeNames' => 'AntiAffinityNodeNames',
        'enableAssignNode'      => 'EnableAssignNode',
        'nodeNames'             => 'NodeNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antiAffinityNodeNames) {
            $res['AntiAffinityNodeNames'] = $this->antiAffinityNodeNames;
        }
        if (null !== $this->enableAssignNode) {
            $res['EnableAssignNode'] = $this->enableAssignNode;
        }
        if (null !== $this->nodeNames) {
            $res['NodeNames'] = $this->nodeNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssignNodeSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntiAffinityNodeNames'])) {
            $model->antiAffinityNodeNames = $map['AntiAffinityNodeNames'];
        }
        if (isset($map['EnableAssignNode'])) {
            $model->enableAssignNode = $map['EnableAssignNode'];
        }
        if (isset($map['NodeNames'])) {
            $model->nodeNames = $map['NodeNames'];
        }

        return $model;
    }
}
