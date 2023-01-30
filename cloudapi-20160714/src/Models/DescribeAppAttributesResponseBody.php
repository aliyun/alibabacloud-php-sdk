<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppAttributesResponseBody\apps;
use AlibabaCloud\Tea\Model;

class DescribeAppAttributesResponseBody extends Model
{
    /**
     * @description The name of the app.
     *
     * @var apps
     */
    public $apps;

    /**
     * @description The ID of the request.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The total number of returned entries.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The number of entries returned per page.
     *
     * @example 8883AC74-259D-4C0B-99FC-0B7F9A588B2F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The returned application information. It is an array that consists of AppAttribute data.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'apps'       => 'Apps',
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
        if (null !== $this->apps) {
            $res['Apps'] = null !== $this->apps ? $this->apps->toMap() : null;
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
     * @return DescribeAppAttributesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Apps'])) {
            $model->apps = apps::fromMap($map['Apps']);
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
