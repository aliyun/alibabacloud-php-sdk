<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeAuditContentResponseBody\auditContentList;
use AlibabaCloud\Tea\Model;

class DescribeAuditContentResponseBody extends Model
{
    /**
     * @var auditContentList[]
     */
    public $auditContentList;

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
        'auditContentList' => 'AuditContentList',
        'currentPage'      => 'CurrentPage',
        'pageSize'         => 'PageSize',
        'requestId'        => 'RequestId',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditContentList) {
            $res['AuditContentList'] = [];
            if (null !== $this->auditContentList && \is_array($this->auditContentList)) {
                $n = 0;
                foreach ($this->auditContentList as $item) {
                    $res['AuditContentList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeAuditContentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditContentList'])) {
            if (!empty($map['AuditContentList'])) {
                $model->auditContentList = [];
                $n                       = 0;
                foreach ($map['AuditContentList'] as $item) {
                    $model->auditContentList[$n++] = null !== $item ? auditContentList::fromMap($item) : $item;
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
