<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGraph4InvestigationOnlineResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGraph4InvestigationOnlineResponseBody\data\edgeList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGraph4InvestigationOnlineResponseBody\data\entityTypeList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGraph4InvestigationOnlineResponseBody\data\relationTypeList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGraph4InvestigationOnlineResponseBody\data\vertexList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var vertexList[]
     */
    public $vertexList;

    /**
     * @var entityTypeList[]
     */
    public $entityTypeList;

    /**
     * @var relationTypeList[]
     */
    public $relationTypeList;

    /**
     * @var edgeList[]
     */
    public $edgeList;
    protected $_name = [
        'vertexList'       => 'VertexList',
        'entityTypeList'   => 'EntityTypeList',
        'relationTypeList' => 'RelationTypeList',
        'edgeList'         => 'EdgeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vertexList) {
            $res['VertexList'] = [];
            if (null !== $this->vertexList && \is_array($this->vertexList)) {
                $n = 0;
                foreach ($this->vertexList as $item) {
                    $res['VertexList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->entityTypeList) {
            $res['EntityTypeList'] = [];
            if (null !== $this->entityTypeList && \is_array($this->entityTypeList)) {
                $n = 0;
                foreach ($this->entityTypeList as $item) {
                    $res['EntityTypeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->relationTypeList) {
            $res['RelationTypeList'] = [];
            if (null !== $this->relationTypeList && \is_array($this->relationTypeList)) {
                $n = 0;
                foreach ($this->relationTypeList as $item) {
                    $res['RelationTypeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->edgeList) {
            $res['EdgeList'] = [];
            if (null !== $this->edgeList && \is_array($this->edgeList)) {
                $n = 0;
                foreach ($this->edgeList as $item) {
                    $res['EdgeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VertexList'])) {
            if (!empty($map['VertexList'])) {
                $model->vertexList = [];
                $n                 = 0;
                foreach ($map['VertexList'] as $item) {
                    $model->vertexList[$n++] = null !== $item ? vertexList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EntityTypeList'])) {
            if (!empty($map['EntityTypeList'])) {
                $model->entityTypeList = [];
                $n                     = 0;
                foreach ($map['EntityTypeList'] as $item) {
                    $model->entityTypeList[$n++] = null !== $item ? entityTypeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RelationTypeList'])) {
            if (!empty($map['RelationTypeList'])) {
                $model->relationTypeList = [];
                $n                       = 0;
                foreach ($map['RelationTypeList'] as $item) {
                    $model->relationTypeList[$n++] = null !== $item ? relationTypeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EdgeList'])) {
            if (!empty($map['EdgeList'])) {
                $model->edgeList = [];
                $n               = 0;
                foreach ($map['EdgeList'] as $item) {
                    $model->edgeList[$n++] = null !== $item ? edgeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
