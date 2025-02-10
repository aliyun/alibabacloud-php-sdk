<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnPbrRouteEntriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnPbrRouteEntriesResponseBody\vpnPbrRouteEntries\vpnPbrRouteEntry;

class vpnPbrRouteEntries extends Model
{
    /**
     * @var vpnPbrRouteEntry[]
     */
    public $vpnPbrRouteEntry;
    protected $_name = [
        'vpnPbrRouteEntry' => 'VpnPbrRouteEntry',
    ];

    public function validate()
    {
        if (\is_array($this->vpnPbrRouteEntry)) {
            Model::validateArray($this->vpnPbrRouteEntry);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vpnPbrRouteEntry) {
            if (\is_array($this->vpnPbrRouteEntry)) {
                $res['VpnPbrRouteEntry'] = [];
                $n1                      = 0;
                foreach ($this->vpnPbrRouteEntry as $item1) {
                    $res['VpnPbrRouteEntry'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VpnPbrRouteEntry'])) {
            if (!empty($map['VpnPbrRouteEntry'])) {
                $model->vpnPbrRouteEntry = [];
                $n1                      = 0;
                foreach ($map['VpnPbrRouteEntry'] as $item1) {
                    $model->vpnPbrRouteEntry[$n1++] = vpnPbrRouteEntry::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
