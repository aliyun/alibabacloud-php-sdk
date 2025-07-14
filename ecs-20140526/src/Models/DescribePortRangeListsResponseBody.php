<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePortRangeListsResponseBody\portRangeLists;
use AlibabaCloud\Tea\Model;

class DescribePortRangeListsResponseBody extends Model
{
    /**
     * @description A pagination token. If the return value is empty, no more data is returned.
     *
     * @example AAAAAdDWBF2
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Details of the port lists.
     *
     * @var portRangeLists[]
     */
    public $portRangeLists;

    /**
     * @description The request ID.
     *
     * @example 6040AD98-11C3-5F78-9346-FCA8E9D8960F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken' => 'NextToken',
        'portRangeLists' => 'PortRangeLists',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->portRangeLists) {
            $res['PortRangeLists'] = [];
            if (null !== $this->portRangeLists && \is_array($this->portRangeLists)) {
                $n = 0;
                foreach ($this->portRangeLists as $item) {
                    $res['PortRangeLists'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribePortRangeListsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PortRangeLists'])) {
            if (!empty($map['PortRangeLists'])) {
                $model->portRangeLists = [];
                $n = 0;
                foreach ($map['PortRangeLists'] as $item) {
                    $model->portRangeLists[$n++] = null !== $item ? portRangeLists::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
