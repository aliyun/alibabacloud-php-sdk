<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSLARulesResponseBody\SLARuleList;

use AlibabaCloud\Tea\Model;

class SLARule extends Model
{
    /**
     * @var int
     */
    public $dagId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $intervalMinutes;

    /**
     * @var int
     */
    public $nodeId;

    /**
     * @var int
     */
    public $ruleType;
    protected $_name = [
        'dagId'           => 'DagId',
        'id'              => 'Id',
        'intervalMinutes' => 'IntervalMinutes',
        'nodeId'          => 'NodeId',
        'ruleType'        => 'RuleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->intervalMinutes) {
            $res['IntervalMinutes'] = $this->intervalMinutes;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SLARule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IntervalMinutes'])) {
            $model->intervalMinutes = $map['IntervalMinutes'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        return $model;
    }
}
