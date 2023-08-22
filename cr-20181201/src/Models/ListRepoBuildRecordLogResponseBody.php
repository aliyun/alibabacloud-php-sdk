<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRecordLogResponseBody\buildRecordLogs;
use AlibabaCloud\Tea\Model;

class ListRepoBuildRecordLogResponseBody extends Model
{
    /**
     * @description The log content of the image building record.
     *
     * @var buildRecordLogs[]
     */
    public $buildRecordLogs;

    /**
     * @description The return value.
     *
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries returned per page.
     *
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 4CE1F661-75DD-4EBD-A4AD-057B26834ABB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of returned entries.
     *
     * @example 1000
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'buildRecordLogs' => 'BuildRecordLogs',
        'code'            => 'Code',
        'isSuccess'       => 'IsSuccess',
        'pageNo'          => 'PageNo',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildRecordLogs) {
            $res['BuildRecordLogs'] = [];
            if (null !== $this->buildRecordLogs && \is_array($this->buildRecordLogs)) {
                $n = 0;
                foreach ($this->buildRecordLogs as $item) {
                    $res['BuildRecordLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
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
     * @return ListRepoBuildRecordLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildRecordLogs'])) {
            if (!empty($map['BuildRecordLogs'])) {
                $model->buildRecordLogs = [];
                $n                      = 0;
                foreach ($map['BuildRecordLogs'] as $item) {
                    $model->buildRecordLogs[$n++] = null !== $item ? buildRecordLogs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
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
