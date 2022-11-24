<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class ListSavepointsResponseBody extends Model
{
    /**
     * @var Savepoint[]
     */
    public $data;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $httpCode;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'data'         => 'data',
        'errorCode'    => 'errorCode',
        'errorMessage' => 'errorMessage',
        'httpCode'     => 'httpCode',
        'pageIndex'    => 'pageIndex',
        'pageSize'     => 'pageSize',
        'requestId'    => 'requestId',
        'success'      => 'success',
        'totalSize'    => 'totalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->httpCode) {
            $res['httpCode'] = $this->httpCode;
        }
        if (null !== $this->pageIndex) {
            $res['pageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->totalSize) {
            $res['totalSize'] = $this->totalSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSavepointsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['data'] as $item) {
                    $model->data[$n++] = null !== $item ? Savepoint::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['httpCode'])) {
            $model->httpCode = $map['httpCode'];
        }
        if (isset($map['pageIndex'])) {
            $model->pageIndex = $map['pageIndex'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['totalSize'])) {
            $model->totalSize = $map['totalSize'];
        }

        return $model;
    }
}
