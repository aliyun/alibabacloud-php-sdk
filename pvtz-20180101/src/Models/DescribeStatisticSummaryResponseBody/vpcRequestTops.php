<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeStatisticSummaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeStatisticSummaryResponseBody\vpcRequestTops\vpcRequestTop;

class vpcRequestTops extends Model
{
    /**
     * @var vpcRequestTop[]
     */
    public $vpcRequestTop;
    protected $_name = [
        'vpcRequestTop' => 'VpcRequestTop',
    ];

    public function validate()
    {
        if (\is_array($this->vpcRequestTop)) {
            Model::validateArray($this->vpcRequestTop);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vpcRequestTop) {
            if (\is_array($this->vpcRequestTop)) {
                $res['VpcRequestTop'] = [];
                $n1 = 0;
                foreach ($this->vpcRequestTop as $item1) {
                    $res['VpcRequestTop'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VpcRequestTop'])) {
            if (!empty($map['VpcRequestTop'])) {
                $model->vpcRequestTop = [];
                $n1 = 0;
                foreach ($map['VpcRequestTop'] as $item1) {
                    $model->vpcRequestTop[$n1] = vpcRequestTop::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
