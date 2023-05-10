<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourceDriftsResponseBody\resourceDrifts;
use AlibabaCloud\Tea\Model;

class ListStackResourceDriftsResponseBody extends Model
{
    /**
     * @example AAAAAdDWBF2****w==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example B288A0BE-D927-4888-B0F7-B35EF84B6E6F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The actual value of the resource property.
     *
     * @var resourceDrifts[]
     */
    public $resourceDrifts;
    protected $_name = [
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
        'resourceDrifts' => 'ResourceDrifts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceDrifts) {
            $res['ResourceDrifts'] = [];
            if (null !== $this->resourceDrifts && \is_array($this->resourceDrifts)) {
                $n = 0;
                foreach ($this->resourceDrifts as $item) {
                    $res['ResourceDrifts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStackResourceDriftsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceDrifts'])) {
            if (!empty($map['ResourceDrifts'])) {
                $model->resourceDrifts = [];
                $n                     = 0;
                foreach ($map['ResourceDrifts'] as $item) {
                    $model->resourceDrifts[$n++] = null !== $item ? resourceDrifts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
