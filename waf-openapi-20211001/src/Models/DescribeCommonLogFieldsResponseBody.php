<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCommonLogFieldsResponseBody\logFieldList;

class DescribeCommonLogFieldsResponseBody extends Model
{
    /**
     * @var logFieldList[]
     */
    public $logFieldList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'logFieldList' => 'LogFieldList',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->logFieldList)) {
            Model::validateArray($this->logFieldList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logFieldList) {
            if (\is_array($this->logFieldList)) {
                $res['LogFieldList'] = [];
                $n1 = 0;
                foreach ($this->logFieldList as $item1) {
                    $res['LogFieldList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LogFieldList'])) {
            if (!empty($map['LogFieldList'])) {
                $model->logFieldList = [];
                $n1 = 0;
                foreach ($map['LogFieldList'] as $item1) {
                    $model->logFieldList[$n1] = logFieldList::fromMap($item1);
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
