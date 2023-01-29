<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\SDK\DBFS\V20200418\Models\ListAutoSnapshotPolicyAppliedDbfsResponseBody\dbfsList;
use AlibabaCloud\Tea\Model;

class ListAutoSnapshotPolicyAppliedDbfsResponseBody extends Model
{
    /**
     * @var dbfsList[]
     */
    public $dbfsList;

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
    public $totalCount;
    protected $_name = [
        'dbfsList'   => 'DbfsList',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbfsList) {
            $res['DbfsList'] = [];
            if (null !== $this->dbfsList && \is_array($this->dbfsList)) {
                $n = 0;
                foreach ($this->dbfsList as $item) {
                    $res['DbfsList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAutoSnapshotPolicyAppliedDbfsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbfsList'])) {
            if (!empty($map['DbfsList'])) {
                $model->dbfsList = [];
                $n               = 0;
                foreach ($map['DbfsList'] as $item) {
                    $model->dbfsList[$n++] = null !== $item ? dbfsList::fromMap($item) : $item;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
