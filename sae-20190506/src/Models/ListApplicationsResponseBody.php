<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationsResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListApplicationsResponseBody extends Model
{
    /**
     * @description Queries applications.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description 20
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of the returned page.
     *
     * @var data
     */
    public $data;

    /**
     * @description The number of entries returned on each page.
     *
     * @example The ID of the request.
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description 20
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description cn-beijing:demo
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The number of entries returned on each page.
     *
     * @example B4D805CA-926D-41B1-8E63-7AD0C1ED****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 1
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description demo-app
     *
     * @example 2
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'code'        => 'Code',
        'currentPage' => 'CurrentPage',
        'data'        => 'Data',
        'errorCode'   => 'ErrorCode',
        'message'     => 'Message',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'success'     => 'Success',
        'totalSize'   => 'TotalSize',
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
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApplicationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
