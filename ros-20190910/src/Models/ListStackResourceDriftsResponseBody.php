<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourceDriftsResponseBody\resourceDrifts;
use AlibabaCloud\Tea\Model;

class ListStackResourceDriftsResponseBody extends Model
{
    /**
     * @var resourceDrifts[]
     */
    public $resourceDrifts;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'resourceDrifts' => 'ResourceDrifts',
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceDrifts) {
            $res['ResourceDrifts'] = [];
            if (null !== $this->resourceDrifts && \is_array($this->resourceDrifts)) {
                $n = 0;
                foreach ($this->resourceDrifts as $item) {
                    $res['ResourceDrifts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ResourceDrifts'])) {
            if (!empty($map['ResourceDrifts'])) {
                $model->resourceDrifts = [];
                $n                     = 0;
                foreach ($map['ResourceDrifts'] as $item) {
                    $model->resourceDrifts[$n++] = null !== $item ? resourceDrifts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
