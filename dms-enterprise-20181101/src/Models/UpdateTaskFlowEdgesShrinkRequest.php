<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateTaskFlowEdgesShrinkRequest extends Model
{
    /**
     * @description The task flow ID. You can call the [ListTaskFlow](~~424565~~) or [ListLhTaskFlowAndScenario](~~426672~~) operation to query the task flow ID.
     *
     * @example 15***
     *
     * @var int
     */
    public $dagId;

    /**
     * @description The list of updated task flow edges.
     *
     * @var string
     */
    public $edgesShrink;

    /**
     * @description The tenant ID.
     *
     * > To view the tenant ID, move the pointer over the profile picture in the upper-right corner of the Data Management (DMS) console. For more information, see [Manage DMS tenants](~~181330~~).
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'dagId'       => 'DagId',
        'edgesShrink' => 'Edges',
        'tid'         => 'Tid',
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
        if (null !== $this->edgesShrink) {
            $res['Edges'] = $this->edgesShrink;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTaskFlowEdgesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['Edges'])) {
            $model->edgesShrink = $map['Edges'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
