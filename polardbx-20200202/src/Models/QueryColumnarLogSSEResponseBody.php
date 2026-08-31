<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\QueryColumnarLogSSEResponseBody\accessDeniedDetail;

class QueryColumnarLogSSEResponseBody extends Model
{
    /**
     * @var accessDeniedDetail
     */
    public $accessDeniedDetail;

    /**
     * @var int
     */
    public $appliedOffset;

    /**
     * @var int
     */
    public $appliedRowLimit;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $hasMore;

    /**
     * @var string
     */
    public $message;

    /**
     * @var bool
     */
    public $partial;

    /**
     * @var int
     */
    public $queryElapsedTimeMilliseconds;

    /**
     * @var string
     */
    public $queryId;

    /**
     * @var string[][]
     */
    public $records;

    /**
     * @var int
     */
    public $recordsSizeBytes;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $retryable;

    /**
     * @var int
     */
    public $returnedRowCount;

    /**
     * @var int
     */
    public $sequence;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'appliedOffset' => 'AppliedOffset',
        'appliedRowLimit' => 'AppliedRowLimit',
        'code' => 'Code',
        'hasMore' => 'HasMore',
        'message' => 'Message',
        'partial' => 'Partial',
        'queryElapsedTimeMilliseconds' => 'QueryElapsedTimeMilliseconds',
        'queryId' => 'QueryId',
        'records' => 'Records',
        'recordsSizeBytes' => 'RecordsSizeBytes',
        'requestId' => 'RequestId',
        'retryable' => 'Retryable',
        'returnedRowCount' => 'ReturnedRowCount',
        'sequence' => 'Sequence',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->accessDeniedDetail) {
            $this->accessDeniedDetail->validate();
        }
        if (\is_array($this->records)) {
            Model::validateArray($this->records);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = null !== $this->accessDeniedDetail ? $this->accessDeniedDetail->toArray($noStream) : $this->accessDeniedDetail;
        }

        if (null !== $this->appliedOffset) {
            $res['AppliedOffset'] = $this->appliedOffset;
        }

        if (null !== $this->appliedRowLimit) {
            $res['AppliedRowLimit'] = $this->appliedRowLimit;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->partial) {
            $res['Partial'] = $this->partial;
        }

        if (null !== $this->queryElapsedTimeMilliseconds) {
            $res['QueryElapsedTimeMilliseconds'] = $this->queryElapsedTimeMilliseconds;
        }

        if (null !== $this->queryId) {
            $res['QueryId'] = $this->queryId;
        }

        if (null !== $this->records) {
            if (\is_array($this->records)) {
                $res['Records'] = [];
                $n1 = 0;
                foreach ($this->records as $item1) {
                    if (\is_array($item1)) {
                        $res['Records'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Records'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->recordsSizeBytes) {
            $res['RecordsSizeBytes'] = $this->recordsSizeBytes;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->retryable) {
            $res['Retryable'] = $this->retryable;
        }

        if (null !== $this->returnedRowCount) {
            $res['ReturnedRowCount'] = $this->returnedRowCount;
        }

        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = accessDeniedDetail::fromMap($map['AccessDeniedDetail']);
        }

        if (isset($map['AppliedOffset'])) {
            $model->appliedOffset = $map['AppliedOffset'];
        }

        if (isset($map['AppliedRowLimit'])) {
            $model->appliedRowLimit = $map['AppliedRowLimit'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Partial'])) {
            $model->partial = $map['Partial'];
        }

        if (isset($map['QueryElapsedTimeMilliseconds'])) {
            $model->queryElapsedTimeMilliseconds = $map['QueryElapsedTimeMilliseconds'];
        }

        if (isset($map['QueryId'])) {
            $model->queryId = $map['QueryId'];
        }

        if (isset($map['Records'])) {
            if (!empty($map['Records'])) {
                $model->records = [];
                $n1 = 0;
                foreach ($map['Records'] as $item1) {
                    if (!empty($item1)) {
                        $model->records[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->records[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['RecordsSizeBytes'])) {
            $model->recordsSizeBytes = $map['RecordsSizeBytes'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Retryable'])) {
            $model->retryable = $map['Retryable'];
        }

        if (isset($map['ReturnedRowCount'])) {
            $model->returnedRowCount = $map['ReturnedRowCount'];
        }

        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
