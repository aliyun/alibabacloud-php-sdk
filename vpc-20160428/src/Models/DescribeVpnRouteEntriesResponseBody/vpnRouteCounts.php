<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnRouteEntriesResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnRouteEntriesResponseBody\vpnRouteCounts\vpnRouteCount;
use AlibabaCloud\Tea\Model;

class vpnRouteCounts extends Model
{
    /**
     * @var vpnRouteCount[]
     */
    public $vpnRouteCount;
    protected $_name = [
        'vpnRouteCount' => 'VpnRouteCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpnRouteCount) {
            $res['VpnRouteCount'] = [];
            if (null !== $this->vpnRouteCount && \is_array($this->vpnRouteCount)) {
                $n = 0;
                foreach ($this->vpnRouteCount as $item) {
                    $res['VpnRouteCount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpnRouteCounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpnRouteCount'])) {
            if (!empty($map['VpnRouteCount'])) {
                $model->vpnRouteCount = [];
                $n                    = 0;
                foreach ($map['VpnRouteCount'] as $item) {
                    $model->vpnRouteCount[$n++] = null !== $item ? vpnRouteCount::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
