<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeImageModifiedRecordsResponseBody\imageModifiedRecords;
use AlibabaCloud\Tea\Model;

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
        'nextToken'            => 'NextToken',
        'requestId'            => 'RequestId',
        'totalCount'           => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageModifiedRecords) {
            $res['ImageModifiedRecords'] = [];
            if (null !== $this->imageModifiedRecords && \is_array($this->imageModifiedRecords)) {
                $n = 0;
                foreach ($this->imageModifiedRecords as $item) {
                    $res['ImageModifiedRecords'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribeImageModifiedRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageModifiedRecords'])) {
            if (!empty($map['ImageModifiedRecords'])) {
                $model->imageModifiedRecords = [];
                $n                           = 0;
                foreach ($map['ImageModifiedRecords'] as $item) {
                    $model->imageModifiedRecords[$n++] = null !== $item ? imageModifiedRecords::fromMap($item) : $item;
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
