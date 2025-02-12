<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDestinationPortEventResponseBody\portList;

class DescribeDestinationPortEventResponseBody extends Model
{
    /**
     * @var portList[]
     */
    public $portList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'portList'  => 'PortList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->portList)) {
            Model::validateArray($this->portList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->portList) {
            if (\is_array($this->portList)) {
                $res['PortList'] = [];
                $n1              = 0;
                foreach ($this->portList as $item1) {
                    $res['PortList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PortList'])) {
            if (!empty($map['PortList'])) {
                $model->portList = [];
                $n1              = 0;
                foreach ($map['PortList'] as $item1) {
                    $model->portList[$n1++] = portList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
