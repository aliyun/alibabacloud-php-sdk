<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class UpsertChunksResponseBody extends Model
{
    /**
     * @description Number of tokens used during vectorization.
     *
     * > A token refers to the smallest unit into which the input text is divided. A token can be a word, a phrase, a punctuation mark, a character, etc.
     *
     * @example 100
     *
     * @var string
     */
    public $embeddingTokens;

    /**
     * @description Return message.
     *
     * @example Successful
     *
     * @var string
     */
    public $message;

    /**
     * @description Request ID.
     *
     * @example ABB39CC3-4488-4857-905D-2E4A051D0521
     *
     * @var string
     */
    public $requestId;

    /**
     * @description API execution status, with the following values:
     * - **success**: Execution succeeded.
     * - **fail**: Execution failed.
     *
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'embeddingTokens' => 'EmbeddingTokens',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->embeddingTokens) {
            $res['EmbeddingTokens'] = $this->embeddingTokens;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpsertChunksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EmbeddingTokens'])) {
            $model->embeddingTokens = $map['EmbeddingTokens'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
