<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcListLiteResponseBody\vpcList;

class DescribeVpcListLiteResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var vpcList[]
     */
    public $vpcList;
    protected $_name = [
        'requestId' => 'RequestId',
        'vpcList' => 'VpcList',
    ];

    public function validate()
    {
        if (\is_array($this->vpcList)) {
            Model::validateArray($this->vpcList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->vpcList) {
            if (\is_array($this->vpcList)) {
                $res['VpcList'] = [];
                $n1 = 0;
                foreach ($this->vpcList as $item1) {
                    $res['VpcList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['VpcList'])) {
            if (!empty($map['VpcList'])) {
                $model->vpcList = [];
                $n1 = 0;
                foreach ($map['VpcList'] as $item1) {
                    $model->vpcList[$n1] = vpcList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
