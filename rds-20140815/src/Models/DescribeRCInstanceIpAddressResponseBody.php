<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceIpAddressResponseBody\RCInstanceList;

class DescribeRCInstanceIpAddressResponseBody extends Model
{
    /**
     * @var RCInstanceList[]
     */
    public $RCInstanceList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $total;
    protected $_name = [
        'RCInstanceList' => 'RCInstanceList',
        'requestId' => 'RequestId',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->RCInstanceList)) {
            Model::validateArray($this->RCInstanceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->RCInstanceList) {
            if (\is_array($this->RCInstanceList)) {
                $res['RCInstanceList'] = [];
                $n1 = 0;
                foreach ($this->RCInstanceList as $item1) {
                    $res['RCInstanceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['RCInstanceList'])) {
            if (!empty($map['RCInstanceList'])) {
                $model->RCInstanceList = [];
                $n1 = 0;
                foreach ($map['RCInstanceList'] as $item1) {
                    $model->RCInstanceList[$n1++] = RCInstanceList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
