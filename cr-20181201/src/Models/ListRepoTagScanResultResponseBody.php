<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTagScanResultResponseBody\vulnerabilities;
use AlibabaCloud\Tea\Model;

class ListRepoTagScanResultResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var int
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
     * @var vulnerabilities[]
     */
    public $vulnerabilities;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'isSuccess'       => 'IsSuccess',
        'totalCount'      => 'TotalCount',
        'requestId'       => 'RequestId',
        'pageSize'        => 'PageSize',
        'pageNo'          => 'PageNo',
        'vulnerabilities' => 'Vulnerabilities',
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
        if (null !== $this->vulnerabilities) {
            $res['Vulnerabilities'] = [];
            if (null !== $this->vulnerabilities && \is_array($this->vulnerabilities)) {
                $n = 0;
                foreach ($this->vulnerabilities as $item) {
                    $res['Vulnerabilities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
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
        if (isset($map['Vulnerabilities'])) {
            if (!empty($map['Vulnerabilities'])) {
                $model->vulnerabilities = [];
                $n                      = 0;
                foreach ($map['Vulnerabilities'] as $item) {
                    $model->vulnerabilities[$n++] = null !== $item ? vulnerabilities::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
