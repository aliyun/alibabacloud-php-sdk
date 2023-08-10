<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeConsumerChannelResponseBody\consumerChannels;
use AlibabaCloud\Tea\Model;

class DescribeConsumerChannelResponseBody extends Model
{
    /**
     * @description The details of the consumer groups.
     *
     * @var consumerChannels[]
     */
    public $consumerChannels;

    /**
     * @description The error code returned if the request failed.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message returned if the request failed.
     *
     * @example The request processing has failed due to some unknown error.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var string
     */
    public $httpStatusCode;

    /**
     * @description The number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The maximum number of consumer groups that can be displayed on one page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageRecordCount;

    /**
     * @description The ID of the request.
     *
     * @example D66140B3-C747-42B6-8315-BAF6490E****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var string
     */
    public $success;

    /**
     * @description The total number of consumer groups.
     *
     * @example 1
     *
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'consumerChannels' => 'ConsumerChannels',
        'errCode'          => 'ErrCode',
        'errMessage'       => 'ErrMessage',
        'httpStatusCode'   => 'HttpStatusCode',
        'pageNumber'       => 'PageNumber',
        'pageRecordCount'  => 'PageRecordCount',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerChannels) {
            $res['ConsumerChannels'] = [];
            if (null !== $this->consumerChannels && \is_array($this->consumerChannels)) {
                $n = 0;
                foreach ($this->consumerChannels as $item) {
                    $res['ConsumerChannels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConsumerChannelResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumerChannels'])) {
            if (!empty($map['ConsumerChannels'])) {
                $model->consumerChannels = [];
                $n                       = 0;
                foreach ($map['ConsumerChannels'] as $item) {
                    $model->consumerChannels[$n++] = null !== $item ? consumerChannels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
