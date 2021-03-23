<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DescribeCacheAnalysisReportResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalRecordCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageRecordCount;

    /**
     * @var string[][]
     */
    public $hotKeys;

    /**
     * @var string[][]
     */
    public $bigKeys;
    protected $_name = [
        'requestId'        => 'RequestId',
        'totalRecordCount' => 'TotalRecordCount',
        'pageSize'         => 'PageSize',
        'pageNumber'       => 'PageNumber',
        'pageRecordCount'  => 'PageRecordCount',
        'hotKeys'          => 'HotKeys',
        'bigKeys'          => 'BigKeys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }
        if (null !== $this->hotKeys) {
            $res['HotKeys'] = $this->hotKeys;
        }
        if (null !== $this->bigKeys) {
            $res['BigKeys'] = $this->bigKeys;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if (isset($map['HotKeys'])) {
            if (!empty($map['HotKeys'])) {
                $model->hotKeys = $map['HotKeys'];
            }
        }
        if (isset($map['BigKeys'])) {
            if (!empty($map['BigKeys'])) {
                $model->bigKeys = $map['BigKeys'];
            }
        }

        return $model;
    }
}
