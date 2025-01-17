<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentVertexNodesResponseBody\vertexNodes\vertexList;

use AlibabaCloud\Dara\Model;

class neighborList extends Model
{
    /**
     * @var int
     */
    public $count;
    /**
     * @var bool
     */
    public $hasMore;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'count'   => 'Count',
        'hasMore' => 'HasMore',
        'type'    => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
