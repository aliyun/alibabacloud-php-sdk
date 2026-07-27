<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetKgNeighborResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetKgNeighborResponseBody\data\edgeList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetKgNeighborResponseBody\data\nodeList;

class data extends Model
{
    /**
     * @var edgeList[]
     */
    public $edgeList;

    /**
     * @var nodeList[]
     */
    public $nodeList;
    protected $_name = [
        'edgeList' => 'EdgeList',
        'nodeList' => 'NodeList',
    ];

    public function validate()
    {
        if (\is_array($this->edgeList)) {
            Model::validateArray($this->edgeList);
        }
        if (\is_array($this->nodeList)) {
            Model::validateArray($this->nodeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->edgeList) {
            if (\is_array($this->edgeList)) {
                $res['EdgeList'] = [];
                $n1 = 0;
                foreach ($this->edgeList as $item1) {
                    $res['EdgeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

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
                $n1 = 0;
                foreach ($map['EdgeList'] as $item1) {
                    $model->edgeList[$n1] = edgeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

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

        return $model;
    }
}
