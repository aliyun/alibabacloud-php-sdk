<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDSRecordResponseBody\DSRecordList;
use AlibabaCloud\Tea\Model;

class QueryDSRecordResponseBody extends Model
{
    /**
     * @var DSRecordList[]
     */
    public $DSRecordList;

    /**
     * @example 814B2AF0-ED6F-4C13-B41C-8AC0B1023583
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DSRecordList' => 'DSRecordList',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DSRecordList) {
            $res['DSRecordList'] = [];
            if (null !== $this->DSRecordList && \is_array($this->DSRecordList)) {
                $n = 0;
                foreach ($this->DSRecordList as $item) {
                    $res['DSRecordList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDSRecordResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DSRecordList'])) {
            if (!empty($map['DSRecordList'])) {
                $model->DSRecordList = [];
                $n                   = 0;
                foreach ($map['DSRecordList'] as $item) {
                    $model->DSRecordList[$n++] = null !== $item ? DSRecordList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
