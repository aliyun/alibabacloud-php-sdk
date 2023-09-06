<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordTextResponseBody\paragraphList;
use AlibabaCloud\Tea\Model;

class QueryCloudRecordTextResponseBody extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $hasMore;

    /**
     * @var paragraphList[]
     */
    public $paragraphList;

    /**
     * @description requestId
     *
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'hasMore'       => 'hasMore',
        'paragraphList' => 'paragraphList',
        'requestId'     => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hasMore) {
            $res['hasMore'] = $this->hasMore;
        }
        if (null !== $this->paragraphList) {
            $res['paragraphList'] = [];
            if (null !== $this->paragraphList && \is_array($this->paragraphList)) {
                $n = 0;
                foreach ($this->paragraphList as $item) {
                    $res['paragraphList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCloudRecordTextResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['hasMore'])) {
            $model->hasMore = $map['hasMore'];
        }
        if (isset($map['paragraphList'])) {
            if (!empty($map['paragraphList'])) {
                $model->paragraphList = [];
                $n                    = 0;
                foreach ($map['paragraphList'] as $item) {
                    $model->paragraphList[$n++] = null !== $item ? paragraphList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
