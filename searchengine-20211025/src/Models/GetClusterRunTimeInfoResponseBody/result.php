<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result\dataNodes;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result\queryNode;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The name of the cluster
     *
     * @example vpc_hz_domain_1
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description dataNodes
     *
     * @example {}
     *
     * @var dataNodes[]
     */
    public $dataNodes;

    /**
     * @description The specifications of the query node.
     *
     * @var queryNode
     */
    public $queryNode;
    protected $_name = [
        'clusterName' => 'clusterName',
        'dataNodes'   => 'dataNodes',
        'queryNode'   => 'queryNode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterName) {
            $res['clusterName'] = $this->clusterName;
        }
        if (null !== $this->dataNodes) {
            $res['dataNodes'] = [];
            if (null !== $this->dataNodes && \is_array($this->dataNodes)) {
                $n = 0;
                foreach ($this->dataNodes as $item) {
                    $res['dataNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->queryNode) {
            $res['queryNode'] = null !== $this->queryNode ? $this->queryNode->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusterName'])) {
            $model->clusterName = $map['clusterName'];
        }
        if (isset($map['dataNodes'])) {
            if (!empty($map['dataNodes'])) {
                $model->dataNodes = [];
                $n                = 0;
                foreach ($map['dataNodes'] as $item) {
                    $model->dataNodes[$n++] = null !== $item ? dataNodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['queryNode'])) {
            $model->queryNode = queryNode::fromMap($map['queryNode']);
        }

        return $model;
    }
}
