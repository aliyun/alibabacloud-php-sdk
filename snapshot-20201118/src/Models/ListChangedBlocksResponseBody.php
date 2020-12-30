<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Snapshot\V20201118\Models;

use AlibabaCloud\SDK\Snapshot\V20201118\Models\ListChangedBlocksResponseBody\changedBlocks;
use AlibabaCloud\Tea\Model;

class ListChangedBlocksResponseBody extends Model
{
    /**
     * @description TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 下一页结果的 token，为空时代表无新增页
     *
     * @var int[]
     */
    public $nextToken;

    /**
     * @description MaxResults本次请求所返回的最大记录条数
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 两个快照差异的数据块列表
     *
     * @var changedBlocks[]
     */
    public $changedBlocks;

    /**
     * @description 差异数据块 token 过期时间戳
     *
     * @var int
     */
    public $expiryTime;

    /**
     * @description 快照大小，单位 GB，最小 1GB
     *
     * @var int
     */
    public $volumeSize;

    /**
     * @description 数据块大小，单位 Byte
     *
     * @var int
     */
    public $blockSize;
    protected $_name = [
        'totalCount'    => 'TotalCount',
        'requestId'     => 'RequestId',
        'nextToken'     => 'NextToken',
        'maxResults'    => 'MaxResults',
        'changedBlocks' => 'ChangedBlocks',
        'expiryTime'    => 'ExpiryTime',
        'volumeSize'    => 'VolumeSize',
        'blockSize'     => 'BlockSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->changedBlocks) {
            $res['ChangedBlocks'] = [];
            if (null !== $this->changedBlocks && \is_array($this->changedBlocks)) {
                $n = 0;
                foreach ($this->changedBlocks as $item) {
                    $res['ChangedBlocks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->expiryTime) {
            $res['ExpiryTime'] = $this->expiryTime;
        }
        if (null !== $this->volumeSize) {
            $res['VolumeSize'] = $this->volumeSize;
        }
        if (null !== $this->blockSize) {
            $res['BlockSize'] = $this->blockSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChangedBlocksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['ChangedBlocks'])) {
            if (!empty($map['ChangedBlocks'])) {
                $model->changedBlocks = [];
                $n                    = 0;
                foreach ($map['ChangedBlocks'] as $item) {
                    $model->changedBlocks[$n++] = null !== $item ? changedBlocks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ExpiryTime'])) {
            $model->expiryTime = $map['ExpiryTime'];
        }
        if (isset($map['VolumeSize'])) {
            $model->volumeSize = $map['VolumeSize'];
        }
        if (isset($map['BlockSize'])) {
            $model->blockSize = $map['BlockSize'];
        }

        return $model;
    }
}
