<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class QueryIncidentTracingSubNodesCountRequest extends Model
{
    /**
     * @var string[][]
     */
    public $vertexIdAndTypeList;
    protected $_name = [
        'vertexIdAndTypeList' => 'VertexIdAndTypeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vertexIdAndTypeList) {
            $res['VertexIdAndTypeList'] = $this->vertexIdAndTypeList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryIncidentTracingSubNodesCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VertexIdAndTypeList'])) {
            if (!empty($map['VertexIdAndTypeList'])) {
                $model->vertexIdAndTypeList = $map['VertexIdAndTypeList'];
            }
        }

        return $model;
    }
}
