<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\ListScanMaliciousFileByTaskResponseBody\scanMaliciousFiles;
use AlibabaCloud\Tea\Model;

class ListScanMaliciousFileByTaskResponseBody extends Model
{
    /**
     * @example success
     *
     * @var int
     */
    public $code;

    /**
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 52AE49C8-B91A-5C1A-821F-C34324B42F7C
     *
     * @var string
     */
    public $requestId;

    /**
     * @var scanMaliciousFiles[]
     */
    public $scanMaliciousFiles;

    /**
     * @example 13
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code'               => 'Code',
        'isSuccess'          => 'IsSuccess',
        'pageNo'             => 'PageNo',
        'pageSize'           => 'PageSize',
        'requestId'          => 'RequestId',
        'scanMaliciousFiles' => 'ScanMaliciousFiles',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->scanMaliciousFiles) {
            $res['ScanMaliciousFiles'] = [];
            if (null !== $this->scanMaliciousFiles && \is_array($this->scanMaliciousFiles)) {
                $n = 0;
                foreach ($this->scanMaliciousFiles as $item) {
                    $res['ScanMaliciousFiles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListScanMaliciousFileByTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['ScanMaliciousFiles'])) {
            if (!empty($map['ScanMaliciousFiles'])) {
                $model->scanMaliciousFiles = [];
                $n                         = 0;
                foreach ($map['ScanMaliciousFiles'] as $item) {
                    $model->scanMaliciousFiles[$n++] = null !== $item ? scanMaliciousFiles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
