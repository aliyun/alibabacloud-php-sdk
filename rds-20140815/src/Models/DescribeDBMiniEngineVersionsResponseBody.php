<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBMiniEngineVersionsResponseBody\minorVersionItems;
use AlibabaCloud\Tea\Model;

class DescribeDBMiniEngineVersionsResponseBody extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5*****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $maxRecordsPerPage;

    /**
     * @description An array that consists of details of the minor engine versions.
     *
     * @var minorVersionItems[]
     */
    public $minorVersionItems;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumbers;

    /**
     * @description The ID of the request.
     *
     * @example EFB6083A-7699-489B-8278-C0CB4793A96E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of returned entries.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'DBInstanceId'      => 'DBInstanceId',
        'maxRecordsPerPage' => 'MaxRecordsPerPage',
        'minorVersionItems' => 'MinorVersionItems',
        'pageNumbers'       => 'PageNumbers',
        'requestId'         => 'RequestId',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->maxRecordsPerPage) {
            $res['MaxRecordsPerPage'] = $this->maxRecordsPerPage;
        }
        if (null !== $this->minorVersionItems) {
            $res['MinorVersionItems'] = [];
            if (null !== $this->minorVersionItems && \is_array($this->minorVersionItems)) {
                $n = 0;
                foreach ($this->minorVersionItems as $item) {
                    $res['MinorVersionItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumbers) {
            $res['PageNumbers'] = $this->pageNumbers;
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
     * @return DescribeDBMiniEngineVersionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['MaxRecordsPerPage'])) {
            $model->maxRecordsPerPage = $map['MaxRecordsPerPage'];
        }
        if (isset($map['MinorVersionItems'])) {
            if (!empty($map['MinorVersionItems'])) {
                $model->minorVersionItems = [];
                $n                        = 0;
                foreach ($map['MinorVersionItems'] as $item) {
                    $model->minorVersionItems[$n++] = null !== $item ? minorVersionItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumbers'])) {
            $model->pageNumbers = $map['PageNumbers'];
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
