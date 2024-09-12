<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\RerankResponseBody\results;
use AlibabaCloud\Tea\Model;

class RerankResponseBody extends Model
{
    /**
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @example ABB39CC3-4488-4857-905D-2E4A051D0521
     *
     * @var string
     */
    public $requestId;

    /**
     * @var results
     */
    public $results;

    /**
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @example 100
     *
     * @var int
     */
    public $tokens;
    protected $_name = [
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'results'   => 'Results',
        'status'    => 'Status',
        'tokens'    => 'Tokens',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->results) {
            $res['Results'] = null !== $this->results ? $this->results->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tokens) {
            $res['Tokens'] = $this->tokens;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RerankResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Results'])) {
            $model->results = results::fromMap($map['Results']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tokens'])) {
            $model->tokens = $map['Tokens'];
        }

        return $model;
    }
}
