<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGraph4InvestigationOnlineResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGraph4InvestigationOnlineResponseBody\data\edgeList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGraph4InvestigationOnlineResponseBody\data\entityTypeList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGraph4InvestigationOnlineResponseBody\data\relationTypeList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGraph4InvestigationOnlineResponseBody\data\vertexList;

class data extends Model
{
    /**
     * @var edgeList[]
     */
    public $edgeList;
    /**
     * @var entityTypeList[]
     */
    public $entityTypeList;
    /**
     * @var relationTypeList[]
     */
    public $relationTypeList;
    /**
     * @var vertexList[]
     */
    public $vertexList;
    protected $_name = [
        'edgeList'         => 'EdgeList',
        'entityTypeList'   => 'EntityTypeList',
        'relationTypeList' => 'RelationTypeList',
        'vertexList'       => 'VertexList',
    ];

    public function validate()
    {
        if (\is_array($this->edgeList)) {
            Model::validateArray($this->edgeList);
        }
        if (\is_array($this->entityTypeList)) {
            Model::validateArray($this->entityTypeList);
        }
        if (\is_array($this->relationTypeList)) {
            Model::validateArray($this->relationTypeList);
        }
        if (\is_array($this->vertexList)) {
            Model::validateArray($this->vertexList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->edgeList) {
            if (\is_array($this->edgeList)) {
                $res['EdgeList'] = [];
                $n1              = 0;
                foreach ($this->edgeList as $item1) {
                    $res['EdgeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->entityTypeList) {
            if (\is_array($this->entityTypeList)) {
                $res['EntityTypeList'] = [];
                $n1                    = 0;
                foreach ($this->entityTypeList as $item1) {
                    $res['EntityTypeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->relationTypeList) {
            if (\is_array($this->relationTypeList)) {
                $res['RelationTypeList'] = [];
                $n1                      = 0;
                foreach ($this->relationTypeList as $item1) {
                    $res['RelationTypeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vertexList) {
            if (\is_array($this->vertexList)) {
                $res['VertexList'] = [];
                $n1                = 0;
                foreach ($this->vertexList as $item1) {
                    $res['VertexList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EdgeList'])) {
            if (!empty($map['EdgeList'])) {
                $model->edgeList = [];
                $n1              = 0;
                foreach ($map['EdgeList'] as $item1) {
                    $model->edgeList[$n1++] = edgeList::fromMap($item1);
                }
            }
        }

        if (isset($map['EntityTypeList'])) {
            if (!empty($map['EntityTypeList'])) {
                $model->entityTypeList = [];
                $n1                    = 0;
                foreach ($map['EntityTypeList'] as $item1) {
                    $model->entityTypeList[$n1++] = entityTypeList::fromMap($item1);
                }
            }
        }

        if (isset($map['RelationTypeList'])) {
            if (!empty($map['RelationTypeList'])) {
                $model->relationTypeList = [];
                $n1                      = 0;
                foreach ($map['RelationTypeList'] as $item1) {
                    $model->relationTypeList[$n1++] = relationTypeList::fromMap($item1);
                }
            }
        }

        if (isset($map['VertexList'])) {
            if (!empty($map['VertexList'])) {
                $model->vertexList = [];
                $n1                = 0;
                foreach ($map['VertexList'] as $item1) {
                    $model->vertexList[$n1++] = vertexList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
