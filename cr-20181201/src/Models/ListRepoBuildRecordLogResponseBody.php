<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRecordLogResponseBody\buildRecordLogs;
use AlibabaCloud\Tea\Model;

class ListRepoBuildRecordLogResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var buildRecordLogs[]
     */
    public $buildRecordLogs;

    /**
     * @var string
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'isSuccess'       => 'IsSuccess',
        'buildRecordLogs' => 'BuildRecordLogs',
        'totalCount'      => 'TotalCount',
        'requestId'       => 'RequestId',
        'pageSize'        => 'PageSize',
        'pageNo'          => 'PageNo',
        'code'            => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->buildRecordLogs) {
            $res['BuildRecordLogs'] = [];
            if (null !== $this->buildRecordLogs && \is_array($this->buildRecordLogs)) {
                $n = 0;
                foreach ($this->buildRecordLogs as $item) {
                    $res['BuildRecordLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRepoBuildRecordLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['BuildRecordLogs'])) {
            if (!empty($map['BuildRecordLogs'])) {
                $model->buildRecordLogs = [];
                $n                      = 0;
                foreach ($map['BuildRecordLogs'] as $item) {
                    $model->buildRecordLogs[$n++] = null !== $item ? buildRecordLogs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
