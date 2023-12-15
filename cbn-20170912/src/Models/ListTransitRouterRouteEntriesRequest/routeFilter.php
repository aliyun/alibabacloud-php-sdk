<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteEntriesRequest;

use AlibabaCloud\Tea\Model;

class routeFilter extends Model
{
    /**
     * @description The match pattern for filtering CIDR blocks. Valid values:
     *
     *   **PrefixExactMatchCidrs**: exact matching.
     *   **LongestPrefixMatchCidrs**: longest prefix matching. The specified IP address and CIDR block are considered a match.
     *   **SubnetOfMatchCidrs**: subnet matching. The specified CIDR block is considered a match.
     *   **SupernetOfMatchCidrs**: supernet matching. The specified CIDR block is considered a match.
     *
     * By default, the logical operator among filter conditions is **AND**. Information about a route entry is returned only if the route entry matches all filter conditions. Filter conditions must be unique.
     * @example PrefixExactMatchCidrs
     *
     * @var string
     */
    public $key;

    /**
     * @description The filter value.
     *
     * @var string[]
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeFilter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            if (!empty($map['Value'])) {
                $model->value = $map['Value'];
            }
        }

        return $model;
    }
}
