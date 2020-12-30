<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnRouteEntriesResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnRouteEntriesResponseBody\vpnRouteEntries\vpnRouteEntry;
use AlibabaCloud\Tea\Model;

class vpnRouteEntries extends Model
{
    /**
     * @var vpnRouteEntry[]
     */
    public $vpnRouteEntry;
    protected $_name = [
        'vpnRouteEntry' => 'VpnRouteEntry',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpnRouteEntry) {
            $res['VpnRouteEntry'] = [];
            if (null !== $this->vpnRouteEntry && \is_array($this->vpnRouteEntry)) {
                $n = 0;
                foreach ($this->vpnRouteEntry as $item) {
                    $res['VpnRouteEntry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpnRouteEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpnRouteEntry'])) {
            if (!empty($map['VpnRouteEntry'])) {
                $model->vpnRouteEntry = [];
                $n                    = 0;
                foreach ($map['VpnRouteEntry'] as $item) {
                    $model->vpnRouteEntry[$n++] = null !== $item ? vpnRouteEntry::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
