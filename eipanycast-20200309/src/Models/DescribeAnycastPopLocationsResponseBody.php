<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\DescribeAnycastPopLocationsResponseBody\anycastPopLocationList;

class DescribeAnycastPopLocationsResponseBody extends Model
{
    /**
     * @var anycastPopLocationList[]
     */
    public $anycastPopLocationList;

    /**
     * @var string
     */
    public $count;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'anycastPopLocationList' => 'AnycastPopLocationList',
        'count' => 'Count',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->anycastPopLocationList)) {
            Model::validateArray($this->anycastPopLocationList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anycastPopLocationList) {
            if (\is_array($this->anycastPopLocationList)) {
                $res['AnycastPopLocationList'] = [];
                $n1 = 0;
                foreach ($this->anycastPopLocationList as $item1) {
                    $res['AnycastPopLocationList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
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
        if (isset($map['AnycastPopLocationList'])) {
            if (!empty($map['AnycastPopLocationList'])) {
                $model->anycastPopLocationList = [];
                $n1 = 0;
                foreach ($map['AnycastPopLocationList'] as $item1) {
                    $model->anycastPopLocationList[$n1] = anycastPopLocationList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
