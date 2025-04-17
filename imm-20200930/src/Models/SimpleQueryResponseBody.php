<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\SimpleQueryResponseBody\aggregations;

class SimpleQueryResponseBody extends Model
{
    /**
     * @var aggregations[]
     */
    public $aggregations;

    /**
     * @var File[]
     */
    public $files;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalHits;
    protected $_name = [
        'aggregations' => 'Aggregations',
        'files' => 'Files',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalHits' => 'TotalHits',
    ];

    public function validate()
    {
        if (\is_array($this->aggregations)) {
            Model::validateArray($this->aggregations);
        }
        if (\is_array($this->files)) {
            Model::validateArray($this->files);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregations) {
            if (\is_array($this->aggregations)) {
                $res['Aggregations'] = [];
                $n1 = 0;
                foreach ($this->aggregations as $item1) {
                    $res['Aggregations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->files) {
            if (\is_array($this->files)) {
                $res['Files'] = [];
                $n1 = 0;
                foreach ($this->files as $item1) {
                    $res['Files'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalHits) {
            $res['TotalHits'] = $this->totalHits;
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
        if (isset($map['Aggregations'])) {
            if (!empty($map['Aggregations'])) {
                $model->aggregations = [];
                $n1 = 0;
                foreach ($map['Aggregations'] as $item1) {
                    $model->aggregations[$n1++] = aggregations::fromMap($item1);
                }
            }
        }

        if (isset($map['Files'])) {
            if (!empty($map['Files'])) {
                $model->files = [];
                $n1 = 0;
                foreach ($map['Files'] as $item1) {
                    $model->files[$n1++] = File::fromMap($item1);
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalHits'])) {
            $model->totalHits = $map['TotalHits'];
        }

        return $model;
    }
}
