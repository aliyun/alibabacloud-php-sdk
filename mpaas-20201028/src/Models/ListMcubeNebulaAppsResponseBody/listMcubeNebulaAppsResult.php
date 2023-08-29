<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeNebulaAppsResponseBody;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeNebulaAppsResponseBody\listMcubeNebulaAppsResult\nebulaAppInfos;
use AlibabaCloud\Tea\Model;

class listMcubeNebulaAppsResult extends Model
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
     * @var nebulaAppInfos[]
     */
    public $nebulaAppInfos;

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
        'currentPage'    => 'CurrentPage',
        'errorCode'      => 'ErrorCode',
        'hasMore'        => 'HasMore',
        'nebulaAppInfos' => 'NebulaAppInfos',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'resultMsg'      => 'ResultMsg',
        'success'        => 'Success',
        'totalCount'     => 'TotalCount',
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
        if (null !== $this->nebulaAppInfos) {
            $res['NebulaAppInfos'] = [];
            if (null !== $this->nebulaAppInfos && \is_array($this->nebulaAppInfos)) {
                $n = 0;
                foreach ($this->nebulaAppInfos as $item) {
                    $res['NebulaAppInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return listMcubeNebulaAppsResult
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
        if (isset($map['NebulaAppInfos'])) {
            if (!empty($map['NebulaAppInfos'])) {
                $model->nebulaAppInfos = [];
                $n                     = 0;
                foreach ($map['NebulaAppInfos'] as $item) {
                    $model->nebulaAppInfos[$n++] = null !== $item ? nebulaAppInfos::fromMap($item) : $item;
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
