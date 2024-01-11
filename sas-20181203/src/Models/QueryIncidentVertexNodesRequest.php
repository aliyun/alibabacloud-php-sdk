<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class QueryIncidentVertexNodesRequest extends Model
{
    /**
     * @description The types of the edges that you want to query.
     *
     * @var string[]
     */
    public $edgeLabelList;

    /**
     * @description The page number. Valid values start from 1.
     *
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @description The number of entries per page. Valid values start from 1.
     *
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @description The ID of the node that you want to query.
     *
     * >  You can call the [QueryIncidentTracingDetail](~~QueryIncidentTracingDetail~~) operation to query the node ID.
     * @example d6d7738a34cc252219866d223c0093f8
     *
     * @var string
     */
    public $vertexId;

    /**
     * @description The node label. Valid values include but are not limited to:
     *
     *   **process**
     *   **file**
     *   **alert**
     *   **ip**
     *   **domain**
     *
     * @example process
     *
     * @var string
     */
    public $vertexLabel;
    protected $_name = [
        'edgeLabelList' => 'EdgeLabelList',
        'offset'        => 'Offset',
        'size'          => 'Size',
        'vertexId'      => 'VertexId',
        'vertexLabel'   => 'VertexLabel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->edgeLabelList) {
            $res['EdgeLabelList'] = $this->edgeLabelList;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->vertexId) {
            $res['VertexId'] = $this->vertexId;
        }
        if (null !== $this->vertexLabel) {
            $res['VertexLabel'] = $this->vertexLabel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryIncidentVertexNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EdgeLabelList'])) {
            if (!empty($map['EdgeLabelList'])) {
                $model->edgeLabelList = $map['EdgeLabelList'];
            }
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['VertexId'])) {
            $model->vertexId = $map['VertexId'];
        }
        if (isset($map['VertexLabel'])) {
            $model->vertexLabel = $map['VertexLabel'];
        }

        return $model;
    }
}
