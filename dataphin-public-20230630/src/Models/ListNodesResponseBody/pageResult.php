<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodesResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodesResponseBody\pageResult\nodeList;
use AlibabaCloud\Tea\Model;

class pageResult extends Model
{
    /**
     * @var nodeList[]
     */
    public $nodeList;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'nodeList'   => 'NodeList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeList) {
            $res['NodeList'] = [];
            if (null !== $this->nodeList && \is_array($this->nodeList)) {
                $n = 0;
                foreach ($this->nodeList as $item) {
                    $res['NodeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeList'])) {
            if (!empty($map['NodeList'])) {
                $model->nodeList = [];
                $n               = 0;
                foreach ($map['NodeList'] as $item) {
                    $model->nodeList[$n++] = null !== $item ? nodeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
