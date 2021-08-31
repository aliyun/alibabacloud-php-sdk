<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTagScanResultResponseBody\vulnerabilities;
use AlibabaCloud\Tea\Model;

class ListRepoTagScanResultResponseBody extends Model
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
     * @var int
     */
    public $totalCount;

    /**
     * @var vulnerabilities[]
     */
    public $vulnerabilities;
    protected $_name = [
        'requestId'       => 'RequestId',
        'code'            => 'Code',
        'pageNo'          => 'PageNo',
        'isSuccess'       => 'IsSuccess',
        'pageSize'        => 'PageSize',
        'totalCount'      => 'TotalCount',
        'vulnerabilities' => 'Vulnerabilities',
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
