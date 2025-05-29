<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeStreamsResponseBody\streams;

class DescribeStreamsResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageCount;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var streams[]
     */
    public $streams;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageCount' => 'PageCount',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'streams' => 'Streams',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->streams)) {
            Model::validateArray($this->streams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageCount) {
            $res['PageCount'] = $this->pageCount;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->streams) {
            if (\is_array($this->streams)) {
                $res['Streams'] = [];
                $n1 = 0;
                foreach ($this->streams as $item1) {
                    $res['Streams'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['PageCount'])) {
            $model->pageCount = $map['PageCount'];
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Streams'])) {
            if (!empty($map['Streams'])) {
                $model->streams = [];
                $n1 = 0;
                foreach ($map['Streams'] as $item1) {
                    $model->streams[$n1++] = streams::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
