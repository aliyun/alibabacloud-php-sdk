<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDSRecordResponseBody\DSRecordList;

class QueryDSRecordResponseBody extends Model
{
    /**
     * @var DSRecordList[]
     */
    public $DSRecordList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DSRecordList' => 'DSRecordList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->DSRecordList)) {
            Model::validateArray($this->DSRecordList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DSRecordList) {
            if (\is_array($this->DSRecordList)) {
                $res['DSRecordList'] = [];
                $n1 = 0;
                foreach ($this->DSRecordList as $item1) {
                    $res['DSRecordList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DSRecordList'])) {
            if (!empty($map['DSRecordList'])) {
                $model->DSRecordList = [];
                $n1 = 0;
                foreach ($map['DSRecordList'] as $item1) {
                    $model->DSRecordList[$n1] = DSRecordList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
