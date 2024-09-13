<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\PageQueryWhiteListSettingResponseBody\resultObject;
use AlibabaCloud\Tea\Model;

class PageQueryWhiteListSettingResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Id of the request
     *
     * @example 5A6229C0-E156-48E4-B6EC-0F528BDF60D2
     *
     * @var string
     */
    public $requestId;

    /**
     * @var resultObject[]
     */
    public $resultObject;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 28
     *
     * @var int
     */
    public $totalItem;

    /**
     * @example 3
     *
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'code'         => 'Code',
        'currentPage'  => 'CurrentPage',
        'message'      => 'Message',
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
        'resultObject' => 'ResultObject',
        'success'      => 'Success',
        'totalItem'    => 'TotalItem',
        'totalPage'    => 'TotalPage',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resultObject) {
            $res['ResultObject'] = [];
            if (null !== $this->resultObject && \is_array($this->resultObject)) {
                $n = 0;
                foreach ($this->resultObject as $item) {
                    $res['ResultObject'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalItem) {
            $res['TotalItem'] = $this->totalItem;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PageQueryWhiteListSettingResponseBody
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResultObject'])) {
            if (!empty($map['ResultObject'])) {
                $model->resultObject = [];
                $n                   = 0;
                foreach ($map['ResultObject'] as $item) {
                    $model->resultObject[$n++] = null !== $item ? resultObject::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalItem'])) {
            $model->totalItem = $map['TotalItem'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        return $model;
    }
}
