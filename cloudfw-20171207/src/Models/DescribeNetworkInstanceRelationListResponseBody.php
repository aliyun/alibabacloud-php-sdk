<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNetworkInstanceRelationListResponseBody\networkInstanceList;

class DescribeNetworkInstanceRelationListResponseBody extends Model
{
    /**
     * @var networkInstanceList[]
     */
    public $networkInstanceList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'networkInstanceList' => 'NetworkInstanceList',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->networkInstanceList)) {
            Model::validateArray($this->networkInstanceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkInstanceList) {
            if (\is_array($this->networkInstanceList)) {
                $res['NetworkInstanceList'] = [];
                $n1 = 0;
                foreach ($this->networkInstanceList as $item1) {
                    $res['NetworkInstanceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NetworkInstanceList'])) {
            if (!empty($map['NetworkInstanceList'])) {
                $model->networkInstanceList = [];
                $n1 = 0;
                foreach ($map['NetworkInstanceList'] as $item1) {
                    $model->networkInstanceList[$n1] = networkInstanceList::fromMap($item1);
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
