<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result\dataNodes;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result\queryNode;

class result extends Model
{
    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var dataNodes[]
     */
    public $dataNodes;

    /**
     * @var queryNode
     */
    public $queryNode;
    protected $_name = [
        'clusterName' => 'clusterName',
        'dataNodes' => 'dataNodes',
        'queryNode' => 'queryNode',
    ];

    public function validate()
    {
        if (\is_array($this->dataNodes)) {
            Model::validateArray($this->dataNodes);
        }
        if (null !== $this->queryNode) {
            $this->queryNode->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterName) {
            $res['clusterName'] = $this->clusterName;
        }

        if (null !== $this->dataNodes) {
            if (\is_array($this->dataNodes)) {
                $res['dataNodes'] = [];
                $n1 = 0;
                foreach ($this->dataNodes as $item1) {
                    $res['dataNodes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->queryNode) {
            $res['queryNode'] = null !== $this->queryNode ? $this->queryNode->toArray($noStream) : $this->queryNode;
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
        if (isset($map['clusterName'])) {
            $model->clusterName = $map['clusterName'];
        }

        if (isset($map['dataNodes'])) {
            if (!empty($map['dataNodes'])) {
                $model->dataNodes = [];
                $n1 = 0;
                foreach ($map['dataNodes'] as $item1) {
                    $model->dataNodes[$n1++] = dataNodes::fromMap($item1);
                }
            }
        }

        if (isset($map['queryNode'])) {
            $model->queryNode = queryNode::fromMap($map['queryNode']);
        }

        return $model;
    }
}
