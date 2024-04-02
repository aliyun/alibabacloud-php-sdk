<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeAuditContentItemResponseBody\auditContentItemList;
use AlibabaCloud\Tea\Model;

class DescribeAuditContentItemResponseBody extends Model
{
    /**
     * @var auditContentItemList[]
     */
    public $auditContentItemList;

    /**
     * @var int
     */
    public $currentPage;

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
    public $totalCount;
    protected $_name = [
        'auditContentItemList' => 'AuditContentItemList',
        'currentPage'          => 'CurrentPage',
        'pageSize'             => 'PageSize',
        'requestId'            => 'RequestId',
        'totalCount'           => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditContentItemList) {
            $res['AuditContentItemList'] = [];
            if (null !== $this->auditContentItemList && \is_array($this->auditContentItemList)) {
                $n = 0;
                foreach ($this->auditContentItemList as $item) {
                    $res['AuditContentItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return DescribeAuditContentItemResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditContentItemList'])) {
            if (!empty($map['AuditContentItemList'])) {
                $model->auditContentItemList = [];
                $n                           = 0;
                foreach ($map['AuditContentItemList'] as $item) {
                    $model->auditContentItemList[$n++] = null !== $item ? auditContentItemList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
