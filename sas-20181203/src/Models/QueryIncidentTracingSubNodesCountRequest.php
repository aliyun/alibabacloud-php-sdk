<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->vertexIdAndTypeList)) {
            Model::validateArray($this->vertexIdAndTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vertexIdAndTypeList) {
            if (\is_array($this->vertexIdAndTypeList)) {
                $res['VertexIdAndTypeList'] = [];
                $n1                         = 0;
                foreach ($this->vertexIdAndTypeList as $item1) {
                    if (\is_array($item1)) {
                        $res['VertexIdAndTypeList'][$n1++] = [];
                        $n2                                = 0;
                        foreach ($item1 as $item2) {
                            $res['VertexIdAndTypeList'][$n1++][$n2++] = $item2;
                        }
                    }
                }
            }
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
        if (isset($map['VertexIdAndTypeList'])) {
            if (!empty($map['VertexIdAndTypeList'])) {
                $model->vertexIdAndTypeList = [];
                $n1                         = 0;
                foreach ($map['VertexIdAndTypeList'] as $item1) {
                    if (!empty($item1)) {
                        $model->vertexIdAndTypeList[$n1++] = [];
                        $n2                                = 0;
                        foreach ($item1 as $item2) {
                            $model->vertexIdAndTypeList[$n1++][$n2++] = $item2;
                        }
                    }
                }
            }
        }

        return $model;
    }
}
