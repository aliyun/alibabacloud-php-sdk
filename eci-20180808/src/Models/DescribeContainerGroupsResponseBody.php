<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups;
use AlibabaCloud\Tea\Model;

class DescribeContainerGroupsResponseBody extends Model
{
    /**
     * @description Details about the elastic container instances.
     *
     * @var containerGroups[]
     */
    public $containerGroups;

    /**
     * @description The token that determines the start point of the query.
     *
     * @example d78f2dd8-5979-42fe-****-b16db43be5bc
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request. The value is unique.
     *
     * @example 89945DD3-9072-47D0-A318-353284CFC7B3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of queried instances.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'containerGroups' => 'ContainerGroups',
        'nextToken'       => 'NextToken',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerGroups) {
            $res['ContainerGroups'] = [];
            if (null !== $this->containerGroups && \is_array($this->containerGroups)) {
                $n = 0;
                foreach ($this->containerGroups as $item) {
                    $res['ContainerGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContainerGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerGroups'])) {
            if (!empty($map['ContainerGroups'])) {
                $model->containerGroups = [];
                $n                      = 0;
                foreach ($map['ContainerGroups'] as $item) {
                    $model->containerGroups[$n++] = null !== $item ? containerGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
