<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskFlowRelationsRequest\edges;
use AlibabaCloud\Tea\Model;

class UpdateTaskFlowRelationsRequest extends Model
{
    /**
     * @description The ID of the task flow. You can call the [ListTaskFlow](https://help.aliyun.com/document_detail/424565.html) or [ListLhTaskFlowAndScenario](https://help.aliyun.com/document_detail/426672.html) operation to query the task flow ID.
     *
     * This parameter is required.
     * @example 15***
     *
     * @var int
     */
    public $dagId;

    /**
     * @description The list of task flow edges to be updated.
     *
     * @var edges[]
     */
    public $edges;

    /**
     * @description The ID of the tenant.
     *
     * >  To view the ID of the tenant, go to the Data Management (DMS) console and move the pointer over the profile picture in the upper-right corner. For more information, see [View information about the current tenant](https://help.aliyun.com/document_detail/181330.html).
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'dagId' => 'DagId',
        'edges' => 'Edges',
        'tid'   => 'Tid',
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
        if (null !== $this->edges) {
            $res['Edges'] = [];
            if (null !== $this->edges && \is_array($this->edges)) {
                $n = 0;
                foreach ($this->edges as $item) {
                    $res['Edges'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTaskFlowRelationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['Edges'])) {
            if (!empty($map['Edges'])) {
                $model->edges = [];
                $n            = 0;
                foreach ($map['Edges'] as $item) {
                    $model->edges[$n++] = null !== $item ? edges::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
