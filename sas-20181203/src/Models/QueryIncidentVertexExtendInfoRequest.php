<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class QueryIncidentVertexExtendInfoRequest extends Model
{
    /**
     * @var int
     */
    public $offset;
    /**
     * @var string
     */
    public $relationType;
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
        'offset'       => 'Offset',
        'relationType' => 'RelationType',
        'size'         => 'Size',
        'vertexId'     => 'VertexId',
        'vertexLabel'  => 'VertexLabel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
