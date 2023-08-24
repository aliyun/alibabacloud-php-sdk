<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DescribeCacheAnalysisReportResponseBody extends Model
{
    /**
     * @var mixed[][]
     */
    public $bigKeys;

    /**
     * @var mixed[][]
     */
    public $hotKeys;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 30
     *
     * @var int
     */
    public $pageRecordCount;

    /**
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example A057C066-C3F5-4CC9-9FE4-A8D8B0DC****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 160
     *
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'bigKeys'          => 'BigKeys',
        'hotKeys'          => 'HotKeys',
        'pageNumber'       => 'PageNumber',
        'pageRecordCount'  => 'PageRecordCount',
        'pageSize'         => 'PageSize',
        'requestId'        => 'RequestId',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bigKeys) {
            $res['BigKeys'] = $this->bigKeys;
        }
        if (null !== $this->hotKeys) {
            $res['HotKeys'] = $this->hotKeys;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCacheAnalysisReportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BigKeys'])) {
            if (!empty($map['BigKeys'])) {
                $model->bigKeys = $map['BigKeys'];
            }
        }
        if (isset($map['HotKeys'])) {
            if (!empty($map['HotKeys'])) {
                $model->hotKeys = $map['HotKeys'];
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
