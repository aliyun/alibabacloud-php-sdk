<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\SDK\Market\V20151101\Models\DescribeApiMeteringResponseBody\result;
use AlibabaCloud\Tea\Model;

class DescribeApiMeteringResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example 100
     *
     * @var int
     */
    public $count;

    /**
     * @description fatal
     *
     * @example false
     *
     * @var bool
     */
    public $fatal;

    /**
     * @var string
     */
    public $message;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 62FC432C55A1A63534A6CB34
     *
     * @var string
     */
    public $requestId;

    /**
     * @var result[]
     */
    public $result;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 1.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'code'       => 'Code',
        'count'      => 'Count',
        'fatal'      => 'Fatal',
        'message'    => 'Message',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'result'     => 'Result',
        'success'    => 'Success',
        'version'    => 'Version',
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
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->fatal) {
            $res['Fatal'] = $this->fatal;
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
        if (null !== $this->result) {
            $res['Result'] = [];
            if (null !== $this->result && \is_array($this->result)) {
                $n = 0;
                foreach ($this->result as $item) {
                    $res['Result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiMeteringResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Fatal'])) {
            $model->fatal = $map['Fatal'];
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
        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n             = 0;
                foreach ($map['Result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
