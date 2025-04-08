<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeRegionsResponseBody\regionModelList;

class DescribeRegionsResponseBody extends Model
{
    /**
     * @var regionModelList[]
     */
    public $regionModelList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'regionModelList' => 'RegionModelList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->regionModelList)) {
            Model::validateArray($this->regionModelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionModelList) {
            if (\is_array($this->regionModelList)) {
                $res['RegionModelList'] = [];
                $n1 = 0;
                foreach ($this->regionModelList as $item1) {
                    $res['RegionModelList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RegionModelList'])) {
            if (!empty($map['RegionModelList'])) {
                $model->regionModelList = [];
                $n1 = 0;
                foreach ($map['RegionModelList'] as $item1) {
                    $model->regionModelList[$n1++] = regionModelList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
