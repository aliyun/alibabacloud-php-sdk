<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppsByApiProductResponseBody\authorizedApps;
use AlibabaCloud\Tea\Model;

class DescribeAppsByApiProductResponseBody extends Model
{
    /**
     * @description The information about authorized applications.
     *
     * @var authorizedApps
     */
    public $authorizedApps;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example AC866798-62D3-52F4-8AB5-CA149A53984F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of returned entries.
     *
     * @example 4
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'authorizedApps' => 'AuthorizedApps',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizedApps) {
            $res['AuthorizedApps'] = null !== $this->authorizedApps ? $this->authorizedApps->toMap() : null;
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
     * @return DescribeAppsByApiProductResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizedApps'])) {
            $model->authorizedApps = authorizedApps::fromMap($map['AuthorizedApps']);
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
