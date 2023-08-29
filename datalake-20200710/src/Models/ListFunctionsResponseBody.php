<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class ListFunctionsResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @var Function_[]
     */
    public $functions;

    /**
     * @example .
     *
     * @var string
     */
    public $message;

    /**
     * @example 2cb472ec1bf84f8d92f9c4baa0d21c19aa
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @example B7F4B621-E41E-4C84-B97F-42B5380A32BB
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'          => 'Code',
        'functions'     => 'Functions',
        'message'       => 'Message',
        'nextPageToken' => 'NextPageToken',
        'requestId'     => 'RequestId',
        'success'       => 'Success',
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
        if (null !== $this->functions) {
            $res['Functions'] = [];
            if (null !== $this->functions && \is_array($this->functions)) {
                $n = 0;
                foreach ($this->functions as $item) {
                    $res['Functions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFunctionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Functions'])) {
            if (!empty($map['Functions'])) {
                $model->functions = [];
                $n                = 0;
                foreach ($map['Functions'] as $item) {
                    $model->functions[$n++] = null !== $item ? Function_::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
