<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeStatisticSummaryResponseBody;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeStatisticSummaryResponseBody\vpcRequestTops\vpcRequestTop;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcRequestTop) {
            $res['VpcRequestTop'] = [];
            if (null !== $this->vpcRequestTop && \is_array($this->vpcRequestTop)) {
                $n = 0;
                foreach ($this->vpcRequestTop as $item) {
                    $res['VpcRequestTop'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcRequestTops
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcRequestTop'])) {
            if (!empty($map['VpcRequestTop'])) {
                $model->vpcRequestTop = [];
                $n                    = 0;
                foreach ($map['VpcRequestTop'] as $item) {
                    $model->vpcRequestTop[$n++] = null !== $item ? vpcRequestTop::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
