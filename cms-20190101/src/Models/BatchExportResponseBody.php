<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class BatchExportResponseBody extends Model
{
    /**
     * @var int
     */
    public $anchor;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $cursor;

    /**
     * @var MetricStat[]
     */
    public $dataResults;

    /**
     * @var bool
     */
    public $hasNext;

    /**
     * @var int
     */
    public $length;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'anchor' => 'Anchor',
        'code' => 'Code',
        'cursor' => 'Cursor',
        'dataResults' => 'DataResults',
        'hasNext' => 'HasNext',
        'length' => 'Length',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->dataResults)) {
            Model::validateArray($this->dataResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anchor) {
            $res['Anchor'] = $this->anchor;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->cursor) {
            $res['Cursor'] = $this->cursor;
        }

        if (null !== $this->dataResults) {
            if (\is_array($this->dataResults)) {
                $res['DataResults'] = [];
                $n1 = 0;
                foreach ($this->dataResults as $item1) {
                    $res['DataResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hasNext) {
            $res['HasNext'] = $this->hasNext;
        }

        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Anchor'])) {
            $model->anchor = $map['Anchor'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Cursor'])) {
            $model->cursor = $map['Cursor'];
        }

        if (isset($map['DataResults'])) {
            if (!empty($map['DataResults'])) {
                $model->dataResults = [];
                $n1 = 0;
                foreach ($map['DataResults'] as $item1) {
                    $model->dataResults[$n1] = MetricStat::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HasNext'])) {
            $model->hasNext = $map['HasNext'];
        }

        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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
