<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ExecKgCypherResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ExecKgCypherResponseBody\data\edgeList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ExecKgCypherResponseBody\data\nodeList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ExecKgCypherResponseBody\data\rowList;

class data extends Model
{
    /**
     * @var edgeList[]
     */
    public $edgeList;

    /**
     * @var string
     */
    public $executeCypher;

    /**
     * @var nodeList[]
     */
    public $nodeList;

    /**
     * @var rowList[]
     */
    public $rowList;
    protected $_name = [
        'edgeList' => 'EdgeList',
        'executeCypher' => 'ExecuteCypher',
        'nodeList' => 'NodeList',
        'rowList' => 'RowList',
    ];

    public function validate()
    {
        if (\is_array($this->edgeList)) {
            Model::validateArray($this->edgeList);
        }
        if (\is_array($this->nodeList)) {
            Model::validateArray($this->nodeList);
        }
        if (\is_array($this->rowList)) {
            Model::validateArray($this->rowList);
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

        if (null !== $this->executeCypher) {
            $res['ExecuteCypher'] = $this->executeCypher;
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

        if (null !== $this->rowList) {
            if (\is_array($this->rowList)) {
                $res['RowList'] = [];
                $n1 = 0;
                foreach ($this->rowList as $item1) {
                    $res['RowList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['ExecuteCypher'])) {
            $model->executeCypher = $map['ExecuteCypher'];
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

        if (isset($map['RowList'])) {
            if (!empty($map['RowList'])) {
                $model->rowList = [];
                $n1 = 0;
                foreach ($map['RowList'] as $item1) {
                    $model->rowList[$n1] = rowList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
