<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePortRangeListAssociationsResponseBody\portRangeListAssociations;
use AlibabaCloud\Tea\Model;

class DescribePortRangeListAssociationsResponseBody extends Model
{
    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results. If the return value is empty, no more data is returned.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The resources that are associated with the port list.
     *
     * @var portRangeListAssociations[]
     */
    public $portRangeListAssociations;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken' => 'NextToken',
        'portRangeListAssociations' => 'PortRangeListAssociations',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->portRangeListAssociations) {
            $res['PortRangeListAssociations'] = [];
            if (null !== $this->portRangeListAssociations && \is_array($this->portRangeListAssociations)) {
                $n = 0;
                foreach ($this->portRangeListAssociations as $item) {
                    $res['PortRangeListAssociations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePortRangeListAssociationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PortRangeListAssociations'])) {
            if (!empty($map['PortRangeListAssociations'])) {
                $model->portRangeListAssociations = [];
                $n = 0;
                foreach ($map['PortRangeListAssociations'] as $item) {
                    $model->portRangeListAssociations[$n++] = null !== $item ? portRangeListAssociations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
