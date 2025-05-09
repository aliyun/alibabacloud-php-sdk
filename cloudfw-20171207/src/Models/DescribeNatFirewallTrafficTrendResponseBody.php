<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallTrafficTrendResponseBody\dataList;

class DescribeNatFirewallTrafficTrendResponseBody extends Model
{
    /**
     * @var dataList[]
     */
    public $dataList;

    /**
     * @var int
     */
    public $maxInBps;

    /**
     * @var int
     */
    public $maxOutBps;

    /**
     * @var int
     */
    public $maxTotalBps;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataList' => 'DataList',
        'maxInBps' => 'MaxInBps',
        'maxOutBps' => 'MaxOutBps',
        'maxTotalBps' => 'MaxTotalBps',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->dataList)) {
            Model::validateArray($this->dataList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataList) {
            if (\is_array($this->dataList)) {
                $res['DataList'] = [];
                $n1 = 0;
                foreach ($this->dataList as $item1) {
                    $res['DataList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->maxInBps) {
            $res['MaxInBps'] = $this->maxInBps;
        }

        if (null !== $this->maxOutBps) {
            $res['MaxOutBps'] = $this->maxOutBps;
        }

        if (null !== $this->maxTotalBps) {
            $res['MaxTotalBps'] = $this->maxTotalBps;
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
        if (isset($map['DataList'])) {
            if (!empty($map['DataList'])) {
                $model->dataList = [];
                $n1 = 0;
                foreach ($map['DataList'] as $item1) {
                    $model->dataList[$n1++] = dataList::fromMap($item1);
                }
            }
        }

        if (isset($map['MaxInBps'])) {
            $model->maxInBps = $map['MaxInBps'];
        }

        if (isset($map['MaxOutBps'])) {
            $model->maxOutBps = $map['MaxOutBps'];
        }

        if (isset($map['MaxTotalBps'])) {
            $model->maxTotalBps = $map['MaxTotalBps'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
