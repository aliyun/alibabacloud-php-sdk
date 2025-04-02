<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SimpleListReportResponseBody\dataList;

class SimpleListReportResponseBody extends Model
{
    /**
     * @var dataList[]
     */
    public $dataList;

    /**
     * @var bool
     */
    public $hasMore;

    /**
     * @var int
     */
    public $nextCursor;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'dataList' => 'dataList',
        'hasMore' => 'hasMore',
        'nextCursor' => 'nextCursor',
        'requestId' => 'requestId',
        'size' => 'size',
    ];

    public function validate()
    {
        if (\is_array($this->dataList)) {
            Model::validateArray($this->dataList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataList) {
            if (\is_array($this->dataList)) {
                $res['dataList'] = [];
                $n1 = 0;
                foreach ($this->dataList as $item1) {
                    $res['dataList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->hasMore) {
            $res['hasMore'] = $this->hasMore;
        }

        if (null !== $this->nextCursor) {
            $res['nextCursor'] = $this->nextCursor;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
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
        if (isset($map['dataList'])) {
            if (!empty($map['dataList'])) {
                $model->dataList = [];
                $n1 = 0;
                foreach ($map['dataList'] as $item1) {
                    $model->dataList[$n1++] = dataList::fromMap($item1);
                }
            }
        }

        if (isset($map['hasMore'])) {
            $model->hasMore = $map['hasMore'];
        }

        if (isset($map['nextCursor'])) {
            $model->nextCursor = $map['nextCursor'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
