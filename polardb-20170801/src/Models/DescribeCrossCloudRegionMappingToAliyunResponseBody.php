<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeCrossCloudRegionMappingToAliyunResponseBody\crossCloudRegionMappingList;

class DescribeCrossCloudRegionMappingToAliyunResponseBody extends Model
{
    /**
     * @var crossCloudRegionMappingList[]
     */
    public $crossCloudRegionMappingList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'crossCloudRegionMappingList' => 'CrossCloudRegionMappingList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->crossCloudRegionMappingList)) {
            Model::validateArray($this->crossCloudRegionMappingList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crossCloudRegionMappingList) {
            if (\is_array($this->crossCloudRegionMappingList)) {
                $res['CrossCloudRegionMappingList'] = [];
                $n1 = 0;
                foreach ($this->crossCloudRegionMappingList as $item1) {
                    $res['CrossCloudRegionMappingList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['CrossCloudRegionMappingList'])) {
            if (!empty($map['CrossCloudRegionMappingList'])) {
                $model->crossCloudRegionMappingList = [];
                $n1 = 0;
                foreach ($map['CrossCloudRegionMappingList'] as $item1) {
                    $model->crossCloudRegionMappingList[$n1] = crossCloudRegionMappingList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
