<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeHotpatchResourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeHotpatchResourcesResponseBody\listHotpatchResourceResult\hotpatchResourceInfo;

class listHotpatchResourceResult extends Model
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
     * @var hotpatchResourceInfo[]
     */
    public $hotpatchResourceInfo;

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
        'currentPage' => 'CurrentPage',
        'errorCode' => 'ErrorCode',
        'hasMore' => 'HasMore',
        'hotpatchResourceInfo' => 'HotpatchResourceInfo',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'resultMsg' => 'ResultMsg',
        'success' => 'Success',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->hotpatchResourceInfo)) {
            Model::validateArray($this->hotpatchResourceInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->hotpatchResourceInfo) {
            if (\is_array($this->hotpatchResourceInfo)) {
                $res['HotpatchResourceInfo'] = [];
                $n1 = 0;
                foreach ($this->hotpatchResourceInfo as $item1) {
                    $res['HotpatchResourceInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['HotpatchResourceInfo'])) {
            if (!empty($map['HotpatchResourceInfo'])) {
                $model->hotpatchResourceInfo = [];
                $n1 = 0;
                foreach ($map['HotpatchResourceInfo'] as $item1) {
                    $model->hotpatchResourceInfo[$n1] = hotpatchResourceInfo::fromMap($item1);
                    ++$n1;
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
