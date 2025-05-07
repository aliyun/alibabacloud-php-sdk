<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody\data\hitRuleReviewInfoList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\NextNodeSituations;

class branchInfoList extends Model
{
    /**
     * @var int
     */
    public $checkType;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $lambda;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $nextNodeId;

    /**
     * @var NextNodeSituations
     */
    public $situation;

    /**
     * @var string[]
     */
    public $triggers;
    protected $_name = [
        'checkType' => 'CheckType',
        'index' => 'Index',
        'lambda' => 'Lambda',
        'name' => 'Name',
        'nextNodeId' => 'NextNodeId',
        'situation' => 'Situation',
        'triggers' => 'Triggers',
    ];

    public function validate()
    {
        if (null !== $this->situation) {
            $this->situation->validate();
        }
        if (\is_array($this->triggers)) {
            Model::validateArray($this->triggers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->lambda) {
            $res['Lambda'] = $this->lambda;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nextNodeId) {
            $res['NextNodeId'] = $this->nextNodeId;
        }

        if (null !== $this->situation) {
            $res['Situation'] = null !== $this->situation ? $this->situation->toArray($noStream) : $this->situation;
        }

        if (null !== $this->triggers) {
            if (\is_array($this->triggers)) {
                $res['Triggers'] = [];
                $n1 = 0;
                foreach ($this->triggers as $item1) {
                    $res['Triggers'][$n1++] = $item1;
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
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['Lambda'])) {
            $model->lambda = $map['Lambda'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NextNodeId'])) {
            $model->nextNodeId = $map['NextNodeId'];
        }

        if (isset($map['Situation'])) {
            $model->situation = NextNodeSituations::fromMap($map['Situation']);
        }

        if (isset($map['Triggers'])) {
            if (!empty($map['Triggers'])) {
                $model->triggers = [];
                $n1 = 0;
                foreach ($map['Triggers'] as $item1) {
                    $model->triggers[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
