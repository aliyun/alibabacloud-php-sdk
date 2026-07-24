<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\GetJobDebugDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\GetJobDebugDataResponseBody\data\dataRows;

class data extends Model
{
    /**
     * @var dataRows[]
     */
    public $dataRows;

    /**
     * @var string
     */
    public $debugField;

    /**
     * @var bool
     */
    public $hasMore;

    /**
     * @var string
     */
    public $limit;

    /**
     * @var string
     */
    public $nextCursor;
    protected $_name = [
        'dataRows' => 'DataRows',
        'debugField' => 'DebugField',
        'hasMore' => 'HasMore',
        'limit' => 'Limit',
        'nextCursor' => 'NextCursor',
    ];

    public function validate()
    {
        if (\is_array($this->dataRows)) {
            Model::validateArray($this->dataRows);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataRows) {
            if (\is_array($this->dataRows)) {
                $res['DataRows'] = [];
                $n1 = 0;
                foreach ($this->dataRows as $item1) {
                    $res['DataRows'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->debugField) {
            $res['DebugField'] = $this->debugField;
        }

        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->nextCursor) {
            $res['NextCursor'] = $this->nextCursor;
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
        if (isset($map['DataRows'])) {
            if (!empty($map['DataRows'])) {
                $model->dataRows = [];
                $n1 = 0;
                foreach ($map['DataRows'] as $item1) {
                    $model->dataRows[$n1] = dataRows::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DebugField'])) {
            $model->debugField = $map['DebugField'];
        }

        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['NextCursor'])) {
            $model->nextCursor = $map['NextCursor'];
        }

        return $model;
    }
}
