<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLogMetaResponseBody\logMetaList;

class DescribeLogMetaResponseBody extends Model
{
    /**
     * @var logMetaList[]
     */
    public $logMetaList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'logMetaList' => 'LogMetaList',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->logMetaList)) {
            Model::validateArray($this->logMetaList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logMetaList) {
            if (\is_array($this->logMetaList)) {
                $res['LogMetaList'] = [];
                $n1 = 0;
                foreach ($this->logMetaList as $item1) {
                    $res['LogMetaList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['LogMetaList'])) {
            if (!empty($map['LogMetaList'])) {
                $model->logMetaList = [];
                $n1 = 0;
                foreach ($map['LogMetaList'] as $item1) {
                    $model->logMetaList[$n1] = logMetaList::fromMap($item1);
                    ++$n1;
                }
            }
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
