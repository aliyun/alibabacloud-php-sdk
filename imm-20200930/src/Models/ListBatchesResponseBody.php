<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ListBatchesResponseBody extends Model
{
    /**
     * @var DataIngestion[]
     */
    public $batches;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'batches' => 'Batches',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->batches)) {
            Model::validateArray($this->batches);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batches) {
            if (\is_array($this->batches)) {
                $res['Batches'] = [];
                $n1 = 0;
                foreach ($this->batches as $item1) {
                    $res['Batches'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Batches'])) {
            if (!empty($map['Batches'])) {
                $model->batches = [];
                $n1 = 0;
                foreach ($map['Batches'] as $item1) {
                    $model->batches[$n1++] = DataIngestion::fromMap($item1);
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
