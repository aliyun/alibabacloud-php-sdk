<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetDiscoveredResourceCountsGroupByRegionResponseBody\discoveredResourceCountsSummary;

class GetDiscoveredResourceCountsGroupByRegionResponseBody extends Model
{
    /**
     * @var discoveredResourceCountsSummary[]
     */
    public $discoveredResourceCountsSummary;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'discoveredResourceCountsSummary' => 'DiscoveredResourceCountsSummary',
        'requestId'                       => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->discoveredResourceCountsSummary)) {
            Model::validateArray($this->discoveredResourceCountsSummary);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->discoveredResourceCountsSummary) {
            if (\is_array($this->discoveredResourceCountsSummary)) {
                $res['DiscoveredResourceCountsSummary'] = [];
                $n1                                     = 0;
                foreach ($this->discoveredResourceCountsSummary as $item1) {
                    $res['DiscoveredResourceCountsSummary'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DiscoveredResourceCountsSummary'])) {
            if (!empty($map['DiscoveredResourceCountsSummary'])) {
                $model->discoveredResourceCountsSummary = [];
                $n1                                     = 0;
                foreach ($map['DiscoveredResourceCountsSummary'] as $item1) {
                    $model->discoveredResourceCountsSummary[$n1++] = discoveredResourceCountsSummary::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
