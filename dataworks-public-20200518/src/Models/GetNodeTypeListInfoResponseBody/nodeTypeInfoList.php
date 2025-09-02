<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeTypeListInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeTypeListInfoResponseBody\nodeTypeInfoList\nodeTypeInfo;

class nodeTypeInfoList extends Model
{
    /**
     * @var nodeTypeInfo[]
     */
    public $nodeTypeInfo;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'nodeTypeInfo' => 'NodeTypeInfo',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->nodeTypeInfo)) {
            Model::validateArray($this->nodeTypeInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeTypeInfo) {
            if (\is_array($this->nodeTypeInfo)) {
                $res['NodeTypeInfo'] = [];
                $n1 = 0;
                foreach ($this->nodeTypeInfo as $item1) {
                    $res['NodeTypeInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['NodeTypeInfo'])) {
            if (!empty($map['NodeTypeInfo'])) {
                $model->nodeTypeInfo = [];
                $n1 = 0;
                foreach ($map['NodeTypeInfo'] as $item1) {
                    $model->nodeTypeInfo[$n1] = nodeTypeInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
