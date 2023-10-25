<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListsResponseBody\acls;
use AlibabaCloud\Tea\Model;

class DescribeAccessControlListsResponseBody extends Model
{
    /**
     * @description A list of ACLs.
     *
     * @var acls
     */
    public $acls;

    /**
     * @description The number of ACLs on the current page.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The number of the returned page. Pages start from page **1**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned on each page. Maximum value: **50**. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example 3CB646EF-6147-4566-A9D9-CE8FBE86F971
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of ACLs.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'acls'       => 'Acls',
        'count'      => 'Count',
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
        if (null !== $this->acls) {
            $res['Acls'] = null !== $this->acls ? $this->acls->toMap() : null;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
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
     * @return DescribeAccessControlListsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Acls'])) {
            $model->acls = acls::fromMap($map['Acls']);
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
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
