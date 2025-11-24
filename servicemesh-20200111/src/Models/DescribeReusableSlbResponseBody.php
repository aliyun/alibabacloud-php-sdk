<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeReusableSlbResponseBody\reusableSlbList;

class DescribeReusableSlbResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var reusableSlbList[]
     */
    public $reusableSlbList;
    protected $_name = [
        'requestId' => 'RequestId',
        'reusableSlbList' => 'ReusableSlbList',
    ];

    public function validate()
    {
        if (\is_array($this->reusableSlbList)) {
            Model::validateArray($this->reusableSlbList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->reusableSlbList) {
            if (\is_array($this->reusableSlbList)) {
                $res['ReusableSlbList'] = [];
                $n1 = 0;
                foreach ($this->reusableSlbList as $item1) {
                    $res['ReusableSlbList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['ReusableSlbList'])) {
            if (!empty($map['ReusableSlbList'])) {
                $model->reusableSlbList = [];
                $n1 = 0;
                foreach ($map['ReusableSlbList'] as $item1) {
                    $model->reusableSlbList[$n1] = reusableSlbList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
