<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class QueryIncidentVertexNodesRequest extends Model
{
    /**
     * @var string[]
     */
    public $edgeLabelList;
    /**
     * @var int
     */
    public $offset;
    /**
     * @var int
     */
    public $size;
    /**
     * @var string
     */
    public $vertexId;
    /**
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
        if (\is_array($this->edgeLabelList)) {
            Model::validateArray($this->edgeLabelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->edgeLabelList) {
            if (\is_array($this->edgeLabelList)) {
                $res['EdgeLabelList'] = [];
                $n1                   = 0;
                foreach ($this->edgeLabelList as $item1) {
                    $res['EdgeLabelList'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EdgeLabelList'])) {
            if (!empty($map['EdgeLabelList'])) {
                $model->edgeLabelList = [];
                $n1                   = 0;
                foreach ($map['EdgeLabelList'] as $item1) {
                    $model->edgeLabelList[$n1++] = $item1;
                }
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
