<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginsByGroupResponseBody\plugins;
use AlibabaCloud\Tea\Model;

class DescribePluginsByGroupResponseBody extends Model
{
    /**
     * @description Pagination parameter: current page number
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Pagination parameter: number of items per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Returns information about the plugins
     *
     * @var plugins
     */
    public $plugins;

    /**
     * @description Request ID
     *
     * @example 5F5574BA-F22B-563D-841E-C817964F517F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Total number of results returned
     *
     * @example 32
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'plugins' => 'Plugins',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->plugins) {
            $res['Plugins'] = null !== $this->plugins ? $this->plugins->toMap() : null;
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
     * @return DescribePluginsByGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Plugins'])) {
            $model->plugins = plugins::fromMap($map['Plugins']);
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
