<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class AssignNodeSpec extends Model
{
    /**
     * @var HyperNodeSpec[]
     */
    public $antiAffinityHyperNodes;

    /**
     * @var string
     */
    public $antiAffinityNodeNames;

    /**
     * @var bool
     */
    public $enableAssignNode;

    /**
     * @var HyperNodeSpec[]
     */
    public $hyperNodes;

    /**
     * @var string
     */
    public $nodeNames;
    protected $_name = [
        'antiAffinityHyperNodes' => 'AntiAffinityHyperNodes',
        'antiAffinityNodeNames' => 'AntiAffinityNodeNames',
        'enableAssignNode' => 'EnableAssignNode',
        'hyperNodes' => 'HyperNodes',
        'nodeNames' => 'NodeNames',
    ];

    public function validate()
    {
        if (\is_array($this->antiAffinityHyperNodes)) {
            Model::validateArray($this->antiAffinityHyperNodes);
        }
        if (\is_array($this->hyperNodes)) {
            Model::validateArray($this->hyperNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->antiAffinityHyperNodes) {
            if (\is_array($this->antiAffinityHyperNodes)) {
                $res['AntiAffinityHyperNodes'] = [];
                $n1 = 0;
                foreach ($this->antiAffinityHyperNodes as $item1) {
                    $res['AntiAffinityHyperNodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->antiAffinityNodeNames) {
            $res['AntiAffinityNodeNames'] = $this->antiAffinityNodeNames;
        }

        if (null !== $this->enableAssignNode) {
            $res['EnableAssignNode'] = $this->enableAssignNode;
        }

        if (null !== $this->hyperNodes) {
            if (\is_array($this->hyperNodes)) {
                $res['HyperNodes'] = [];
                $n1 = 0;
                foreach ($this->hyperNodes as $item1) {
                    $res['HyperNodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nodeNames) {
            $res['NodeNames'] = $this->nodeNames;
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
        if (isset($map['AntiAffinityHyperNodes'])) {
            if (!empty($map['AntiAffinityHyperNodes'])) {
                $model->antiAffinityHyperNodes = [];
                $n1 = 0;
                foreach ($map['AntiAffinityHyperNodes'] as $item1) {
                    $model->antiAffinityHyperNodes[$n1] = HyperNodeSpec::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AntiAffinityNodeNames'])) {
            $model->antiAffinityNodeNames = $map['AntiAffinityNodeNames'];
        }

        if (isset($map['EnableAssignNode'])) {
            $model->enableAssignNode = $map['EnableAssignNode'];
        }

        if (isset($map['HyperNodes'])) {
            if (!empty($map['HyperNodes'])) {
                $model->hyperNodes = [];
                $n1 = 0;
                foreach ($map['HyperNodes'] as $item1) {
                    $model->hyperNodes[$n1] = HyperNodeSpec::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NodeNames'])) {
            $model->nodeNames = $map['NodeNames'];
        }

        return $model;
    }
}
