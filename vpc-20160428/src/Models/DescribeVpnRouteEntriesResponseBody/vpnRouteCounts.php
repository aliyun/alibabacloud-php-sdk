<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnRouteEntriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnRouteEntriesResponseBody\vpnRouteCounts\vpnRouteCount;

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
        if (\is_array($this->vpnRouteCount)) {
            Model::validateArray($this->vpnRouteCount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vpnRouteCount) {
            if (\is_array($this->vpnRouteCount)) {
                $res['VpnRouteCount'] = [];
                $n1 = 0;
                foreach ($this->vpnRouteCount as $item1) {
                    $res['VpnRouteCount'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['VpnRouteCount'])) {
            if (!empty($map['VpnRouteCount'])) {
                $model->vpnRouteCount = [];
                $n1 = 0;
                foreach ($map['VpnRouteCount'] as $item1) {
                    $model->vpnRouteCount[$n1] = vpnRouteCount::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
