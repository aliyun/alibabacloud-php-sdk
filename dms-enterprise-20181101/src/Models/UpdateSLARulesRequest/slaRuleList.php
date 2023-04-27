<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateSLARulesRequest;

use AlibabaCloud\Tea\Model;

class slaRuleList extends Model
{
    /**
     * @description The error code returned if the request failed.
     *
     * @example 15***
     *
     * @var int
     */
    public $dagId;

    /**
     * @description Updates the service level agreement (SLA) timeout reminder for a task flow.
     *
     * @example 1080
     *
     * @var int
     */
    public $intervalMinutes;

    /**
     * @description The ID of the request. You can use the ID to locate logs and troubleshoot issues.
     *
     * @example 0
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The rule type. Valid values:
     *
     *   **0**: SLA rules for task flows
     *   **1**: SLA rules for nodes
     *
     * @example 0
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'dagId'           => 'DagId',
        'intervalMinutes' => 'IntervalMinutes',
        'nodeId'          => 'NodeId',
        'type'            => 'Type',
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
        if (null !== $this->intervalMinutes) {
            $res['IntervalMinutes'] = $this->intervalMinutes;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slaRuleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['IntervalMinutes'])) {
            $model->intervalMinutes = $map['IntervalMinutes'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
