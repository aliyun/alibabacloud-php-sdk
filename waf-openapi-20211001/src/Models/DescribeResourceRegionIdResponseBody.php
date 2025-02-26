<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DescribeResourceRegionIdResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string[]
     */
    public $resourceRegionIds;
    protected $_name = [
        'requestId'         => 'RequestId',
        'resourceRegionIds' => 'ResourceRegionIds',
    ];

    public function validate()
    {
        if (\is_array($this->resourceRegionIds)) {
            Model::validateArray($this->resourceRegionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceRegionIds) {
            if (\is_array($this->resourceRegionIds)) {
                $res['ResourceRegionIds'] = [];
                $n1                       = 0;
                foreach ($this->resourceRegionIds as $item1) {
                    $res['ResourceRegionIds'][$n1++] = $item1;
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

        if (isset($map['ResourceRegionIds'])) {
            if (!empty($map['ResourceRegionIds'])) {
                $model->resourceRegionIds = [];
                $n1                       = 0;
                foreach ($map['ResourceRegionIds'] as $item1) {
                    $model->resourceRegionIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
