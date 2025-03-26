<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnRouteEntriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnRouteEntriesResponseBody\vpnRouteEntries\vpnRouteEntry;

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
        if (\is_array($this->vpnRouteEntry)) {
            Model::validateArray($this->vpnRouteEntry);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vpnRouteEntry) {
            if (\is_array($this->vpnRouteEntry)) {
                $res['VpnRouteEntry'] = [];
                $n1 = 0;
                foreach ($this->vpnRouteEntry as $item1) {
                    $res['VpnRouteEntry'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['VpnRouteEntry'])) {
            if (!empty($map['VpnRouteEntry'])) {
                $model->vpnRouteEntry = [];
                $n1 = 0;
                foreach ($map['VpnRouteEntry'] as $item1) {
                    $model->vpnRouteEntry[$n1++] = vpnRouteEntry::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
