<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeActiveOperationTaskRegionResponseBody\regionList;

class DescribeActiveOperationTaskRegionResponseBody extends Model
{
    /**
     * @var regionList[]
     */
    public $regionList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'regionList' => 'RegionList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->regionList)) {
            Model::validateArray($this->regionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionList) {
            if (\is_array($this->regionList)) {
                $res['RegionList'] = [];
                $n1 = 0;
                foreach ($this->regionList as $item1) {
                    $res['RegionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RegionList'])) {
            if (!empty($map['RegionList'])) {
                $model->regionList = [];
                $n1 = 0;
                foreach ($map['RegionList'] as $item1) {
                    $model->regionList[$n1++] = regionList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
