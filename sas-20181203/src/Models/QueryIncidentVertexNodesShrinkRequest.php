<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class QueryIncidentVertexNodesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $edgeLabelListShrink;

    /**
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @example d6d7738a34cc252219866d223c0093f8
     *
     * @var string
     */
    public $vertexId;

    /**
     * @example process
     *
     * @var string
     */
    public $vertexLabel;
    protected $_name = [
        'edgeLabelListShrink' => 'EdgeLabelList',
        'offset'              => 'Offset',
        'size'                => 'Size',
        'vertexId'            => 'VertexId',
        'vertexLabel'         => 'VertexLabel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->edgeLabelListShrink) {
            $res['EdgeLabelList'] = $this->edgeLabelListShrink;
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
     * @return QueryIncidentVertexNodesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EdgeLabelList'])) {
            $model->edgeLabelListShrink = $map['EdgeLabelList'];
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
