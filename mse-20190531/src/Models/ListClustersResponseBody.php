<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListClustersResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListClustersResponseBody extends Model
{
    /**
     * @description The details of the data.
     *
     * @var data[]
     */
    public $data;

    /**
     * @description The error code returned if the request failed.
     *
     * @example mse-100-000
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The HTTP status code returned.
     *
     * @example 202
     *
     * @var string
     */
    public $httpCode;

    /**
     * @description The message returned.
     *
     * @example The request was successfully processed.
     *
     * @var string
     */
    public $message;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 69AD2AA7-DB47-449B-941B-B14409DF****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   `true`: The request was successful.
     *   `false`: The request failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The total number of returned instances.
     *
     * @example 7
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'data'       => 'Data',
        'errorCode'  => 'ErrorCode',
        'httpCode'   => 'HttpCode',
        'message'    => 'Message',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->httpCode) {
            $res['HttpCode'] = $this->httpCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClustersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['HttpCode'])) {
            $model->httpCode = $map['HttpCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
