<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryHotMoviesResponseBody\movies;
use AlibabaCloud\Tea\Model;

class QueryHotMoviesResponseBody extends Model
{
    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $code;

    /**
     * @example 1
     *
     * @var string
     */
    public $logsId;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $message;

    /**
     * @var movies
     */
    public $movies;

    /**
     * @example 1AF23E47-D8FB-576A-B069-CA98B4DE****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 205
     *
     * @var string
     */
    public $subCode;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $subMessage;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'       => 'Code',
        'logsId'     => 'LogsId',
        'message'    => 'Message',
        'movies'     => 'Movies',
        'requestId'  => 'RequestId',
        'subCode'    => 'SubCode',
        'subMessage' => 'SubMessage',
        'success'    => 'Success',
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
        if (null !== $this->logsId) {
            $res['LogsId'] = $this->logsId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->movies) {
            $res['Movies'] = null !== $this->movies ? $this->movies->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
        }
        if (null !== $this->subMessage) {
            $res['SubMessage'] = $this->subMessage;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryHotMoviesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['LogsId'])) {
            $model->logsId = $map['LogsId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Movies'])) {
            $model->movies = movies::fromMap($map['Movies']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }
        if (isset($map['SubMessage'])) {
            $model->subMessage = $map['SubMessage'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
