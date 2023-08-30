<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListConfigTrackResponseBody\traces;
use AlibabaCloud\Tea\Model;

class ListConfigTrackResponseBody extends Model
{
    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   `true`: The request was successful.
     *   `false`: The request failed.
     *
     * @example mse-100-000
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The track data.
     *
     * @example 200
     *
     * @var string
     */
    public $httpCode;

    /**
     * @description The request was successfully processed.
     *
     * @example The error code returned if the request failed.
     *
     * @var string
     */
    public $message;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The page number of the returned page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The message returned.
     *
     * @example 0CE3ABD2-1E04-561F-A9B4-0423D50****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description httpCode
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The ID of the request.
     *
     * @example 3
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The details of the data.
     *
     * @var traces[]
     */
    public $traces;
    protected $_name = [
        'errorCode'  => 'ErrorCode',
        'httpCode'   => 'HttpCode',
        'message'    => 'Message',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
        'totalCount' => 'TotalCount',
        'traces'     => 'Traces',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->traces) {
            $res['Traces'] = [];
            if (null !== $this->traces && \is_array($this->traces)) {
                $n = 0;
                foreach ($this->traces as $item) {
                    $res['Traces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConfigTrackResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Traces'])) {
            if (!empty($map['Traces'])) {
                $model->traces = [];
                $n             = 0;
                foreach ($map['Traces'] as $item) {
                    $model->traces[$n++] = null !== $item ? traces::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
