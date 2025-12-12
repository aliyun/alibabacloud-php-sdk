<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterNodeInfosResponseBody\nodeInfos;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterNodeInfosResponseBody\zkNodeInfos;

class DescribeDBClusterNodeInfosResponseBody extends Model
{
    /**
     * @var nodeInfos[]
     */
    public $nodeInfos;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalNodeCount;

    /**
     * @var zkNodeInfos[]
     */
    public $zkNodeInfos;
    protected $_name = [
        'nodeInfos' => 'NodeInfos',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalNodeCount' => 'TotalNodeCount',
        'zkNodeInfos' => 'ZkNodeInfos',
    ];

    public function validate()
    {
        if (\is_array($this->nodeInfos)) {
            Model::validateArray($this->nodeInfos);
        }
        if (\is_array($this->zkNodeInfos)) {
            Model::validateArray($this->zkNodeInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeInfos) {
            if (\is_array($this->nodeInfos)) {
                $res['NodeInfos'] = [];
                $n1 = 0;
                foreach ($this->nodeInfos as $item1) {
                    $res['NodeInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalNodeCount) {
            $res['TotalNodeCount'] = $this->totalNodeCount;
        }

        if (null !== $this->zkNodeInfos) {
            if (\is_array($this->zkNodeInfos)) {
                $res['ZkNodeInfos'] = [];
                $n1 = 0;
                foreach ($this->zkNodeInfos as $item1) {
                    $res['ZkNodeInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NodeInfos'])) {
            if (!empty($map['NodeInfos'])) {
                $model->nodeInfos = [];
                $n1 = 0;
                foreach ($map['NodeInfos'] as $item1) {
                    $model->nodeInfos[$n1] = nodeInfos::fromMap($item1);
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalNodeCount'])) {
            $model->totalNodeCount = $map['TotalNodeCount'];
        }

        if (isset($map['ZkNodeInfos'])) {
            if (!empty($map['ZkNodeInfos'])) {
                $model->zkNodeInfos = [];
                $n1 = 0;
                foreach ($map['ZkNodeInfos'] as $item1) {
                    $model->zkNodeInfos[$n1] = zkNodeInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
