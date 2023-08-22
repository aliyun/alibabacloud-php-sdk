<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\ListChainResponseBody\chains;
use AlibabaCloud\Tea\Model;

class ListChainResponseBody extends Model
{
    /**
     * @description The list of delivery chains.
     *
     * @var chains[]
     */
    public $chains;

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
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 85A99B10-3926-5201-958E-C06FA47F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of delivery chains.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'chains'     => 'Chains',
        'code'       => 'Code',
        'isSuccess'  => 'IsSuccess',
        'pageNo'     => 'PageNo',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chains) {
            $res['Chains'] = [];
            if (null !== $this->chains && \is_array($this->chains)) {
                $n = 0;
                foreach ($this->chains as $item) {
                    $res['Chains'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListChainResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Chains'])) {
            if (!empty($map['Chains'])) {
                $model->chains = [];
                $n             = 0;
                foreach ($map['Chains'] as $item) {
                    $model->chains[$n++] = null !== $item ? chains::fromMap($item) : $item;
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
