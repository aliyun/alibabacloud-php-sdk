<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRecordResponseBody\buildRecords;
use AlibabaCloud\Tea\Model;

class ListRepoBuildRecordResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $totalCount;

    /**
     * @var buildRecords[]
     */
    public $buildRecords;
    protected $_name = [
        'requestId'    => 'RequestId',
        'code'         => 'Code',
        'pageNo'       => 'PageNo',
        'isSuccess'    => 'IsSuccess',
        'pageSize'     => 'PageSize',
        'totalCount'   => 'TotalCount',
        'buildRecords' => 'BuildRecords',
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->buildRecords) {
            $res['BuildRecords'] = [];
            if (null !== $this->buildRecords && \is_array($this->buildRecords)) {
                $n = 0;
                foreach ($this->buildRecords as $item) {
                    $res['BuildRecords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRepoBuildRecordResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['BuildRecords'])) {
            if (!empty($map['BuildRecords'])) {
                $model->buildRecords = [];
                $n                   = 0;
                foreach ($map['BuildRecords'] as $item) {
                    $model->buildRecords[$n++] = null !== $item ? buildRecords::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
