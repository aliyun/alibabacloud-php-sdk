<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelAreaDistributionStatDataResponseBody\areaStatList;

class DescribeChannelAreaDistributionStatDataResponseBody extends Model
{
    /**
     * @var areaStatList[]
     */
    public $areaStatList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'areaStatList' => 'AreaStatList',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->areaStatList)) {
            Model::validateArray($this->areaStatList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->areaStatList) {
            if (\is_array($this->areaStatList)) {
                $res['AreaStatList'] = [];
                $n1                  = 0;
                foreach ($this->areaStatList as $item1) {
                    $res['AreaStatList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AreaStatList'])) {
            if (!empty($map['AreaStatList'])) {
                $model->areaStatList = [];
                $n1                  = 0;
                foreach ($map['AreaStatList'] as $item1) {
                    $model->areaStatList[$n1++] = areaStatList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
