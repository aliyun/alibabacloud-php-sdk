<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDefaultSLARulesResponseBody\SLARuleList;

use AlibabaCloud\Tea\Model;

class SLARule extends Model
{
    /**
     * @description The ID of the task flow.
     *
     * @example 0
     *
     * @var int
     */
    public $dagId;

    /**
     * @description The ID of the SLA rule.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The timeout period. Unit: minutes.
     *
     * @example 1080
     *
     * @var int
     */
    public $intervalMinutes;

    /**
     * @description The ID of the task node.
     *
     * @example 0
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The type of the rule. Valid values:
     *
     *   **0**: an SLA rule for a task flow
     *   **1**: an SLA rule for a task node
     *
     * @example 0
     *
     * @var int
     */
    public $ruleType;
    protected $_name = [
        'dagId' => 'DagId',
        'id' => 'Id',
        'intervalMinutes' => 'IntervalMinutes',
        'nodeId' => 'NodeId',
        'ruleType' => 'RuleType',
    ];

    public function validate(): void {}

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
