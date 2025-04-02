<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordTextResponseBody\paragraphList;

class QueryCloudRecordTextResponseBody extends Model
{
    /**
     * @var bool
     */
    public $hasMore;

    /**
     * @var paragraphList[]
     */
    public $paragraphList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'hasMore' => 'hasMore',
        'paragraphList' => 'paragraphList',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->paragraphList)) {
            Model::validateArray($this->paragraphList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hasMore) {
            $res['hasMore'] = $this->hasMore;
        }

        if (null !== $this->paragraphList) {
            if (\is_array($this->paragraphList)) {
                $res['paragraphList'] = [];
                $n1 = 0;
                foreach ($this->paragraphList as $item1) {
                    $res['paragraphList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['hasMore'])) {
            $model->hasMore = $map['hasMore'];
        }

        if (isset($map['paragraphList'])) {
            if (!empty($map['paragraphList'])) {
                $model->paragraphList = [];
                $n1 = 0;
                foreach ($map['paragraphList'] as $item1) {
                    $model->paragraphList[$n1++] = paragraphList::fromMap($item1);
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
