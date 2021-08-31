<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetInstanceListResponseBody\commodityInstances;
use AlibabaCloud\Tea\Model;

class GetInstanceListResponseBody extends Model
{
    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

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
    public $totalCount;

    /**
     * @var commodityInstances[]
     */
    public $commodityInstances;
    protected $_name = [
        'httpStatusCode'     => 'HttpStatusCode',
        'requestId'          => 'RequestId',
        'success'            => 'Success',
        'code'               => 'Code',
        'message'            => 'Message',
        'pageSize'           => 'PageSize',
        'pageNumber'         => 'PageNumber',
        'totalCount'         => 'TotalCount',
        'commodityInstances' => 'CommodityInstances',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->commodityInstances) {
            $res['CommodityInstances'] = [];
            if (null !== $this->commodityInstances && \is_array($this->commodityInstances)) {
                $n = 0;
                foreach ($this->commodityInstances as $item) {
                    $res['CommodityInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['CommodityInstances'])) {
            if (!empty($map['CommodityInstances'])) {
                $model->commodityInstances = [];
                $n                         = 0;
                foreach ($map['CommodityInstances'] as $item) {
                    $model->commodityInstances[$n++] = null !== $item ? commodityInstances::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
