<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryHotMoviesResponseBody\movies;
use AlibabaCloud\Tea\Model;

class QueryHotMoviesResponseBody extends Model
{
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
    public $subMessage;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $subCode;

    /**
     * @var string
     */
    public $logsId;

    /**
     * @var movies
     */
    public $movies;
    protected $_name = [
        'requestId'  => 'RequestId',
        'success'    => 'Success',
        'subMessage' => 'SubMessage',
        'code'       => 'Code',
        'message'    => 'Message',
        'subCode'    => 'SubCode',
        'logsId'     => 'LogsId',
        'movies'     => 'Movies',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->subMessage) {
            $res['SubMessage'] = $this->subMessage;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
        }
        if (null !== $this->logsId) {
            $res['LogsId'] = $this->logsId;
        }
        if (null !== $this->movies) {
            $res['Movies'] = null !== $this->movies ? $this->movies->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['SubMessage'])) {
            $model->subMessage = $map['SubMessage'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }
        if (isset($map['LogsId'])) {
            $model->logsId = $map['LogsId'];
        }
        if (isset($map['Movies'])) {
            $model->movies = movies::fromMap($map['Movies']);
        }

        return $model;
    }
}
