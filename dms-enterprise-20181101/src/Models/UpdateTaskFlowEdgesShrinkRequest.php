<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateTaskFlowEdgesShrinkRequest extends Model
{
    /**
     * @description $.parameters[3].schema.example
     *
     * @example 15***
     *
     * @var int
     */
    public $dagId;

    /**
     * @description $.parameters[3].schema.enumValueTitles
     *
     * @var string
     */
    public $edgesShrink;

    /**
     * @description $.parameters[3].schema.description
     *
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
