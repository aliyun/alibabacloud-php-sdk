<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeImageModifiedRecordsResponseBody\imageModifiedRecords;

class DescribeImageModifiedRecordsResponseBody extends Model
{
    /**
     * @var imageModifiedRecords[]
     */
    public $imageModifiedRecords;

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
    public $totalCount;
    protected $_name = [
        'imageModifiedRecords' => 'ImageModifiedRecords',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->imageModifiedRecords)) {
            Model::validateArray($this->imageModifiedRecords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageModifiedRecords) {
            if (\is_array($this->imageModifiedRecords)) {
                $res['ImageModifiedRecords'] = [];
                $n1 = 0;
                foreach ($this->imageModifiedRecords as $item1) {
                    $res['ImageModifiedRecords'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['ImageModifiedRecords'])) {
            if (!empty($map['ImageModifiedRecords'])) {
                $model->imageModifiedRecords = [];
                $n1 = 0;
                foreach ($map['ImageModifiedRecords'] as $item1) {
                    $model->imageModifiedRecords[$n1] = imageModifiedRecords::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
