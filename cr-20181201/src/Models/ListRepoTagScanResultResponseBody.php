<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTagScanResultResponseBody\vulnerabilities;
use AlibabaCloud\Tea\Model;

class ListRepoTagScanResultResponseBody extends Model
{
    /**
     * @description The return value.
     *
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   `true`: The request is successful.
     *   `false`: The request failed.
     *
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description The number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries returned per page.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 56B5C92F-F5D9-46E0-823F-EC71D1892DAA
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of vulnerabilities detected on images.
     *
     * @example 196
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The details about the detected vulnerabilities.
     *
     * @var vulnerabilities[]
     */
    public $vulnerabilities;
    protected $_name = [
        'code'            => 'Code',
        'isSuccess'       => 'IsSuccess',
        'pageNo'          => 'PageNo',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
        'vulnerabilities' => 'Vulnerabilities',
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->vulnerabilities) {
            $res['Vulnerabilities'] = [];
            if (null !== $this->vulnerabilities && \is_array($this->vulnerabilities)) {
                $n = 0;
                foreach ($this->vulnerabilities as $item) {
                    $res['Vulnerabilities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRepoTagScanResultResponseBody
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Vulnerabilities'])) {
            if (!empty($map['Vulnerabilities'])) {
                $model->vulnerabilities = [];
                $n                      = 0;
                foreach ($map['Vulnerabilities'] as $item) {
                    $model->vulnerabilities[$n++] = null !== $item ? vulnerabilities::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
