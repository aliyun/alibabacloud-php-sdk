<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeEdgeCloudRegionResponseBody\edgeCloudRegions;

class DescribeEdgeCloudRegionResponseBody extends Model
{
    /**
     * @var edgeCloudRegions[]
     */
    public $edgeCloudRegions;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'edgeCloudRegions' => 'EdgeCloudRegions',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->edgeCloudRegions)) {
            Model::validateArray($this->edgeCloudRegions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->edgeCloudRegions) {
            if (\is_array($this->edgeCloudRegions)) {
                $res['EdgeCloudRegions'] = [];
                $n1 = 0;
                foreach ($this->edgeCloudRegions as $item1) {
                    $res['EdgeCloudRegions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EdgeCloudRegions'])) {
            if (!empty($map['EdgeCloudRegions'])) {
                $model->edgeCloudRegions = [];
                $n1 = 0;
                foreach ($map['EdgeCloudRegions'] as $item1) {
                    $model->edgeCloudRegions[$n1] = edgeCloudRegions::fromMap($item1);
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
