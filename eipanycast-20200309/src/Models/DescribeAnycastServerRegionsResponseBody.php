<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\DescribeAnycastServerRegionsResponseBody\anycastServerRegionList;

class DescribeAnycastServerRegionsResponseBody extends Model
{
    /**
     * @var anycastServerRegionList[]
     */
    public $anycastServerRegionList;

    /**
     * @var string
     */
    public $count;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'anycastServerRegionList' => 'AnycastServerRegionList',
        'count' => 'Count',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->anycastServerRegionList)) {
            Model::validateArray($this->anycastServerRegionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anycastServerRegionList) {
            if (\is_array($this->anycastServerRegionList)) {
                $res['AnycastServerRegionList'] = [];
                $n1 = 0;
                foreach ($this->anycastServerRegionList as $item1) {
                    $res['AnycastServerRegionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AnycastServerRegionList'])) {
            if (!empty($map['AnycastServerRegionList'])) {
                $model->anycastServerRegionList = [];
                $n1 = 0;
                foreach ($map['AnycastServerRegionList'] as $item1) {
                    $model->anycastServerRegionList[$n1] = anycastServerRegionList::fromMap($item1);
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
