<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class QueryIncidentVertexExtendInfoRequest extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @example process_connect_ip
     *
     * @var string
     */
    public $relationType;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @example 29872354f741b1b044b8a9b4e2ab0535
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
        'offset'       => 'Offset',
        'relationType' => 'RelationType',
        'size'         => 'Size',
        'vertexId'     => 'VertexId',
        'vertexLabel'  => 'VertexLabel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
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
     * @return QueryIncidentVertexExtendInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
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
