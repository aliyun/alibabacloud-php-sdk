<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAccessControlListsResponseBody\acls;
use AlibabaCloud\Tea\Model;

class DescribeAccessControlListsResponseBody extends Model
{
    /**
     * @var acls
     */
    public $acls;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BZ015
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 3
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'acls'       => 'Acls',
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
