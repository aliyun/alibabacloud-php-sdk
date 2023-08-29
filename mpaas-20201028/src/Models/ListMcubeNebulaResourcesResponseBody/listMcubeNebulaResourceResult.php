<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeNebulaResourcesResponseBody;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeNebulaResourcesResponseBody\listMcubeNebulaResourceResult\nebulaResourceInfo;
use AlibabaCloud\Tea\Model;

class listMcubeNebulaResourceResult extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var bool
     */
    public $hasMore;

    /**
     * @var nebulaResourceInfo[]
     */
    public $nebulaResourceInfo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resultMsg;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'currentPage'        => 'CurrentPage',
        'errorCode'          => 'ErrorCode',
        'hasMore'            => 'HasMore',
        'nebulaResourceInfo' => 'NebulaResourceInfo',
        'pageSize'           => 'PageSize',
        'requestId'          => 'RequestId',
        'resultMsg'          => 'ResultMsg',
        'success'            => 'Success',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }
        if (null !== $this->nebulaResourceInfo) {
            $res['NebulaResourceInfo'] = [];
            if (null !== $this->nebulaResourceInfo && \is_array($this->nebulaResourceInfo)) {
                $n = 0;
                foreach ($this->nebulaResourceInfo as $item) {
                    $res['NebulaResourceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resultMsg) {
            $res['ResultMsg'] = $this->resultMsg;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listMcubeNebulaResourceResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }
        if (isset($map['NebulaResourceInfo'])) {
            if (!empty($map['NebulaResourceInfo'])) {
                $model->nebulaResourceInfo = [];
                $n                         = 0;
                foreach ($map['NebulaResourceInfo'] as $item) {
                    $model->nebulaResourceInfo[$n++] = null !== $item ? nebulaResourceInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResultMsg'])) {
            $model->resultMsg = $map['ResultMsg'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
