<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody\data\hitRuleReviewInfoList;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\NextNodeSituations;
use AlibabaCloud\Tea\Model;

class branchInfoList extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $checkType;

    /**
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @example a&&b
     *
     * @var string
     */
    public $lambda;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 2
     *
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
        'checkType'  => 'CheckType',
        'index'      => 'Index',
        'lambda'     => 'Lambda',
        'name'       => 'Name',
        'nextNodeId' => 'NextNodeId',
        'situation'  => 'Situation',
        'triggers'   => 'Triggers',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Situation'] = null !== $this->situation ? $this->situation->toMap() : null;
        }
        if (null !== $this->triggers) {
            $res['Triggers'] = $this->triggers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return branchInfoList
     */
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
                $model->triggers = $map['Triggers'];
            }
        }

        return $model;
    }
}
