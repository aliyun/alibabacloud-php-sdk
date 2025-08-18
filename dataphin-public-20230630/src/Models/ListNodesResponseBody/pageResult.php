<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodesResponseBody\pageResult\nodeList;

class pageResult extends Model
{
    /**
     * @var nodeList[]
     */
    public $nodeList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'nodeList' => 'NodeList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->nodeList)) {
            Model::validateArray($this->nodeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeList) {
            if (\is_array($this->nodeList)) {
                $res['NodeList'] = [];
                $n1 = 0;
                foreach ($this->nodeList as $item1) {
                    $res['NodeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['NodeList'])) {
            if (!empty($map['NodeList'])) {
                $model->nodeList = [];
                $n1 = 0;
                foreach ($map['NodeList'] as $item1) {
                    $model->nodeList[$n1] = nodeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
