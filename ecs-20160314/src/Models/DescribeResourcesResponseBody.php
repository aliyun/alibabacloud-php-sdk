<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourcesResponseBody\resources;
use AlibabaCloud\Tea\Model;

class DescribeResourcesResponseBody extends Model
{
    /**
     * @var int
     */
    public $estimatedTotal;

    /**
     * @var string
     */
    public $marker;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resources
     */
    public $resources;

    /**
     * @var bool
     */
    public $truncated;
    protected $_name = [
        'estimatedTotal' => 'EstimatedTotal',
        'marker'         => 'Marker',
        'requestId'      => 'RequestId',
        'resources'      => 'Resources',
        'truncated'      => 'Truncated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->estimatedTotal) {
            $res['EstimatedTotal'] = $this->estimatedTotal;
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = null !== $this->resources ? $this->resources->toMap() : null;
        }
        if (null !== $this->truncated) {
            $res['Truncated'] = $this->truncated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EstimatedTotal'])) {
            $model->estimatedTotal = $map['EstimatedTotal'];
        }
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Resources'])) {
            $model->resources = resources::fromMap($map['Resources']);
        }
        if (isset($map['Truncated'])) {
            $model->truncated = $map['Truncated'];
        }

        return $model;
    }
}
