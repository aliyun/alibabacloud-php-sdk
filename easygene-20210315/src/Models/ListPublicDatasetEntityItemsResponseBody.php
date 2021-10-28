<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListPublicDatasetEntityItemsResponseBody\entityItems;
use AlibabaCloud\Tea\Model;

class ListPublicDatasetEntityItemsResponseBody extends Model
{
    /**
     * @description 公共数据集名称
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description 该实体包含的所有对象
     *
     * @var entityItems[]
     */
    public $entityItems;

    /**
     * @description 主机ID
     *
     * @var string
     */
    public $hostId;

    /**
     * @description 分页数
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 翻页Token用来表示当前调用返回读取到的位置，空代表数据已经读取完毕
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 总记录数
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'entityItems' => 'EntityItems',
        'hostId'      => 'HostId',
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->entityItems) {
            $res['EntityItems'] = [];
            if (null !== $this->entityItems && \is_array($this->entityItems)) {
                $n = 0;
                foreach ($this->entityItems as $item) {
                    $res['EntityItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPublicDatasetEntityItemsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['EntityItems'])) {
            if (!empty($map['EntityItems'])) {
                $model->entityItems = [];
                $n                  = 0;
                foreach ($map['EntityItems'] as $item) {
                    $model->entityItems[$n++] = null !== $item ? entityItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
