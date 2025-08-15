<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeTrailsResponseBody\trailList;

class DescribeTrailsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var trailList[]
     */
    public $trailList;
    protected $_name = [
        'requestId' => 'RequestId',
        'trailList' => 'TrailList',
    ];

    public function validate()
    {
        if (\is_array($this->trailList)) {
            Model::validateArray($this->trailList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->trailList) {
            if (\is_array($this->trailList)) {
                $res['TrailList'] = [];
                $n1 = 0;
                foreach ($this->trailList as $item1) {
                    $res['TrailList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TrailList'])) {
            if (!empty($map['TrailList'])) {
                $model->trailList = [];
                $n1 = 0;
                foreach ($map['TrailList'] as $item1) {
                    $model->trailList[$n1] = trailList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
